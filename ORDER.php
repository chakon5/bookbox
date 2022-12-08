<?php
    session_start();
    include('connection.php'); 
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
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

  <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>ยินดีต้อนรับคุณ <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="FIRST.php?logout='1'" style="color: black;">ออกจากระบบ</a></p>
        <?php endif ?>
    </div>
    </div>
    
</header>
<BR><BR>
<input type="button" value="HOT" class="btn btn-danger">
<h1 class="Fontone-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สินค้าขายดีประจำสัปดาห์ !!</h1>

<table width="600" border="1" align="center" bordercolor="#666666">
  <!-- <tr>
    <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
    <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อหนังสือ</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></td>
  </tr> -->

<?php
//connect db

$sql = "select * from stock order by id";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {

	//แสดงรายละเอียด
  ?> <div class="grid-container"><?php
	echo "<align='center'><img src='pics/" . $row["img"] ."'width='140'></align=>"."<BR>"."<BR>";
  echo "<align='left'>".$row["name"]."<BR>";
  echo "<align='left'>".$row["type"]."<BR>";
  echo "<align='center'>".number_format($row["price"],2)."<a><B> บาท</B></a>"."<BR>";
  echo "<align='center'><a href='product_detail.php?id=$row[id]'>ADD TO CART</a>"."<BR>"."<BR>";
  echo "<align='right'>";?>
  </div><?php

}
?>

</table>
<!-- <p><center><a href="cart.php">ดูรายการสั่งซื้อ</a></center> -->
</from>
</body>
</html>