<?php
    require_once "Connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $First_Name	   = $_POST['First_Name'];
    $Last_Name     = $_POST['Last_Name'];
    $Email_Address = $_POST['Email_Address'];
    $Password      = $_POST['Password'];

       $query = ("INSERT INTO users(`First_Name`,`Last_Name`,`Email_Address`,`Password`) VALUES (?,?,?,?)");

       $stmtinsert = $pdo->prepare($query);

       $result= $stmtinsert->execute([$First_Name, $Last_Name, $Email_Address, $Password]);

       if($result){
        echo ("<script>window.location = 'UserList.php';</script>");
       }else{
        echo 'There were errors while saving the data.';
        }
       }  