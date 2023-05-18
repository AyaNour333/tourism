<?php
  
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $message=$_POST['message'];
  
  $servername="localhost";
  $database ="tourism";
  $username="root";
  $password="";
  $connection = mysqli_connect($servername, $username, $password, $database);
  
          if (!$connection) {
                die("Connection failed: ".mysqli_connect_error());
          }
          else {
              
            $stmt=$connection->prepare("insert into myorder(name,email,message) values(?,?,?,?,?)");
            $stmt-> bind_param("aaaaai",$Name,$Email,$message);
            $stmt->execute();
            echo "order done successfully";
            $stmt->close();
            $connection->close();
          }
        
   ?> 


?>