<?php
    include('connection.php'); 

    @$id = $_GET['p_id'];
    $act = $_GET['act'];
   
    if($act=='add' && !empty($id))
    {
      if(isset($_SESSION['pay'][$id]))
      {
        $_SESSION['pay'][$id]++;
      }
      else
      {
        $_SESSION['pay'][$id]=1;
      }
    }
   
    if($act=='remove' && !empty($id))  //ยกเลิกการสั่งซื้อ
    {
      unset($_SESSION['pay'][$id]);
    }
   
    if($act=='update')
    {
      $amount_array = $_POST['amount'];
      foreach($amount_array as $id=>$amount)
      {
        $_SESSION['pay'][$id]=$amount;
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
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
*{
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

#customers td, #customers th {
  border: 2px solid #ddd;
  border-color: black;
  text-align: left;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  border-color: black;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #cf242a;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}
.center {
  margin: auto;
  width: 75%;
  font-family: Arial, Helvetica, sans-serif;
}
.center2 {
  margin: auto;
  width: 25%;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>


<header>
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130">
</header>

<form id="frmcart" name="frmcart" method="post" action="?act=update">
  <table width="600" border="0" align="center" class="square">
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
if(!empty($_SESSION['pay']))
{
	include('connection.php');
	foreach($_SESSION['pay'] as $id=>$qty)
	{
		$sql = "select * from stock where id=$id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row["name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["price"],2) . "</td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a href='ORDER.php?id=$id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
<tr>
<td><a href="ORDER.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
    <input type="submit" name="button" id="button" value="ปรับปรุง" />
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
</td>
</tr>
</table>
</form>
</body>
</html>