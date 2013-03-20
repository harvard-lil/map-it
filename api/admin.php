<?php

class Admin extends Controller {

    function display() {
      $f3=$this->framework;
      $db = $f3->get('DB');
      $db_user = $f3->get('DB_USER');
      $db_password = $f3->get('DB_PASSWORD');
      $db_host = $f3->get('DB_HOST');
      
      mysql_connect($db_host, $db_user, $db_password)
      or die ("Could not connect to resource");

      mysql_select_db($db)
      or die ("Could not connect to database");
      
      $library = $f3->get('PARAMS.library');
      $table = $library . "_callno";
      
      $json = array();
      
      
      $add  = "SELECT * FROM book_locator.$table";
      
      $result = mysql_query($add);
      
      while($row = mysql_fetch_row($result)) {
        //$fields     = array('floor','range', 'callno');
        $data   = array($row[0], $row[2], $row[3], $row[4], $row[1], "");
                  
        //$_tmparr  = array_combine($fields, $data);
        array_push($json, $data);
      }
      
      $callnos = array();
      $callnos['aaData'] = $json;
      header('Content-type: application/json');
      echo json_encode($callnos);

      mysql_close();
    }
    
    function delete() {
        $f3=$this->framework;
        $map_it_key = $f3->get('map_it_key');

        if(!$_POST['key'] || !($_POST['key'] == $map_it_key)) {
          echo "Sorry, the API key provided does not match";
        }
        else {
          $db = $f3->get('DB');
          $db_user = $f3->get('DB_USER');
          $db_password = $f3->get('DB_PASSWORD');
          $db_host = $f3->get('DB_HOST');
          
          mysql_connect($db_host, $db_user, $db_password)
          or die ("Could not connect to resource");
    
          mysql_select_db($db)
          or die ("Could not connect to database");
          
          //$id = $f3->get('PARAMS.id');
          //$library = $f3->get('PARAMS.library');
  
          $id = $_POST['id'];
          $library = $_POST['library'];
          
          /*switch ($library) {
              case "wid":
                  $table= "wid_callno";
                  break;
              case "cab":
                  $table = "cab_callno";
                  break;
              case "lam":
                  $table = "lam_callno";
                  break;
              case "law":
                  $table = "law_callno";
                  break;
              case "mcz":
                  $table = "mcz_callno";
                  break;
              case "test":
                  $table = "test_callno";
                  break;
          }*/
          $table = $library . "_callno";
          
          if($id != "") {
          
            $insert_query = "DELETE FROM $table WHERE id = '$id'";
            $insert_result = mysql_query($insert_query);
            
            echo 'Deleted';
                 
          }
          
          mysql_close();
        }
    }
    
    function create() {
      $f3=$this->framework;
      $map_it_key = $f3->get('map_it_key');

      if(!$_POST['key'] || !($_POST['key'] == $map_it_key)) {
        echo "Sorry, the API key provided does not match";
      }
      else {
        $db = $f3->get('DB');
        $db_user = $f3->get('DB_USER');
        $db_password = $f3->get('DB_PASSWORD');
        $db_host = $f3->get('DB_HOST');
          
        mysql_connect($db_host, $db_user, $db_password)
        or die ("Could not connect to resource");
    
        mysql_select_db($db)
        or die ("Could not connect to database");
        $floor = $_POST['add-floor'];
        $range = $_POST['add-row'];
        $callno = $_POST['add-callno'];
        $library = $_POST['library'];

        /*switch ($library) {
            case "wid":
                $table= "wid_callno";
                break;
            case "lam":
                $table = "lam_callno";
                break;
            case "cab":
                $table = "cab_callno";
                break;
            case "law":
                $table = "law_callno";
                break;
            case "mcz":
                $table = "mcz_callno";
                break;
            case "test":
                $table = "test_callno";
                break;
        }*/
        
        $table = $library . "_callno";
        
        if($callno != "") {    
          
          $insert_query = "INSERT INTO $table SET begin_callno = '$callno', floor = '$floor', $table.range = '$range'";
          $insert_result = mysql_query($insert_query);
          
          echo 'Added';
               
        }
        
        mysql_close();
      }
    }
    
