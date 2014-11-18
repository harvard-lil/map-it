<?php

class Locate extends Controller {

    function map_w_item() {
        $f3 = $this->framework;
        $template_path = 'web/maps/' . $f3->get('PARAMS.library') . '/' . $f3->get('PARAMS.floor') . '.html';
        $f3->set('library',$f3->get('PARAMS.library'));
        $f3->set('floor',$f3->get('PARAMS.floor'));
        $f3->set('row',$f3->get('PARAMS.row'));
        $f3->set('hollis',$f3->get('PARAMS.hollis'));
        $f3->set('callno',$f3->get('PARAMS.callno'));
        $f3->set('www_root',$f3->get('MAP_IT_HOME'));
        $f3->set('ga_key', $f3->get('GOOGLE_ANALYTICS_KEY'));
        $f3->set('ga_domain', $f3->get('GOOGLE_ANALYTICS_DOMAIN'));
        $library_names = $f3->get('library_names');
        $f3->set('display',$library_names[$f3->get('library')]);
        $f3->set('header','web/header.html');
        $f3->set('headermap', 'web/headermap.html');
        $f3->set('footer', 'web/footer.html');
        
        //lookup item info
        $url = $f3->get('BARCODE_API') . $f3->get('PARAMS.hollis');
      
        $ch = curl_init();
          
        curl_setopt($ch, CURLOPT_URL, $url);
          
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept: application/json'));
          
        $contents = curl_exec($ch);
          
        curl_close ($ch);
                  
        $contents = json_decode($contents, true);
        $contents = $contents['rlistFormat']['hollis'];
        
        $title = $contents['title'];
        
        //$callnum = $contents->mods->location->shelfLocator;
        
        $creators = $contents['authors']['authorName'];
        if(is_array($creators[0])) {
            if(strlen($creators[0]['authorLast']) > 0) {
                $creator = $creators[0]['authorLast'];
                if(!is_array($creators[0]['authorFirst']))
                    $creator .= ', ' . $creators[0]['authorFirst'];
            }
            else
                $creator = $creators['authorFirst'];
        }
        else {
            if(strlen($creators['authorLast']) > 0) {
                $creator = $creators['authorLast'];
                if(!is_array($creators['authorFirst']))
                    $creator .= ', ' . $creators['authorFirst'];
            }
            else
                $creator = $creators['authorFirst'];
        }
        
        if(strlen($creator) == 0) {
            $creators = $contents['authors']['editorName'];
            if(is_array($creators[0])) {
                if(strlen($creators[0]['editorLast']) > 0) {
                    $creator = $creators[0]['editorLast'];
                    if(!is_array($creators[0]['editorFirst']))
                        $creator .= ', ' . $creators[0]['editorFirst'];
                }
                else
                    $creator = $creators['editorFirst'];
            }
            else {
                if(strlen($creators['editorLast']) > 0) {
                    $creator = $creators['editorLast'];
                    if(!is_array($creators['editorFirst']))
                        $creator .= ', ' . $creators['editorFirst'];
                }
                else
                    $creator = $creators['editorFirst'];
            }
        }

        $f3->set('title', $title);
        //$f3->set('callnum', $callnum);
        $f3->set('creator', $creator);
    
        $template = new Template;
        echo $template->render($template_path);

    }

    function call_number() {
      $f3=$this->framework;
      
      $callno_text = $f3->get('PARAMS.callno');
      $location = $f3->get('PARAMS.location');
      $collection = $f3->get('PARAMS.collection');
      $hollis = $f3->get('PARAMS.hollis');
      
      $location = $this->call_number_locate($callno_text, $location, $collection, $hollis);
      
      if (!$location)
      {
        $FIELDS     = array('floor','range');
        $JSON = array();
        $_datas   = array('not found', 'not found');        
        $_tmparr  = array_combine($FIELDS, $_datas);
        array_push($JSON, $_tmparr);
        echo json_encode($JSON);
      }else {  
        $callback = $_GET['callback'];
        header('Content-type: application/json');
        echo $callback . '(' . json_encode($location) . ')';
      }
      mysql_close();
    }
    
    function batch_call_number() {
        $items = $_POST['items'];
        $locations = array();
        foreach($items as $item) {
            if (strpos($item,'WID-LC') !== false) {
                $collection = 'widlc';
                $call_number = trim(str_replace('WID-LC', '', $item));
            }
            else {
                $collection = 'gen';
                $call_number = trim($item);
            }
            if($call_number != '') {
                $location = $this->call_number_locate($call_number, 'wid', $collection, '');
                echo $location['floor'] . ' ' . $location['range'] . '<br>';
            }
        }
    }
    
