<?php
    include('connection.php');

    $id = $_POST['id'];
	$name = $_POST['name'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    

    $sql = "SELECT id,name,price,amount FROM sun";
    $result = mysqli_query($conn, $sql);

    if($result){
        //header("location:PAY.php");
        exit(0);
    }else{
        echo mysqli_error($conn);
    }
?>