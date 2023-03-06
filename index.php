<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Biodataku</title>
    <style>
      .container{
        width: 800px; 
        margin: auto
      }
      .nav{
        display: flex;
        margin: auto;
        text-align: right;
        font-family: Sans-serif;
        width: 100%;
        font-size: 30px;
      }
      .nav ul{
        background-color:rgb(0, 191, 255) ;
        position: relative;
        width: 100%;
        padding: 0px 25px 0px 25px;
        text-align: center;
        list-style: none;
        padding: 0;
        margin: 0
      }
      .nav li{
        display: inline-block;
      }
      .nav ul li:hover{
        background: red;
      }
      .nav ul li:hover a{
        color: yellow;
      }
      .nav ul li a{
        display: block;
        padding: 15px;
        text-decoration: none;
        color: white 
      }
      .judul{
        text-align: center;
        font-size: 30px;
        color: black
      }
      .base{
        width: 100%;
        overflow: hidden
      }
      .gambar{
        width: 35%;
        float: left
      }
      .deskripsi{
        width: 65%;
        float: left
      }
      .bagisatu{
        width: 70%;
        float: left
      }
      .bagidua{
        width: 70%;
        float: left
      }
      .bagisatu1{
        width: 50%;
        float: left
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="nav">
        <ul>
          <li><a href="#biodata">Biodata Saya</a></li>
          <li><a href="#skil"> Skil</a></li>
          <li><a href="#minat">Minat</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>
      <?php 
      echo "<section id='biodata'>
      <h1 class='judul'>Hallo Semuanya! </h1>";
      echo "<div class='base'>
        <div class='gambar'>
          <img src='me.jpg' style='width: 150px; padding-bottom: 5px; border-radius: 50px' />
        </div>
            <div class='deskripsi'>
          <p style='text-align:justify'>
          Nama saya Shinta Dwi Anggraeni biasa dipanggil Shinta,
          Saya adalah mahasiswa semester 4 Program studi Informatika Universitas Pembangunan Nasional Vetran Jawa Timur.
          Saya mengikuti organisasi di kampus yaitu HIMATIFA (Himpunan Teknik Informatika) sebagai sekretaris departemen advokesma.
          </p>
          <div class='bagisatu'>
            <h3>Pendidikan Saya</h3>
            <ul>
              <li>SD Raden Patah Surabaya</li>
              <li>SMP Negeri 26 Surabaya</li>
              <li>SMA Negeri 11 Suarabaya</li>
              <li>UPN 'Veteran' Jawa Timur</li>
              <?php
            </ul>
          </div>
        </div>
      </div>
      </section>";
    ?>
    <?php
      $dob = '2002-09-18'; 
      $age = date_diff(date_create($dob), date_create('today'))->y; 
      echo "<b>Umur Saya</b> </br>
      Saya lahir di Surabaya, 18 September 2002 dan sekarang umur saya $age tahun";
   ?>
   <?php
      echo "<section id='skil'>
      <h2 style='text-align: center; background-color: pink; color: white;'>Skill Saya</h2>";
      echo "<p style='text-align: justify'>
        <div class='base'>
        <div class='bagisatu1'>
          <center>
            <img src='canva.jpg' style='width: 30%; border-radius: 30px' />
            <h3>Canva</h3>
            <p>Canva adalah platform desain grafis dan konten publikasi</p>
          </center>
        </div>
        <div class='bagidua2'>
          <center>
            <img src='html.png' style='width: 30%; border-radius: 30px' />
            <h3>HTML</h3>
            <p> HTML adalah suatu bahasa yang menggunakan tanda-tanda tertentu (tag)</p>
          </center>
        </div>
      </div>
    </section>";
    ?>
  <?php
   echo "<section id='minat'>
   <h2 style='text-align: center; background-color: pink; color: white;'>Minat Saya</h2>";
   echo "<p style='text-align: justify'>
     <div class='base'>
     <div class='bagisatu1'>
       <center>
         <img src='backend.jpg' style='width: 30%; border-radius: 30px' />
         <h3>Backend</h3>
         <p>Back end merupakan bagian dari situs web yang tidak dilihat oleh pelanggan.</p>
       </center>
     </div>
     <div class='bagidua2'>
       <center>
         <img src='ui ux.png' style='width: 30%; border-radius: 30px' />
         <h3>UI/UX</h3>
         <p>User Interface (UI) merupakan fokus pada keindahan dari sebuah tampilan.
         User Experience (UX) merupakan fokus pada desain visual dan elemen interaktif produk.</p>
       </center>
     </div>
   </div>
  </section>";
?>
<?php
      echo "<section id='kontak'>
      <h2 style='text-align: center; background-color:rgb(0, 191, 255) ; color: white;'>Kontak Saya</h2>
      <div class='base'>
        <div class='bagisatu1'>
        <h2>Hubungi Saya</h2>
        <p style='text-align:justify;'>
          Gmail: shinta@gmail.com <br />
          WhatsApp: 0873456789
        </p> 
        </div>
        <div class='bagidua2'>
          <h2>Sosial Media</h2>
          <ul style='text-align:justify;'>
            <li>Instagram : Shinta_Anggraeni</li>
            <li>Twitter : Shinta_Anggraeni</li>
            <li>Tiktok : Shinta_Anggraeni</li>
          </ul>
        </div>
      </div>
    </div>";
    ?>
    </section>
  </body>
</html>
