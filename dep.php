<?php
include 'conn.php';
?>
<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text.css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text.css" href="css/style.css">
</head>
<html>
<body dir="rtl">
        <?php
        $sql="SELECT * FROM `department` where id='$_GET[id]'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        ?>
        <div class="row" style="min-height: 320px;">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header text-right">اهلا وسهلا بكم في القسم :<?php echo $row['name'];?></div>
        <div class="card-body text-right"  style="height: 320px;"><?php echo $row['detail'];?></div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card">
        <div class="card-header text-center"> التسجيل في القسم :</div>
        <div class="card-body text-right"  style="height: 320px;">
        <a href="addstudent.php"><button class="btn btn-warning">تسجيل طالب جديد</button></a><br><br>
        <a href="addstudent.php"><button class="btn btn-warning">تسجيل طالب جديد</button></a><br><br>
        <a href="addstudent.php"><button class="btn btn-warning">تسجيل طالب جديد</button></a>
        </div>
        </div>
        </div>
        </div>
        <script src="bootstrap js.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js.js"></script>
</body>
</html>
