<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tentang</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="public/CSS/style.css">
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Tentang</h3>
   <p> <a href="home.php">Beranda</a> / Tentang </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="public/assets/img/kontak.jpg" alt="">
      </div>

      <div class="content">
         <h3>Kenapa memilih ini?</h3>
         <p>Kami fokus untuk menjadi sangat inovatif dan kreatif dalam mengembangkan produk dan layanan kami serta menawarkan cakupan yang luas dengan persyaratan yang kompetitif.</p>
         <p>Kami memiliki tim yang sangat kompeten dan dapat diandalkan untuk melayani Anda, dengan komitmen terhadap layanan pelanggan yang dipersonalisasi untuk semua klien kami.</p>
         <a href="contact.php" class="btn">Kontak Kami</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Review Klien</h1>

   <div class="box-container">

      <div class="box">
         <img src="public/assets/img/kevin.JPG" alt="">
         <p>Menurut saya, ini sangat luar biasa dan keren. Kemungkinan kedepannya akan semakin berkembang</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kevin Simorangkir</h3>
      </div>

      <div class="box">
         <img src="public/assets/img/krisna.jpg" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ad, quo labore fugiat nam accusamus quia. Ducimus repudiandae dolore placeat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ignatius Krisna</h3>
      </div>
   </div>

</section>

<section class="authors">

   <h1 class="title">Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="public/assets/img/kevin.JPG" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kevin Simorangkir</h3>
      </div>

      <div class="box">
         <img src="public/assets/img/krisna.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ignatius Krisna</h3>
      </div>
   </div>

</section>

<?php include 'footer.php'; ?>

<script src="public/JS/script.js"></script>

</body>
</html>