    function create_with_barcode() {
      $f3=$this->framework;
      $map_it_key = $f3->get('map_it_key');

      if(!$_REQUEST['key'] || !($_REQUEST['key'] == $map_it_key)) {
        echo "Sorry, the API key provided does not match";
      }
      else {
        $db = $f3->get('DB');
        $db_user = $f3->get('DB_USER');
        $db_password = $f3->get('DB_PASSWORD');
        $db_host = $f3->get('DB_HOST');
            
        mysql_connect($db_host, $db_user, $db_password)
        or die ("Could not connect to resource");
      
        mysql_select_db($db)
        or die ("Could not connect to database");
          
        $barcode = $_REQUEST['barcode'];
        $library = $_REQUEST['library'];
        $floor = $_REQUEST['floor'];
        $range = $_REQUEST['range'];
        $moody = false;
        
        switch ($library) {
            case "Widener":
                $table = "wid_callno";
                break;
            case "Cabot":
                $table = "cab_callno";
                break;
            case "Chemistry":
                $table = "che_callno";
                break;
            case "Design":
                $table = "des_callno";
                break;
            case "Divinity":
                $table = "div_callno";
                break;
            case "Fine Arts":
                $table = "fal_callno";
                break;
            case "Fung":
                $table = "fun_callno";
                break;
            case "Gutman":
                $table = "gut_callno";
                break;
            case "Kennedy":
                $table = "ksg_callno";
                break;
            case "Lamont":
                $table = "lam_callno";
                break;
            case "Law":
                $table = "law_callno";
                break;
            case "MCZ":
                $table = "mcz_callno";
                break;
            case "Music":
                $table = "mus_callno";
                break;
            case "Physics":
                $table = "phy_callno";
                break;
            case "Tozzer":
                $table = "toz_callno";
                break;
            case "Yenching":
                $table = "hyl_callno";
                break;
            case "Test":
                $table = "test_callno";
                break;
        }
        
        $json = array();
        
        $url = 'http://webservices.lib.harvard.edu/rest/classic/barcode/cite/' . $barcode;
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept: application/json'));
        
        $contents = curl_exec($ch);
        
        curl_close ($ch);
                
        $contents = json_decode($contents);
        //print_r($contents);
        $title = $contents->rlistFormat->hollis->title;
        $json['title'] = $title;
        $isbn_raw = $contents->rlistFormat->hollis->isbn;
        
        $isbn = "";
        if(is_array($isbn_raw))
          $isbn = (string) $isbn_raw[0];
        else
          $isbn = (string) $isbn_raw;
        $isbn_array = explode(" ", $isbn);
        $isbn = (string) $isbn_array[0];
        $isbnLen=strlen($isbn);
        if($isbnLen <= 10) {
          $loop = 10 - $isbnLen;
          for($j=0; $j<$loop; $j++){
            $isbn = '0'.$isbn;
          }
        }
        $json['isbn'] = $isbn;
        $hollis = $contents->rlistFormat->hollis->hollisId;
        $hollis = substr($hollis, 0, 9);
        $hollis_length=strlen($hollis);
        if($hollis_length <= 9) {
          $loop = 9 - $hollis_length;
          for($j=0; $j<$loop; $j++){
            $hollis = '0'.$hollis;
          }
        }
        
        $url = "http://hollis-coda.hul.harvard.edu/availability.ashx?hreciid=|library%2fm%2faleph|$hollis&output=xml";
          
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $libraries = curl_exec ($ch);
          
        curl_close ($ch);
          
        $xml = simplexml_load_string($libraries);
        
        $due = $xml->xpath("//item[@barcode='$barcode']/@due");
        $due = (string) $due[0]['due'];
        if($due === "")
          $due = "";
        $json['due'] = $due;
        
        $callno = $xml->xpath("//item[@barcode='$barcode']/@callno");
        $callno = (string) $callno[0]['callno'];
        if($callno === "")
          $callno = "";
        
        $collection = $xml->xpath("//item[@barcode='$barcode']/@collection");
        $collection = (string) $collection[0]['collection'];
        if($collection === "")
          $collection = "";
        $json['collection'] = $collection;
        
        $collection_code = $xml->xpath("//xserverrawdata[@barcode='$barcode']/@collection");
        $collection_code = (string) $collection_code[0]['collection'];
        if($collection_code === "")
          $collection_code = "";
        
        $library = $xml->xpath("//xserverrawdata[@barcode='$barcode']/@sub-library");
        $library = (string) $library[0]['sub-library'];
        if($library === "")
          $library = "";
        
        if($library == "Law School" && preg_match('/^[A-Z]{1,7} +[0-9]{3}[A-Z. ].*/', $callno)) {
          preg_match('/^[A-Z]{1,7}/', $callno, $code);
          $existing_jurisdiction = $code[0];
          $moody = true;
        }
        elseif(preg_match('/^[a-zA-Z]* +[0-9]*.*/', $callno)) {
          $callno = preg_replace('/ /', '', $callno, 1);
        }
        
        /*if($collection == "WIDLCWID")
          $callno = "WID-LC $callno";*/
        
        $json['callno'] = $callno;
        
        
        if($callno != "") {
          
          $select_query = "SELECT id, begin_callno, collection FROM $table WHERE floor = '$floor' AND $table.range = '$range'";
          $select_result = mysql_query($select_query);
          
          $exists = false;
          
          if (mysql_num_rows($select_result)==0) { 
            $exists = false;
          }
          else {
            while ($row = mysql_fetch_array($select_result)) {
              $id = $row[0];
              preg_match('/^[A-Z]{1,7}/', $row[1], $code);
              $jurisdiction = $code[0];
        
              //if(strpos($row[1],'WID-LC') !== false && $collection == "WIDLCWID") {
              if($row[2] === 'WIDLC' && $collection_code === 'WIDLC'){
                $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
                $update_result = mysql_query($update_query);
                $exists = true;
              }
              //elseif($library === 'Widener' && (strpos($row[1], 'WID-LC') === false && $collection != "WIDLCWID")) {
              elseif($library === 'Widener' && $row[2] !== 'WIDLC' && $collection_code !== 'WIDLC'){
                $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
                $update_result = mysql_query($update_query);
                $exists = true;
              }
              elseif($library === 'Law School' && !preg_match('/^[A-Z]{1,7} +[0-9]{3}[A-Z. ].*/', $row[1]) && !$moody) {
                $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
                $update_result = mysql_query($update_query);
                $exists = true;
              }
              elseif($library === 'Lamont') {
                $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
                $update_result = mysql_query($update_query);
                $exists = true;
              }
              elseif((preg_match('/^[A-Z]{1,7} +[0-9]{3}[A-Z. ].*/', $row[1]) && $moody) && ($jurisdiction == $existing_jurisdiction)) {
                $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
                $update_result = mysql_query($update_query);
                $exists = true;
              }
            }
          }
          
          if(!$exists) {
            $insert_query = "INSERT INTO $table SET begin_callno = '$callno', floor = '$floor', $table.range = '$range', collection = '$collection_code'";
            $insert_result = mysql_query($insert_query); 
          }
        }
        
        $json = json_encode($json);
        header('Content-type: application/json');
        echo $json;
      }
    }
    
