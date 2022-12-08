<?php
    session_start();
    include('server.php'); 

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

.card-header{
  width: 500px;
  font-size: 80px;
  height: 150px;
}

.card-body{
  width: 500px;
  font-size: 80px;
  height: 270px;
  text-align: center;
}

.input-group{
  font-size: 20px;
  width: 400px;
  height: 25px;
  padding: 30px;
}

.error {
    width: 40%;
    margin: 20px auto -74px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: Center;
}

</style>
</head>
<body>

<header>
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130">
</header>

    <form action="login_db.php" method="post">
      <?php if (isset($_SESSION['error'])) : ?>
          <div class="error">
            <h3>
                <?php 
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                ?>
            </h3>
          </div>
      <?php endif ?>

    <div class="container"><BR><BR><BR><BR>
	  <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
			<CENTER>Login</CENTER>
		</div>

		<div class="card-body"><CENTER>
			<div class="input-group form-group" for="username">Username &nbsp;&nbsp;
				<input type="text" name="username" class="form-control" placeholder="username">
			</div>
		  <div class="input-group form-group" for="password">Password &nbsp;&nbsp;&nbsp;
				<input type="password" name="password" class="form-control" placeholder="password">
			</div>
	
		<div class="form-group">
        <input type="submit" value="Login" name="login_user" class="btn btn-success">
        <input type="button" value="Cancel" class="btn btn-danger" onClick="location='FIRST.php'">
		</div>
		</div>
		</div>
	</div>
</div>
</form>

</body>
</html>