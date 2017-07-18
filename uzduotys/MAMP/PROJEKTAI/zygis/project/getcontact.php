<?php


    
      define('HOST', 'localhost');
      define('DB_USERNAME', 'zygis');
      define('DB_PASSWORD', 'ponaipizonai');
      define('DB_NAME', 'urban_wedding');
        

    function connection(){
 
        $connect = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($connect, "utf8");

        return $connect;
    }



    function getContact($id){
        $sql = "SELECT value FROM contacts WHERE id = '$id'";
        $query = mysqli_query(connection(), $sql);
        
        $contact = mysqli_fetch_assoc($query);
        
        return $contact['value'];
    }

    





?>