<!DOCTYPE html>
<html lang="en">
<head>
<title>BOOKBOX</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #cf242a;
  padding: 40px;
  font-size: 60px;
  text-align: right;
  color: white;
}
nav, article {
    width: 100%;
    height: 680px;
  }
  
tr,td {
  border: 2px solid;
}

</style>
</head>
<body>

<header>
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130" onClick="location='BOOK BOX.php'">
</header>

<BR>

<?php include('connection.php');

$stmt = $conn->prepare("insert into stock(id,name,type,publish,company,price,amount,img) values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssiis",$id,$name,$type,$publish,$company,$price,$amount,$img);
		$execval = $stmt->execute();
    echo $execval;
    
    $sql = "SELECT id,name,type,publish,company,price,amount,img FROM stock";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      echo "<table border='1
      ' align='center' cellpadding='10'>";

  //หัวข้อตาราง
    echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัสหนังสือ</td><td>ชื่อหนังสือ</td><td>ประเภทของหนังสือ
    </td><td>สำนักพิมพ์</td><td>บริษัท</td><td>ราคา</td><td>จำนวนคงเหลือ</td><td>สินค้า</td><td>Edit</td><td>Delete</td></tr>";
 
      // output data of each row
      while($row = $result->fetch_assoc()) {
      // while($row = mysqli_fetch_assoc($result)){
        $id = "&id=".$row["id"];
        $name = "&name=".$row["name"];
        $type = "&type=".$row["type"];
        $publish = "&publish=".$row["publish"];
        $company = "&company=".$row["company"];
        $price = "&price=".$row["price"];
        $amount = "&amount=".$row["amount"];
        $img = "&img=".$row["img"];
  
        echo "<tr>";
        echo "<td>"  .$row["id"] .   "</td> "; 
        echo "<td>"  .$row["name"] .   "</td> "; 
        echo "<td>"  .$row["type"] .   "</td> ";  
        echo "<td>"  .$row["publish"] .    "</td> ";
        echo "<td>"  .$row["company"] .   "</td> "; 
        echo "<td>"  .$row["price"] .   "</td> ";
        echo "<td>"  .$row["amount"] .   "</td> ";
        
?>
        <td><img src="pics/<?php echo $row['img']; ?>" width="100px" height="100px" alt=""></td>
        <td><a href="EDIT.php?edit_id=<?php echo $row['id']; ?>">EDIT</a></td>
        <td><a href="Delete.php?del_id=<?php echo $row['id']; ?>">DELETE</a></td>
<?php
      }
      echo "</table>";
  
  }
?>


<BR>
<CENTER><div class="form-group">
          <input type="button" value="เพิ่มข้อมูล" class="btn btn-success" onClick="location='BOOK BOX.php'">
          <input type="button" value="กลับหน้าหลัก" class="btn btn-danger" onClick="location='FIRST.php'">
					</CENTER></div><BR>

</body>
</html>