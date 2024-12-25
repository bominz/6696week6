<!DOCTYPE html>
<html lang="en">
<?php
      include("conn.php")
?>
<head>
<!-- เพื่อม Boottrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Charmonman:wght@400;700&family=Noto+Sans+Thai+Looped:wght@100;200;300;400;500;600;700;800;900&family=Srisakdi:wght@400;700&display=swap" rel="stylesheet">
    

<style>
        body {
  font-family: "Charmonman", serif;
  font-weight: 600;
  font-style: normal;
  margin-top:150px;
  margin-left:150px;
  margin-bottom:150px;
  margin-right:150px;
  
}
</style>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม Bootstrap และเขียนโปรแกรมและเงื่อนไข </title>
</head>
<body>
    <h1>โปรแกรมเพิ่มข้อมูล</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-1">ชื่อ</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
    <label for="inputEmail3" class="col-sm-2"></label>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-1">ชื่อเล่น</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="nickname"><br>
    </div>
    <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-1">อายุ</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="age">
    </div>
    <label for="inputEmail3" class="col-sm-1">ปี</label>
  </div>
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST["name"];
    $nickname=$_POST["nickname"];
    $age=$_POST["age"];
    // 
    try {
      $sql = "INSERT INTO student (name, nickname, age)
      VALUES ('$name', '$nickname', '$age')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "<div class='alert alert-success'> <strong>[บันทึกเสร็จสิ้น]!</strong>ยินดีด้วย คุณได้บันทึกข้อมูลเข้าไปใหม่ 1 รายการ </div>";
    } catch(PDOException $e) {
      echo $sql . "บักทึกข้อมูลผิดพลาด<br>" . $e->getMessage();
    }
    
    $conn = null;
    // 
}
?>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>