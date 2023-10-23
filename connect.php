<?php
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $message = $_POST['message'] ;
    
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn -> connect_err){
        die('connection failed :' $conn-> connect_error);
     } else {
        $stmt = $conn ->prepare("insert into registration(name , email, message) values(?,?,?)");
        $stmt ->bind_param("sss" $name , $email, $message);
        $stmt -> execute();
        echo "registratin sucessfully";
        $stmt -> close();
        conn ->close();
     }
?>