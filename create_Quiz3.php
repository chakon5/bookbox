
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

<BR><BR>

<?php include('connection.php');



$stmt = $conn->prepare("insert into credit(id,p,year) values(?,?,?)");
		$stmt->bind_param("sii",$id,$p,$year);
		$execval = $stmt->execute();
    echo $execval;
    
    $sql = "SELECT id,p,year FROM credit";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      echo "<table border='1
      ' align='center' cellpadding='10'>";

  //หัวข้อตาราง
    echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัสการป้อน</td><td>จำนวนเงินที่ป้อน</td><td>จำนวนปีที่ต้องการผ่อน
    </td></tr>";
 
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $id = "&id=".$row["id"];
        $p = "&p=".$row["p"];
        $year = "&year=".$row["year"];

  
        echo "<tr>";
        echo "<td>"  .$row["id"] .   "</td> "; 
        echo "<td>"  .$row["p"] .   "</td> "; 
        echo "<td>"  .$row["year"] .   "</td> ";  

?>
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