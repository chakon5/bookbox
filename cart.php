<?php
	session_start();
	
	@$id = $_GET['id']; 
	$act = $_GET['act'];
 
	if($act=='add' && !empty($id))
	{
		if(isset($_SESSION['cart'][$id]))
		{
			$_SESSION['cart'][$id]++;
		}
		else
		{
			$_SESSION['cart'][$id]=1;
		}
	}
 
	if($act=='remove' && !empty($id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$id]);
	}
 
	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $id=>$amount)
		{
			$_SESSION['cart'][$id]=$amount;
		}
	}
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
  margin: 30px auto;
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
<input type="button" value="CHART" class="btn btn-danger">
<h1 class="Fontone-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลตะกร้าสินค้า</h1>

<div class="SS">
<form id="frmcart" name="frmcart" method="post" action="?act=update">
  <table width="800" border="0" align="center" class="square">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC">
      <b>ตะกร้าสินค้า</span></td>
    </tr>
    <tr>
      <td bgcolor="#EAEAEA">สินค้า</td>
      <td align="center" bgcolor="#EAEAEA">ราคา</td>
      <td align="center" bgcolor="#EAEAEA">จำนวน</td>
      <td align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
      <td align="center" bgcolor="#EAEAEA">ลบ</td>
    </tr>
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	include("connection.php");
	foreach($_SESSION['cart'] as $id=>$qty)
	{
		$sql = "select * from stock where id=$id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row["name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["price"],2) ."</td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a href='cart.php?id=$id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#f6cacc' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#f6cacc'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#f6cacc'></td>";
	echo "</tr>";
}
?>
<tr>

<td colspan="5" align="right">
    <input type="submit" name="button" id="button" value="อัพเดท">
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';">
</td>
</tr>
</table>
</form>
<BR> <a href="ORDER.php"><input type="button" value="กลับไปหน้ารายการสินค้า" class="btn btn-success"></a>
</body>
</html>