    function update_callno() {
      $f3=$this->framework;
      $map_it_key = $f3->get('map_it_key');

      if(!$_POST['key'] || !($_POST['key'] == $map_it_key)) {
        echo "Sorry, the API key provided does not match";
      }
      else {
        $db = $f3->get('DB');
        $db_user = $f3->get('DB_USER');
        $db_password = $f3->get('DB_PASSWORD');
        $db_host = $f3->get('DB_HOST');
        
        mysql_connect($db_host, $db_user, $db_password)
        or die ("Could not connect to resource");
  
        mysql_select_db($db)
        or die ("Could not connect to database");
        
        $id = $_POST['id'];
        $callno = $_POST['callno'];
        $library = $_POST['library'];

        $table = $library . "_callno";
        
        if($callno != "") {      
          
          $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
          $update_result = mysql_query($update_query);
          
          echo 'Updated';
               
        }
        mysql_close();
      }
    }
    
    function update_row() {
      $f3=$this->framework;
      $map_it_key = $f3->get('map_it_key');

      if(!$_POST['key'] || !($_POST['key'] == $map_it_key)) {
        echo "Sorry, the API key provided does not match";
      }
      else {
        $db = $f3->get('DB');
        $db_user = $f3->get('DB_USER');
        $db_password = $f3->get('DB_PASSWORD');
        $db_host = $f3->get('DB_HOST');
        
        mysql_connect($db_host, $db_user, $db_password)
        or die ("Could not connect to resource");
  
        mysql_select_db($db)
        or die ("Could not connect to database");
        
        $id = $_POST['id'];
        $row = $_POST['row'];
        $library = $_POST['library'];

        $table = $library . "_callno";
        
        if($row != "") {      
          
          $update_query = "UPDATE $table SET $table.range = '$row' WHERE id = '$id'";
          $update_result = mysql_query($update_query);
          
          echo 'Updated';
               
        }
        mysql_close();
      }
    }
    
    function update_collection() {
      $f3=$this->framework;
      $map_it_key = $f3->get('map_it_key');

      if(!$_POST['key'] || !($_POST['key'] == $map_it_key)) {
        echo "Sorry, the API key provided does not match";
      }
      else {
        $db = $f3->get('DB');
        $db_user = $f3->get('DB_USER');
        $db_password = $f3->get('DB_PASSWORD');
        $db_host = $f3->get('DB_HOST');
        
        mysql_connect($db_host, $db_user, $db_password)
        or die ("Could not connect to resource");
  
        mysql_select_db($db)
        or die ("Could not connect to database");
        
        $id = $_POST['id'];
        $collection = $_POST['collection'];
        $library = $_POST['library'];

        $table = $library . "_callno";
        
        if($collection != "") {      
          
          $update_query = "UPDATE $table SET $table.collection = '$collection' WHERE id = '$id'";
          $update_result = mysql_query($update_query);
          
          echo 'Updated';
               
        }
        mysql_close();
      }
    }

}
?>
