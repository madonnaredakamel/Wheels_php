<?php

require 'db/dbconnection.php';
$sql = "select * from bikes";
$op =  mysqli_query($con,$sql);

include 'header.php';
include 'nav.php';

?>

<body>
    


   <section class="bike1" >
       <div class="row P-3">
           <div class="col-6 P-3" style=" float:right; ">
               <h3 style="color:white;">NEW WHEELS AD-333</h3>
               <H1 style=" color:red; font-size:66px;"> <b>NEW WAY OF <br> RUNNING</b> </H1>
               <P style="color:white">Wheels Creating Biggest Cycling Story of 2020.</P>
               <P style="color:white">Wheels Bicycles Comfortable for Both Mountain and road Trips.</P>
           </div>
       </div>
   </section>

   <section class="bike2 p-3">
       <div class="row p-3"> 
           <div class="col-lg-6 col-sm-12 p-3">
             <img src="assets/bike1.jpg" alt="">
           </div>
           <div class="col-lg-6 col-sm-12  paragraph">
               <h6>ABOUT</h6>
               <h1> <b>  AD-333</b></h1>
               <p class="p-3">Wheels AD-333 comfortable for both mountain and road trips. It has been designed to enhance durability and performance in rough and flat terrain. It has amazing feature like hard braking system, great performance of battery, having own property of electronic and long-lasting suspension.</p>
               
               
               <p class="p-3">AD-333 is having great GPS system enable to track your ride. Comes with extra tubes to protect riders as mountain bikers frequently find themselves miles from help, with flat tires or other mechanical problems that must be handled by the rider.</p>
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
    <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"  style="background-color:red; height:17px;"></button>
    <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"  style="background-color:blue; height:17px"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/slicer-bicycle-1.png" class="d-block  " alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/slicer-bicycle-2.png" class="d-block  " alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/slicer-bicycle-3.png" class="d-block  " alt="...">
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
       <h1 > <b>our collection</b> </h1>
       
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
        <img width="470px" height="333px"  src="assets/bicycles/<?php echo $data['image'];?>">
        <div><?php echo $data['desc']; ?></div>
   </div>
 

  <?php } ?>



    </div>
           </div>
    
  
      
  


 



   </section>



    

   

    






<?php

 include 'footer.php'



?>