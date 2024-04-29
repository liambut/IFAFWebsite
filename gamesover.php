<!doctype html>
<html lang="html">

<head>
  <title>IFAF European Championships</title>
  <link rel="icon" href="img/2-IFAF-Logo-EuropeanChamp-2.png">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/burger.css">
  <link rel="stylesheet" href="css/standings.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<div class="header" id="header">
  <div class="header-left">
    <a href="https://ifafchampionships.com">
    <img src="img/2-IFAF-Logo-EuropeanChamp-1.png">
    </a>
  </div>
  <div class="header-right">
    <div class='links'>
      <a href="https://instagram.com/americanfootballireland"><img src="img/instagram.png" style="width:1.5em;height:1.5em;"></a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://tiktok.com/@ifafmedia"><img src="img/tiktok.png" style="width:1.5em;height:1.5em;"></a>
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <li><a href="https://ifafchampionships.com" onclick="uncheck()">Home</a></li>
    </ul>
  </div>
</div>
<div class="mid">
<?php include"oldstandings.php" ?>
</div>
