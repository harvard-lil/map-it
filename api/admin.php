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
        $data   = array($row[0], $row[2], $row[3], $row[1], "");
                  
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

        $id = $_REQUEST['id'];
        $library = $_REQUEST['library'];
        
        switch ($library) {
            case "wid":
                $table= "wid_callno";
                break;
            case "lam":
                $table = "lam_callno";
                break;
            case "law":
                $table = "law_callno";
                break;
            case "test":
                $table = "test_callno";
                break;
        }
        
        if($id != "") {
        
          $insert_query = "DELETE FROM $table WHERE id = '$id'";
          $insert_result = mysql_query($insert_query);
          
          //echo $insert_query;
          
          echo 'Deleted';
               
        }
        
        mysql_close();
    }
    
    function create() {
      $f3=$this->framework;
      $db = $f3->get('DB');
      $db_user = $f3->get('DB_USER');
      $db_password = $f3->get('DB_PASSWORD');
      $db_host = $f3->get('DB_HOST');
        
      mysql_connect($db_host, $db_user, $db_password)
      or die ("Could not connect to resource");
  
      mysql_select_db($db)
      or die ("Could not connect to database");
      $floor = $_REQUEST['add-floor'];
      $range = $_REQUEST['add-row'];
      $callno = $_REQUEST['add-callno'];
      $library = $_REQUEST['library'];
      
      switch ($library) {
          case "wid":
              $table= "wid_callno";
              break;
          case "lam":
              $table = "lam_callno";
              break;
          case "law":
              $table = "law_callno";
              break;
          case "test":
              $table = "test_callno";
              break;
      }
      
      if($callno != "") {    
        
        $insert_query = "INSERT INTO $table SET begin_callno = '$callno', floor = '$floor', $table.range = '$range'";
        $insert_result = mysql_query($insert_query);
        
        echo $insert_query;
        
        echo 'Added';
             
      }
      
      mysql_close();
    }
    
    function update() {
      $f3=$this->framework;
      $db = $f3->get('DB');
      $db_user = $f3->get('DB_USER');
      $db_password = $f3->get('DB_PASSWORD');
      $db_host = $f3->get('DB_HOST');
      
      mysql_connect($db_host, $db_user, $db_password)
      or die ("Could not connect to resource");

      mysql_select_db($db)
      or die ("Could not connect to database");
      
      $id = $_REQUEST['id'];
      $callno = $_REQUEST['callno'];
      $library = $_REQUEST['library'];
      
      switch ($library) {
          case "wid":
              $table = "wid_callno";
              break;
          case "lam":
              $table = "lam_callno";
              break;
          case "law":
              $table = "law_callno";
              break;
          case "test":
              $table = "test_callno";
              break;
      }
      
      if($callno != "") {      
        
        $update_query = "UPDATE $table SET begin_callno = '$callno' WHERE id = '$id'";
        $update_result = mysql_query($update_query);
        
        echo 'Updated';
             
      }
    }

}
?>
