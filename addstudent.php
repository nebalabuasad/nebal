<?php include 'conn.php';?> 
<?php include('include/header.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .a1{margin-right: 250px;}
  </style>
</head> 
<body dir="rtl">
  <div class="card-body">
      `<form action="" method="post" class="form-horizontal" id="login" style="min-height: 250px;">
        <!-------------------name------------------->
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label">اسم الطالب</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="user" name="name" placeholder="اسم الطالب">
        </div>
        </div>
    <!------------------email-------------------->
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label"> الايميل</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="user" name="email" placeholder="الايميل">
        </div>
        </div>
    <!-----------------age--------------------->
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label"> العمر</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="user" name="age" placeholder="العمر">
        </div>
        </div>
    <!--------------------address------------------>
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label"> العنوان</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="user" name="address" placeholder="العنوان">
        </div>
        </div>
    <!-------------------phone------------------->
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label">الهاتف </label>
        <div class="col-sm-4">
        <input type="number" class="form-control" id="user" name="phone" placeholder="الهاتف">
        </div>
        </div>
    <!-------------------depnum------------------->
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label">القسم </label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="user" name="depnum" placeholder="القسم">
        </div>
        </div>
        <!--<div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label">القسم </label>
    <select class="form-control" id="user">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>-->
    <!-------------------------------------->
        <div class="a1">
        <div class="form-group row">
        <div class="col-md-4 col-offset-2">
        <button typy="submit" name="submit" class="btn btn-warning" >تسجيل الدخول</button>
        </div></div></div>
        </form>
        </div>
        <script src="bootstrap js.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/js.js"></script>
        </body>
</html>
<?php
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $depnum=$_POST['depnum'];
  //$sql="INSERT INTO `students`(`name`, `email`, `age`, `address`, `phone`, `depnum`) VALUES ('$name','$email',' $age',' $address','$phone','$denum');";
  $sql="INSERT INTO `students`( `name`, `email`, `age`, `address`, `phone`, `depnum`) VALUES ('$name',' $email','$age','$address',' $phone','$depnum');";
  $result=mysqli_query($conn,$sql);
if($result){
  echo "<div class='alert alert-warning text-center' role='alert'> <h2> تمت اضافتك بنجاح </h2></div>";}  
else{ echo "لم تتم عملية الاضافة".mysqli_connect_error($conn); }}
?>
<?php include('include/footer.php')
;?>
    <script src="js/jQueryslim.min.js"></script>
    <script src="js/proper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>




