<?php
    include('connection.php');

    $id = $_POST['id'];
	$name = $_POST['name'];
    $type = $_POST['type'];
    $publish = $_POST['publish'];
    $company = $_POST['company'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $img = $_POST['img'];

    $sql = "UPDATE stock SET name='$name', type='$type', publish='$publish', company='$company', price='$price', amount='$amount', img='$img' WHERE id=$id"; 
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:create_BB3.php");
        exit(0);
    }else{
        echo mysqli_error($conn);
    }
?>