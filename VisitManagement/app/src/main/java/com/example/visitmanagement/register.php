<?php 
    $con = mysqli_connect("localhost", "ferrydraw", "hsh0729!", "ferrydraw");
    mysqli_query($con,'SET NAMES utf8');

    $ID = isset($_POST["ID"]) ? $_POST["ID"] : "";
    $Password = isset($_POST["Password"]) ? $_POST["Password"] : "";
    $Name = isset($_POST["Name"]) ? $_POST["Name"] : "";
    $Phone_Num = isset($_POST["Phone_Num"]) ? $_POST["Phone_Num"] : "";
    $profileimage = isset($_POST["profileimage"]) ? $_POST["profileimage"] : "";
    $Belonging = isset($_POST["Belonging"]) ? $_POST["Belonging"] : "";

    $statement = mysqli_prepare($con, "INSERT INTO signeduser_table VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($statement, "ssssss", $ID, $Password, $Name, $Phone_Num, $Belonging, $profileimage);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);


?>