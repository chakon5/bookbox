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

section {
  font-size: 20px;
}

nav, article {
    width: 100%;
    height: 680px;
  }

</style>
</head>
<body>

<header>
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130" onClick="location='FIRST.php'">
</header>

<section>
    <div class="container">
    <h2 class="text-center my-3"><BR>จัดการ STOCK BOOK BOX</h2>
    
        <form action="create_BB2.php" method="post" class="form-group">
            <div class="form-group">
                <label for="id">รหัสสินค้า</label>
                <input type="text" name="id" class="form-control"> 

                <label for="name">ชื่อสินค้า</label>
                <input type="text" name="name" class="form-control">

                <label for="type">ประเภทของสินค้า</label>
                <input type="text" name="type" class="form-control">

                <label for="publish">สำนักพิมพ์</label>
                <input type="text" name="publish" class="form-control">

                <label for="company">บริษัท</label>
                <input type="text" name="company" class="form-control">

                <label for="price">ราคา</label>
                <input type="text" name="price" class="form-control">

                <label for="amount">จำนวนคงเหลือ</label>
                <input type="text" name="amount" class="form-control">

                <label for="img">รูปสินค้า</label>
                <input type="file" name="img" class="form-control">


            </div>

            <!-- OPTION -->
            <div class="form-group my-3">
                <center><BR><input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
                <input type="button" value="ดูข้อมูลสินค้า" class="btn btn-secondary" onClick="location='create_BB3.php'"><BR></center>
            </div>
        </form>
    </div>
</section>

</body>
</html>
