<?php include('include/header.php');?>   
        <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        </ul>
        <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="imag/istock.jpg" alt="Los Angeles" width="100%" height="500">
        <div class="carousel-caption">
        <h2 style="color:black;">اهلا وسهلا بكم في موقعنا</h2>
        </div>   
        </div>
        <div class="carousel-item">
        <img src="imag/photo.jfif" alt="Chicago" width="100%" height="500">
        <div class="carousel-caption">
        <h1>Thank you...</h1>
        </div>   
        </div>  
        </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span></a>
        </div>
        <div class="row mr-0 w-100 ml-30 tit">
        <h2 class="col-9" style="text-align:right"><b>أقسام ICTL</b></h2>
        <a href="addstudent.php" class="mt-1 col-3"><button class="btn btn-warning">تسجيل طالب جديد</button></a></div>
        </div>
        </div>
        <div class="row">
        <?php
        include ('include/conn.php');
        $sql="SELECT * FROM `department`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
        ?>
        <div class="col-sm-4 col-md-4 mb-0">
        <div class="card" style="width: 25rem;">
        <?php echo "<img src='admin-cp/$row[image]' height='180px' width='400px' class='img-tumbnail m-auto' >";?>
        <div class="card-body text-center ">
        <h5 class="card-title"><?php  echo $row['name']  ;?></h5>
        <p class="card-text"><?php echo substr($row['detail'],0,150);?></p>
        <?php  echo  "<a href='dep.php?id=$row[id]' class='btn btn-warning'>اقرا المزيد</a>";?>
        </div>
        </div>
        </div>
        <?php } ?>
        </div>
        <?php
        include('include/footer.php');
        ?>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>