<?php
    include('connection.php'); 
    $del_id = $_GET['del_id'];
    echo $del_id;

    $sql = "DELETE FROM stock WHERE id = $del_id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:create_BB3.php");
        exit(0);
    }else{
        echo "Error";
    }
?>