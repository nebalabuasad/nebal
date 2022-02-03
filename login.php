<?php 
include('include/header.php');
?>
<div class="card">
    <div class="card-header text-center"><h4>تسجيل الدخول للوحة التحكم</h4></div>
    <div class="card-body">
    <form action="" method="POST" class="form-horizontal" id="login" style="min-height:250px">
        <!---------username-------------->
        <div class="form-group row">
        <label for="user" class="col-sm-4 col-form-label">اسم المستخدم</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="user" name="username" placeholder="اسم المستخدم"></div>
        </div>
        <!-----------password------------>
        <div class="form-group row">
        <label for="pass" class="col-sm-4 col-form-label">كلمة المرور</label>
        <div class="col-sm-4">
        <input type="password" class="form-control" id="pass" name="password" placeholder="كلمة المرور"></div>
        </div>
        <div class="col-sm-8">
        <input type="submit" name="submit" class="btn btn-warning" value="تسجيل الدخول">
        </div>
    </form>
    </div>
    </div>
    <?php
    include 'include/conn.php';
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<div class='alert alert-danger text-center' role='alert'> الرجاء إدخال اسم المستخدم </div>";}
        elseif(empty($password)){ echo "<div class='alert alert-danger text-center' role='alert'> الرجاء إدخال كلمة المرور </div>";}
        else{
            $sql="SELECT * FROM `users` WHERE `username`='$username' && `password`='$password';";
            $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows ($result)>0){
                $user=mysqli_fetch_assoc($result);
                $_SESSION['user']=$user['username'];
               // header("location:admin-cp/include/sliderebar.php");
               echo "<div class='alert alert-warning text-center' role='alert'> <h2> تم تسجيل دخولك بنجاح </h2></div>";
               echo '<meta http-equiv="refresh" content="3; \'admin-cp/include/sliderebar.php\'">';}

               else{ echo "<div class='alert alert-danger text-center' role='alert'>  خطأ في كلمة المرور أو اسم المستخدم</div> ";} 
                 }
                 }
              include('include/footer.php');?>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>