    function call_number_locate($callno_text, $location, $collection, $hollis){ 
        $f3=$this->framework;
        $db = $f3->get('DB');
        $db_user = $f3->get('DB_USER');
        $db_password = $f3->get('DB_PASSWORD');
        $db_host = $f3->get('DB_HOST');
          
        require_once(dirname(__FILE__).'/callno_parser.php');
            
        mysql_connect($db_host, $db_user, $db_password)
        or die ("Could not connect to resource");
    
        mysql_select_db($db)
        or die ("Could not connect to database");
        
        $this_library = strtolower($location);
        
        if($location == "LAW" && preg_match('/^[A-Z]{1,7} +[0-9]{3}[A-Z. ].*/', $callno_text)) {
        $something = "Moody";
      }
      elseif(preg_match('/^[a-zA-Z]* +[0-9]*.*/', $callno_text)) {
        $callno_text = preg_replace('/ /', '', $callno_text, 1);
      }
      
      $callno = new callno($callno_text);
      
      $urlcallno = str_replace(" ","+",$callno->str_callno);
      
      $hashes = array($callno->subclass, $callno->index_1, $callno->index_2, $callno->index_3);
      
      # Prelimenary query, to ease sql
      
      $all_callno_array = array();
      
      $query = "SELECT * FROM `all_callno` WHERE `collection` = '$collection' && `library` = '$this_library'";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result))
      {
        array_push($all_callno_array, new callno($row['begin_callno']));
      }
      
      
      # Check if it exists
      for ($j=0;$j<sizeof($all_callno_array);$j++)
      {
        $cur = $all_callno_array[$j];
        if (cmp_callno($cur, $callno) == 0)
        {
          # echo "Exact value exists";
          $query = 
          "SELECT `floor`, `range` FROM `all_callno` WHERE `begin_callno` = '$callno->str_callno' && `collection` = '$collection' && `library` = '$this_library'";
          $res = mysql_query($query);
          $row = mysql_fetch_array($res);
          $floor = $row['floor'];
          $range = $row['range'];
        }	
      }
      
      if (!isset($floor))
      {
        // Find the Range
        array_push($all_callno_array, $callno);
        usort($all_callno_array, "cmp_callno"); 
        //print_r($all_callno_array);
      
        for ($j=0;$j<sizeof($all_callno_array);$j++)
        {
          $cur = $all_callno_array[$j];
          
          //echo $callno->str_callno . " ::: " . $cur->str_callno . "<br>";
          if (cmp_callno($cur, $callno) == 0)
          {
            $begin = $all_callno_array[$j-1];
            $end = $all_callno_array[$j+1];
            break;
          }		
        }	
      
        $query = 
        "SELECT `floor`, `range` FROM `all_callno` WHERE `begin_callno` = '$begin->str_callno' && `collection` = '$collection' && `library` = '$this_library'";
        $res = mysql_query($query);
        $row = mysql_fetch_array($res);
        $floor = $row['floor'];
        $range = $row['range'];
      }
    if (!isset($floor))
      {
        return false;
      }else {
        $location = strtolower($location);
        $www_root = $f3->get('MAP_IT_HOME');
        $maplink = $www_root . "map/$location/$floor/$range/$hollis/$callno_text";
      
        $json = array();
        /*$json['floor'] = $floor;
        $json['range'] = $range;
        $json['maplink'] = $maplink;*/
        $fields     = array('floor','range', 'maplink');
        $_datas   = array($floor, $range, $maplink);
                  
        $_tmparr  = array_combine($fields, $_datas);
        array_push($json, $_tmparr);
        return $json;
      }
    }
    
    function batch_barcode() {
        $barcodes = $_POST['barcodes'];
        $locations = array();
        foreach($barcodes as $barcode) {
            $barcode = str_replace('*', '', $barcode);
            if($barcode != '') {
                $location = $this->barcode_locate($barcode);
                echo $location['floor'] . ' ' . $location['range'] . '<br>';
            }
        }
    }
    
    function barcode() {
      //$barcode = $f3->get('PARAMS.barcode');
      $barcode = $_REQUEST['barcode'];
        $json = array();
        $location = $this->barcode_locate($barcode);
        
    if (!$location)
      {
        $FIELDS     = array('floor','range');
        $JSON = array();
        $_datas   = array('not found', 'not found');
                  
        $_tmparr  = array_combine($FIELDS, $_datas);
        array_push($JSON, $_tmparr);
        echo json_encode($JSON);
      }else {
      
        header('Content-type: application/json');
        echo json_encode($location);
      }
      
    }
    
    function barcode_locate($barcode) {
        $f3=$this->framework;
      $url = $f3->get('BARCODE_API') . $barcode;
      
      $ch = curl_init();
      
      curl_setopt($ch, CURLOPT_URL, $url);
      
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      
      curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept: application/json'));
      
      $contents = curl_exec($ch);
      
      curl_close ($ch);
              
      $contents = json_decode($contents);
      
      $hollis = $contents->rlistFormat->hollis->hollisId;
      $hollis = substr($hollis, 0, 9);
      $hollis_length=strlen($hollis);
      if($hollis_length <= 9) {
        $loop = 9 - $hollis_length;
        for($j=0; $j<$loop; $j++){
          $hollis = '0'.$hollis;
        }
      }
      
      $url = $f3->get('HOLLIS_API') . $hollis;
        
      $ch = curl_init();
      
      curl_setopt($ch, CURLOPT_URL, $url);
      
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      
      $libraries = curl_exec ($ch);
        
      curl_close ($ch);
        
      $xml = simplexml_load_string($libraries);
      
      if($xml->xpath("//item[@barcode='$barcode']")) {
      $item = $xml->xpath("//item[@barcode='$barcode']");

      $itemparent = $item[0]->xpath("parent::*");
      $libraryparent = $itemparent[0]->xpath("parent::*/@name");
      $this_library = strtolower($libraryparent[0]['name']);
      
      $callno = $xml->xpath("//item[@barcode='$barcode']/@callno");
      $callno = (string) $callno[0]['callno'];
      if($callno === "")
        return false;
      
      $collection = $xml->xpath("//xserverrawdata[@barcode='$barcode']/@collection");
      $collection = (string) $collection[0]['collection'];
      if($collection === "")
        $collection = "";
      
      $library = $xml->xpath("//xserverrawdata[@barcode='$barcode']/@sub-library");
      $library = (string) $library[0]['sub-library'];
      if($library === "")
        $library = "";
      
      if($library == "Law School" && preg_match('/^[A-Z]{1,7} +[0-9]{3}[A-Z. ].*/', $callno)) {
      }
      elseif(preg_match('/^[a-zA-Z]* +[0-9]*.*/', $callno)) {
        $callno = preg_replace('/ /', '', $callno, 1);
      }

      $folio = false;
      
      if(preg_match('/\s(F|PF)\z/i', $callno)) {
        $folio = true;
        $collection = 'FOLIO';
      }
      
      $callno_text = $callno;
      
      $db = $f3->get('DB');
      $db_user = $f3->get('DB_USER');
      $db_password = $f3->get('DB_PASSWORD');
      $db_host = $f3->get('DB_HOST');
      
      require_once(dirname(__FILE__).'/callno_parser.php');
        
      mysql_connect($db_host, $db_user, $db_password)
      or die ("Could not connect to resource");

      mysql_select_db($db)
      or die ("Could not connect to database");
      
      $callno = new callno($callno_text);
      
      $hashes = array($callno->subclass, $callno->index_1, $callno->index_2, $callno->index_3);
      
      # Prelimenary query, to ease sql
      
      $all_callno_array = array();
      
      $query = "SELECT * FROM `all_callno` WHERE `collection` = '$collection' AND `library` = '$this_library'";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result))
      {
        array_push($all_callno_array, new callno($row['begin_callno']));
      }
      
      # Check if it exists
      for ($j=0;$j<sizeof($all_callno_array);$j++)
      {
        $cur = $all_callno_array[$j];
        if (cmp_callno($cur, $callno) == 0)
        {
          # echo "Exact value exists";
          $query = 
          "SELECT `floor`, `range` FROM `all_callno` WHERE `begin_callno` = '$callno->str_callno' && `collection` = '$collection' && `library` = '$this_library'";
          $res = mysql_query($query);
          $row = mysql_fetch_array($res);
          $floor = $row['floor'];
          $range = $row['range'];
        }	
      }
      
      if (!isset($floor))
      {
        // Find the Range
        array_push($all_callno_array, $callno);
        usort($all_callno_array, "cmp_callno");
      
        for ($j=0;$j<sizeof($all_callno_array);$j++)
        {
          $cur = $all_callno_array[$j];

          if (cmp_callno($cur, $callno) == 0)
          {
            $begin = $all_callno_array[$j-1];
            $end = $all_callno_array[$j+1];
            break;
          }		
        }	
      
        $query = 
        "SELECT `floor`, `range` FROM `all_callno` WHERE `begin_callno` = '$begin->str_callno' && `collection` = '$collection' && `library` = '$this_library'";
      
        $res = mysql_query($query);
        $row = mysql_fetch_array($res);
        $floor = $row['floor'];
        $range = $row['range'];
      }
      
      }
      
      if (!isset($floor))
      {
        return false;
      }else {
        $json = array();
        $json['floor'] = $floor;
        $json['range'] = $range;
        $json['library'] = $library;
        return $json;
      }
      
      mysql_close();
    } 
    
    function transfer() {
      $f3=$this->framework;
      $db = $f3->get('DB');
      $db_user = $f3->get('DB_USER');
      $db_password = $f3->get('DB_PASSWORD');
      $db_host = $f3->get('DB_HOST');
      
      require(dirname(__FILE__).'/callno_parser.php');
        
      /*$this->set('results', json_decode($results, true));
      $path_to_template = 'api/templates/direct_access_json.php';
      echo $this->render($path_to_template);*/
      mysql_connect($db_host, $db_user, $db_password)
      or die ("Could not connect to resource");

      mysql_select_db($db)
      or die ("Could not connect to database");
      
      $library = $_REQUEST['library'];
      $table = $library . "_callno";
      $query = "SELECT * FROM `$table`";
      $result = mysql_query($query);
      while ($row = mysql_fetch_array($result))
      {
        $callno = $row[1];
        $collection = $row[2];
        $floor = $row[3];
        $range = $row[4];
        $insert_query = "INSERT INTO `all_callno` (`library`, `begin_callno`, `collection`, `floor`, `range`) VALUES ('$library', '$callno', '$collection', '$floor', '$range')";
        echo $insert_query;
        $insert_result = mysql_query($insert_query);
      }
    }

}
?>
