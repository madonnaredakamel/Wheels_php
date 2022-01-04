<?php


require 'db/dbconnection.php';

$sql = "select * from motors";
$op =  mysqli_query($con,$sql);


include 'header.php';
include 'nav.php';

?>

<body>
    


   <section class="motor1">
       <div class="row P-3">
           <div class="col-6 P-3" style=" float:right; ">
               <h3 style="color:white;">Introducing</h3>
               <H1 style=" color:red; font-size:66px;"> <b>THRILLING <br> DAD3333</b> </H1>
               <P style="color:white">Two Wheels to move the soul</P>
               <P style="color:white">Power Packed Performance</P>
           </div>
       </div>
   </section>

   <section class="motor2 p-3">
      <div class="row p-3">
          <div class="col-lg-6  col-sm-12  p-3">
              <img src="assets/motor2.jpg" alt="">
          </div>
          <div class="col-lg-6 col-sm-12  paragraph">
               <h6>ABOUT</h6>
               <h1> <b>  AD-333</b></h1>
               <p class="p-3">Wheels AD-333 comfortable for both mountain and road trips. It has been designed to enhance durability and performance in rough and flat terrain. It has amazing feature like hard braking system, great performance of battery, having own property of electronic and long-lasting suspension.</p>
               
               
               <p class="p-3">AD-333 is having great GPS system enable to track your ride. Comes with extra tubes to protect riders as mountain bikers frequently find themselves miles from help, with flat tires or other mechanical problems that must be handled by the rider.</p>
           </div>
      </div>
   </section>

   <section class="feature">
       <h3>SMART</h3>
       <h1> <b> FEATURE</b> </h1>
       <div class="row p-3">
           <div class="col-lg-4 col-sm-12 p-3">
               <div class="p-3" >
                   <img src="assets/rim-icon.png" alt="">
                   <h3>More Powerfull RIM</h3>
                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque.</h6>
               </div>
               <div class="p-3" >
                   <img src="assets/engine-icon.png" alt="">
                   <h3>More Powerfull Engine</h3>
                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque.</h6>
               </div>
               <div class="p-3">
                   <img src="assets/shock-icon.png" alt="">
                   <h3>All New Suspension</h3>
                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque.</h6>
               </div>
           </div>
           <div class="col-lg-4 col-sm-12">

              <img src="assets/motorcycle-features-img.png" alt="">
               
           </div>
           <div class="col-lg-4 col-sm-12">
           <div class="p-3" >
                   <img src="assets/chasis-icon.png" alt="">
                   <h3>Powerfull Chasis</h3>
                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque.</h6>
               </div>
               <div class="p-3" >
                   <img src="assets/speedometer-icon.png" alt="">
                   <h3>All New Brakes</h3>
                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque.</h6>
               </div>
               <div class="p-3">
                   <img src="assets/shock-icon.png" alt="">
                   <h3>Digital Speedometer</h3>
                   <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque.</h6>
               </div>
           </div>
       </div>

   </section>

   <section class="bike3">
       <h3>CHOOSE THE </h3>
       <H1> <b>COLOR YOU LOVE</b> </H1>

       <div>
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button   type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color:black; height:17px;"></button>
    <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"  style="background-color:green; height:17px;"></button>
    <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"  style="background-color:blue; height:17px"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/variation-bike-1.png" class="d-block" style="margin-left:10%;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/variation-bike-2.png" class="d-block " style="margin-left:10%;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/variation-bike-3.png" class="d-block" style="margin-left:10%;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style=" left:95px; top:111px; border-radius:50%; width:7%; height:91px; background-color:black;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style=" right:95px; top:111px; border-radius:50%; width:7%; height:91px; background-color:black;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
       </div>
   </section>
 <hr>

   <section>
       <h1>  <br> our collection </br> </h1>
       
      <div>
      <?php 
    
    if(isset($_SESSION['message'])){
         echo $_SESSION['message'];
         unset($_SESSION['message']);
    }

  if(isset($_SESSION['errorMessage'])){
      unset($_SESSION['errorMessage']);

  }



  ?>


    <div class="row p-3">

    
<?php 
           
           while($data = mysqli_fetch_assoc($op))
           {
           ?>

   <div class="col-lg-4 col-sm-12 p-3">
        <img width="470px" height="333px"  src="assets/motorcycle/<?php echo $data['image'];?>">
        <div><?php echo $data['desc']; ?></div>
   </div>
 

  <?php } ?>



    </div>
           </div>
    
  
      
  


 



   </section>


    

   


  






   <?php

 include 'footer.php'



?>