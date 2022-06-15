<?php



if(isset($_POST['send'])){
  $conn = mysqli_connect('localhost','root','','contact_form') or die('connection failed');
  
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
 $number =  mysqli_real_escape_string($conn,$_POST['number']);
 $msg =  mysqli_real_escape_string($conn,$_POST['message']);

 $select_message = mysqli_query($conn,"SELECT * FROM `contactform` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg' ") or die ('query failed');

if(mysqli_num_rows($select_message)>0){
  $message[] = 'message sent already';
}

else{
  mysqli_query($conn,"INSERT INTO `contactform`(name,email,number,message) VALUES('$name', '$email', '$number', '$msg') ") or die('query failed');
  $message[] = 'message sent successfully';
}

}
else{}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio porject</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!--font awesome cdn link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
  <!--custom css link file-->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>


<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

  <!--header section starts -->
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#home" class="logo">Portfolio</a>

    <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contct">contact</a>
    </nav>

    <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
    </div>
  </header>
  <!--header section ends -->

  <!-- home section starts-->
  <section class="home" id="home">
    <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
    </div>

    <div class="content" >
      <h3 data-aos="fade-up" >Hi I am Greeshma</h3>
      <span data-aos="fade-up">Web Developer</span>
      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis suscipit consequuntur quas voluptas odio
        quam est nostrum praesentium aspernatur, necessitatibus dolorum laudantium accusantium perspiciatis ratione
        totam itaque quisquam facere exercitationem.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
    </div>
  </section>
  <!-- home section ends-->


  <!-- about section starts-->
  <section class="about" id="about">

    <h1 class="heading" data-aos="fade-up"><span>Biography</span></h1>

    <div class="biography" >
      <p data-aos="fade-up"> 
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum ipsa, illum neque sequi doloremque iure. Earum
        tempora nostrum excepturi iusto voluptate obcaecati repellendus mollitia eius, atque alias et animi aspernatur.

      </p>

      <div class="bio">
        <h3 data-aos="zoom-in"><span>name: </span>Greeshma</h3>
        <h3 data-aos="zoom-in"><span>email: </span>greeshma.mswamy@gmail.com</h3>
        <h3 data-aos="zoom-in"><span>Address: </span>Mysore,Karnataka</h3>
        <h3 data-aos="zoom-in"><span>phone: </span>+99999999999</h3>
        <h3 data-aos="zoom-in"><span>Experience: </span>2 years</h3>
      </div>
      <a href="#" class="btn" data-aos="fade-up">Download CV</a>
    </div>
    <div class="skills"  data-aos="fade-up">
      <h1 class="heading"><span>Skills</span></h1>

      <div class="progress" >
        <div class="bar" data-aos="fade-left">
          <h3 ><span>HTML</span> <span>95%</span></h3>
        </div>
        <div class="bar" data-aos="fade-right">
          <h3><span>CSS</span> <span>75%</span></h3>
        </div>
        <div class="bar" data-aos="fade-left">
          <h3><span>Javascript</span> <span>55%</span></h3>
        </div>
        <div class="bar" data-aos="fade-right">
          <h3><span>PHP</span> <span>55%</span></h3>
        </div>
        <div class="bar" data-aos="fade-left">
          <h3><span>C++</span> <span>95%</span></h3>
        </div>
      </div>
    </div>

    <div class="edu-exp">
      <h1 class="heading"  data-aos="fade-up" ><span>Education and Experience</span></h1>
      <div class="row">
        <div class="box-container">
          <h3 class="title" data-aos="fade-right">Education</h3>

          <div class="box" data-aos="fade-right">
            <span>(2019-2020)</span>
            <h3>Web designer</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde asperiores sed deserunt aspernatur, quod
              culpa ea debitis inventore ipsum consequuntur quo exercitationem error amet corporis excepturi velit
              magnam cupiditate sunt.</p>
          </div>

          <div class="box" data-aos="fade-right">
            <span>(2020-2021)</span>
            <h3>Web developerr</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde asperiores sed deserunt aspernatur, quod
              culpa ea debitis inventore ipsum consequuntur quo exercitationem error amet corporis excepturi velit
              magnam cupiditate sunt.</p>
          </div>


          <div class="box" data-aos="fade-right">
            <span>(2021-2022)</span>
            <h3>Web designer</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde asperiores sed deserunt aspernatur, quod
              culpa ea debitis inventore ipsum consequuntur quo exercitationem error amet corporis excepturi velit
              magnam cupiditate sunt.</p>
          </div>

        </div>

        <div class="box-container">
          <h3 class="title" data-aos="fade-left">Experience</h3>

          <div class="box" data-aos="fade-left">
            <span>(2019-2020)</span>
            <h3>Back End Developer</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde asperiores sed deserunt aspernatur, quod
              culpa ea debitis inventore ipsum consequuntur quo exercitationem error amet corporis excepturi velit
              magnam cupiditate sunt.</p>
          </div>

          <div class="box" data-aos="fade-left">
            <span>(2020-2021)</span>
            <h3>Full Stack Developer</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde asperiores sed deserunt aspernatur, quod
              culpa ea debitis inventore ipsum consequuntur quo exercitationem error amet corporis excepturi velit
              magnam cupiditate sunt.</p>
          </div>


          <div class="box" data-aos="fade-left">
            <span>(2021-2022)</span>
            <h3>Web designer</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde asperiores sed deserunt aspernatur, quod
              culpa ea debitis inventore ipsum consequuntur quo exercitationem error amet corporis excepturi velit
              magnam cupiditate sunt.</p>
          </div>

        </div>


      </div>
    </div>
  </section>

  <!-- about section ends-->

  <!-- portfolio section starts-->



  <section class="portfolio" id="portfolio">

    <h1 class="heading" data-aos="fade-up"> <span>portfolio</span></h1>

    <div class="box-container"  data-aos="zoom-in">
      <div class="box">
        <img src="images/img-1.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/img-2.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/img-3.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/img-4.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/img-5.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022)</span>
      </div>

      <div class="box" data-aos="zoom-in">
        <img src="images/img-1.jpg" alt="">
        <h3>web development</h3>
        <span>( 2020 - 2022)</span>
      </div>
    </div>
  </section>

  <!-- portfolio section ends-->


  <!-- contact section starts-->
  <section class="contact" id="contact">
    <h1 class="heading" data-aos="fade-up">
      <span>Contact me</span>
    </h1>


    <form action="" method="post">
      <div class="flex">
        <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
        <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea  data-aos="fade-up" name="message" class="box" placeholder="enter your message" cols="30" rows="10" required></textarea>
      <input  data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+123-456-7890</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>h@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>mysore</p>
      </div>

   </div>
  </section>

  <!-- contact section ends-->

  <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Web developer</span></div>


  <!--custom js file link-->
  <script src="js/script.js"></script>

  <!-- aos js link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.3/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   


</body>

</html>