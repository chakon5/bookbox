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

.center {
  width: 80%;
  margin: auto;
  padding: 2%;
}
.grid-container {
  display: inline-grid;
  grid-template-columns: auto;
  grid-gap: 3px;
  text-align: center;
  padding: 55px;
  font-size: 18px;
}
.grid-container > div {
  display: inline-grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 3px;
  text-align: center;
  padding: 55px;
  font-size: 14px;
}
.center2 {
  margin: auto;
  width: 25%;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px;
  font-family: Arial, Helvetica, sans-serif;
}
.center3 {
  margin: auto;
  width: 130px;
  height: 30px;
}
.type {
    font-size: 30px;
}

.homecontent {
    font-size: 20px;
    text-align: left;
    padding-top: 3rem;
    width: 20%;
    height: auto;
    margin: -155px auto 30px 10px;
}

.BB {
  text-align: right;
}

.SS {
  text-align: center;
  margin: -90px auto;
  font-size: 20px;
}

.grid-container{
  text-align: center;
  font-size: 20px;
  
}

</style>     
</head>
<body>

<header>

  <div class="BB">
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130">

</header>
<BR><BR>
<input type="button" value="DETAIL" class="btn btn-danger">
<h1 class="Fontone-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลรายการสินค้าที่เลือก</h1>

<div class="SS">
<table width="700" border="0" align="center" class="square">
  <tr><td colspan="2" bgcolor="#CCCCCC"><b>สินค้าที่เลือก</b></td></tr>

<?php
//connect db
    include("connection.php");
	$id = $_GET['id']; //สร้างตัวแปร id เพื่อรับค่า
	
	$sql = "select * from stock where id=$id";  //รับค่าตัวแปร id ที่ส่งมา
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	//แสดงรายละเอียด

	echo "<align='center'><img src='pics/" . $row["img"] ."'width='160'></align=>"."<BR>"."<BR>";
	echo "<tr>";
  	echo "<td width='88' valign='top'><b>ชื่อสินค้า</b></td>";
    echo "<td width='250'>" . $row["name"] . "</td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>ประเภท</b></td>";
    echo "<td>" . $row["type"] . "</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<td valign='top'><b>สำนักพิมพ์</b></td>";
    echo "<td>" . $row["publish"] . "</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<td valign='top'><b>บริษัท</b></td>";
    echo "<td>" . $row["company"] . "</td>";
  	echo "</tr>"; 
  	echo "<tr>";
    echo "<td valign='top'><b>ราคา</b></td>";
    echo "<td>" .number_format($row["price"],2) . " บาท</td>";
  	echo "</tr>"; 
  	echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<a href='cart.php?id=$row[id]&act=add'> เพิ่มลงตะกร้าสินค้า </a></td>";
	echo "</tr>";
?>
</table>
<BR> <a href="ORDER.php"><input type="button" value="กลับไปหน้ารายการสินค้า" class="btn btn-success"></a>

</div>
</body>
</html>