<?php
  $msg = $_POST['msg'];
  $t=time();
  $date=date("d-m-Y",$t);
  $date=$t."  ".$date;
  mysqli_query(mysqli_connect("localhost","root","","confessions"),"INSERT INTO message(msg_no,msg) VALUES('$date','$msg')" );
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Rishabh Arya [Beta]</title>
  <link rel="stylesheet" href="./css/normalize.min.css">
  <link rel='stylesheet' href='./css/Roboto+Slab.css'>
  <link rel='stylesheet' href='./css/Montserrat.css'>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="wrapper">
    <canvas id="stars"></canvas>
    <canvas id="yahia"></canvas>
    <div class="container">
      <div class="template color-yellow" data-template="home">
        <main>
          <h1><span class="color-red">Have a
            <mark> secret</mark> you wish</span><span>to tell me anonymously</span></h1>
            <form action="secret.php" method="post" id="jsform" >
            <div class="links">
              <a class="link color-yellow" >It will be only between us [ Mention your name otherwise i will never know who you are]-</a><br><br>
              <input id="myInput" class="w3-input" type="text" placeholder="Have a crush on me and dying to tell me" name="msg">
              <br>
              <button id="myBtn" onclick="javascript:alert('Thanks your message have been received XD!')"></button>
            </form>
            </div>
          </main>
          <footer>
            <div class="links">
              <a class="link small alt" href="https://www.instagram.com/rishabh._.arya/?hl=en" title="Instagram (@RishabhArya)" target="_blank">Instagram</a>
              <a class="link small alt" href="https://www.linkedin.com/in/rishabh-arya-b64634165/" title="LinkedIn (@RishabhArya)" target="_blank">LinkedIn</a>
              <a class="link small alt" href="https://github.com/RishabhArya" title="GitHub (@RishabhArya)" target="_blank">GitHub</a>
              <a class="link small alt" href="https://www.facebook.com/rishab.arya.520" title="Facebook (@RishabhArya)" target="_blank">Facebook</a>
              <a class="link small alt" href="https://twitter.com/Rishabharya2799" title="Twitter (@RishabhArya)" target="_blank">Twitter</a>
              <a class="link small alt" href="https://codepen.io/rishabharya" title="Codepen (@RishabhArya)" target="_blank">Codepen</a>
            </div>
          </footer>
        </div>
        <div class="loading" id="identity" title="Yahia Refaiea identity">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
          <a class="loading" id="signature" href="https://www.anwarazeez.com" title="Me :)" target="_blank"></a>
        </div>
    </div>
    <script src='./js/mobile-detect.min.js'></script>
    <script src='./js/three.min.js'></script>
    <script src='./js/jquery.min.js'></script>
    <script src='./js/jquery.mCustomScrollbar.concat.min.js'></script>
    <script>
    var input = document.getElementById("myInput");
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("myBtn").click();
      }
    });
  </script>
    <script  src="./js/script.js"></script>
  </body>
  </html>
  l
