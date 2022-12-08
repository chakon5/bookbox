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
.center {
  margin: 300px auto 100px auto;
  text: green;
  width: 500px;
  padding: 45px;
  border: 10px groove;
  border-radius: 25px;
  background-color: rgb(201, 76, 76);
}

.form-group{
    margin:  auto 10px 30px 10px;
}

.BT{
  margin: auto;
  width: 25%;
  text-align: center;
  padding-top: 20px;
  padding-bottom: 20px;
  font-family: Arial, Helvetica, sans-serif;
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

</style>
</head>
<body>
<header>

  <div class="BB">
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130" onClick="location='BOOK BOX.php'">

</header>
<BR><BR>

<section>
<div class="container">
    <CENTER><div class="mt-3 mb-3"><img class="shadowed img-fluid" width="180" height="180" src="LOGO.jpg"><BR><BR></div>
        <h1 class="Fontone-1">คุณมีบัญชีสมาชิกของตู้ Book Box ใช่หรือไม่?</h1>
        <h5 class="Fonttwo-2">Do you have a Book Box account?</h5>
    </div></CENTER><BR><BR>

</div>

    <div class="BT">
    <input type="button" value="ใช่" class="BT" onClick="location='login.php'" >
    <input type="button" value="ไม่ใช่" class="BT" onClick="location='register.php'">
    </div>
</body>
</html>