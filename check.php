<?php 
      if (isset($_POST['check'])) {
        $name = $_POST['user'];
        $pwd = $_POST['pass'];
        $jsondata = file_get_contents("secrets/db.json");
        $json = json_decode($jsondata, true);
        if($json["data"][0]["user"]==$name && $json['data'][0]['pass']==$pwd){
            echo "<script>alert('Logged in')</script>";
        }
        else{
            echo "<script>alert('Invalid Credentials')</script>";
        }
        
 }?>
