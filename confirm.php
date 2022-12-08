<?php
	session_start();
    include("connection.php");  
?>
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
  margin: -70px auto;
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
<input type="button" value="CONFIRM" class="btn btn-danger">
<h1 class="Fontone-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ยืนยันการทำรายการ</h1>

<div class="SS">
<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
  <table width="800" border="0" align="center" class="square">
    <tr>
      <td width="1558" colspan="4" bgcolor="#CCCCCC">
      <strong>สั่งซื้อสินค้า</strong></td>
    </tr>
    <tr>
      <td bgcolor="#f6cacc">สินค้า</td>
      <td align="center" bgcolor="#f6cacc">ราคา</td>
      <td align="center" bgcolor="#f6cacc">จำนวน</td>
      <td align="center" bgcolor="#f6cacc">รวม/รายการ</td>
    </tr>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $id=>$qty)
	{
		$sql	= "select * from stock where id=$id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['price']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td align='right'>" .number_format($row['price'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='#f6cacc'><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#f6cacc'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>

	<center><td colspan="4" align="center" bgcolor="#CCCCCC">
	<input type="submit" name="Submit2" value="ยืนยัน" ></center>
</td>
</tr>
</table>
<BR> <a href="ORDER.php"><input type="button" value="กลับไปหน้ารายการสินค้า" class="btn btn-success"></a>
</form>
</body>
</html>