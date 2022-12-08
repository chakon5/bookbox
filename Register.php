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
  height: 550px;
  text-align: center;
}

.input-group{
  font-size: 20px;
  width: 400px;
  height: 30px;
  padding: 25px;
}

</style>
</head>
<body>

<header>
  <B>BOOK BOX</B> ตู้หนังสืออัจฉริยะ
  <img src="LOGO.jpg" alt="Booxboxpic" width="130" height="130">
</header>

  <form action="register_db.php" method="post">
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
  
  <div class="container"><BR><BR>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<CENTER>Register</CENTER>
			</div>

      <div class="card-body"><CENTER>
			<div class="input-group form-group" for="username">Username &nbsp;
				<input type="text" name="username" class="form-control" placeholder="username">
			</div>
			<div class="input-group form-group" for="password_1">Password &nbsp;&nbsp;
				<input type="password" name="password_1" class="form-control" placeholder="password">
			</div>
      <div class="input-group form-group" for="password_2">Password &nbsp;&nbsp;
				<input type="password" name="password_2" class="form-control" placeholder="confirm password">
			</div>
      <div div class="input-group form-group" for="name">Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>
      <div class="input-group form-group" for="surename">Surename &nbsp;
				<input type="text" name="surename" class="form-control" placeholder="Surename">
			</div>
      <div class="input-group form-group" for="email">E-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="email" name="email" class="form-control" placeholder="E-mail">
			</div>
      <div class="input-group form-group" for="birthday">Birthday &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="date" name="birthday" class="form-control">
			</div>
      <div class="input-group form-group" for="tel">Tel. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="tel" name="tel" class="form-control" placeholder="Telephone">
			</div>
	
					<div class="form-group my-3">
          <input type="submit" value="Comfirm" name="reg_user" class="btn btn-success">
          <input type="reset" value="Reset" class="btn btn-warning">
          <input type="button" value="Cancel" class="btn btn-danger" onClick="location='FIRST.php'">
					</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>
</html>