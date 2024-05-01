<!doctype html>
<html lang="html">

  <head>
    <title>IFAF European Championships</title>
    <link rel="icon" href="img/2-IFAF-Logo-EuropeanChamp-2.png">
      <link rel="stylesheet/less" href="css/bracket.less">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/burger.css">
    <link rel="stylesheet" href="css/standings.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
  </head>

<div class="header" id="header">
  <div class="header-left">
    <img src="img/2-IFAF-Logo-EuropeanChamp-1.png">
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
      <li><a href="https://ifafchampionships.com/#info" onclick="uncheck()">Info</a></li>
      <li><a href="https://ifafchampionships.com/#live" onclick="uncheck()">Live</a></li>
     <li><a href="https://ifafchampionships.com/#score" onclick="uncheck()">Standings</a></li>
      <li><a href="https://ifafchampionships.com/#games" onclick="uncheck()">Games</a></li>
     <li><a href="https://ifafchampionships.com/#schedule" onclick="uncheck()">Schedule</a></li>
      <li><a href="https://ifafchampionships.com/#teams" onclick="uncheck()">Teams</a></li>
     <li><a href="https://ifafchampionships.com/#FAQ" onclick="uncheck()">FAQ's</a></li>
   </ul>
 </div>
</div>
<div class="mid" id="info">
 <h1>Info</h1>
 <div class="mid-left">
   <a id="twitter_timeline" class="twitter-timeline" data-width="600" data-height="450" data-theme="dark" href="https://twitter.com/IFAFMedia?ref_src=twsrc%5Etfw">Tweets by IFAF European Championships 2023</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 </div>
 <div class="mid-right">
   <p>The highly anticipated IFAF European Championships in 2023 will take place in the city of Limerick, Ireland.</p>
   <p>From August 18th to the 23rd, the championship event will showcase the finest American football talent from across Europe.</p>
   <p>The championship promises thrilling matches, intense rivalries, and unforgettable moments as nations compete for the title.</p>
   <p>Limerick, known for its rich history, picturesque landscapes, and vibrant sports culture, will be the perfect host for the tournament.</p>
   <p>Fans and enthusiasts from around the continent will gather to witness the pinnacle of Flag American football and experience the electric atmosphere that only this sport can provide.</p>
   <br/>
 </div>
</div>

<br/>

<div class="mid"id="live">
   <script>console.log("Europe/Dublin" == Intl.DateTimeFormat().resolvedOptions().timeZone);</script>
   <h1>Live</h1>
   <p>Watch pitch 1 and 2 live at <a href="https://ifaf.tv/sportitemset/64d0aafe9e7bcb2d46e2d715"> IFAF.TV</a></p>
<p> All scores are updated at half time and full time</p>
   <br/>
     <?php include "live.php";?>

</div>


<br/>
<div class="mid">
 <h1 id="score">Standings</h1>
 <?php include "bracket.php"?>
<?php include "standings.php";?>

 </div>

<br/>
<div class="mid">
  <h1 id="games">Games</h1>
  <?php include "games.php";?>
</div>

<br/>

<div class="mid">
  <h1 id="schedule">Schedule</h1>
    <?php include "schedule.php";?>
</div>
<br/>


<div class="mid" hidden>
  <h1 id="photos">Photos</h1>
  <iframe referrerpolicy="no-referrer-when-downgrade" height="500em" width="100%" style="border:none;" src="https://view-awesome-table.com/-NY9BZA32c9unkYbc3_S/view"></iframe>
</div>


<br/>
<div class="mid">
  <h1 id="teams">Teams</h1>
<p>The team rosters can be found <a href="https://ifafchampionships.com/roster.html">here</a></p>
</div>
 <br/>
<div class="mid">
  <h1 id="FAQ">FAQ's</h1>
  <p><details>
  <summary>What is flag football?</summary>
  <div>
    Flag football is the non-contact variant of American Football, you can find more information here: <a href="https://americanfootball.sport/a-guide-to-flag-football/">AmericanFootball.sport</a>.
  </div>
</details></p>
  <p><details>
  <summary>Where will the event be hosted?</summary>
  <div>
    The championships will be held on the sports grounds at the <a href="https://goo.gl/maps/K6PTZ5Jk4kc4MHqc8"> Univeristy of Limerick </a>
  </div>
</details></p>
  <p><details>
  <summary>What's in the area?</summary>
  <div>
    There are many sights to see, attractions to visit and cuisines to try around Limerick, find a curated list here: <a href="https://www.limerick.ie/discover/eat-see-do">Limerick.ie</a>
  </div>
</details></p>
  <p><details>
  <summary>Can I play?</summary>
  <div>
    While this event is closed to national teams only, you can find Irish teams at <a href="https://www.americanfootball.ie/flagfootball/findteam/">AmericanFootball.ie</a> or get more information at <a href="https://americanfootball.sport/">AmericanFootball.sport</a>.
  </div>
</details></p>
</div>
</body>
<script src="js/main.js"></script>
</html>
