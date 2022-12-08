<?php
    include('connection.php');

    $id = $_POST['id'];
    $nameth = $_POST['nameth'];
    $nameeng = $_POST['nameeng'];
    $credit = $_POST['credit'];
    $type = $_POST['type'];
    $grade = $_POST['grade'];
    $img = $_POST['img'];

    $sql = "UPDATE struct SET nameth='$nameth', nameeng='$nameeng', credit='$credit', type='$type', grade='$grade', img='$img' WHERE id=$id"; 
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location:create_struct3.php");
        exit(0);
    }else{
        echo mysqli_error($conn);
    }
?>