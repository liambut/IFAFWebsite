 <?php
   echo'
   <link rel="stylesheet" href="css/main.css">
   ';
   $connection = mysqli_connect("localhost", "root", "", "flag");
   $query = "SELECT * FROM games WHERE completed = 'LIVE' ORDER BY start DESC;";
if ($result = $connection -> query($query)) {
    while ($row = $result -> fetch_row()) {
    echo'
    <form action="pushscore.php" method="post">
    <div class="game-card">
    <input type="hidden" name="ID" id="ID" value="' . $row[0] . '">
              <h1> ' . $row[7] . '
               <div class="teams">
                 <h1>' . $row[3] . '</h1>
                 <h1>VS</h1>
                 <h1>' . $row[4] . '</h1>
               </div>
               <p>Score: <input type="text" name ="score1" id ="score1" value = "' . $row[5] . '"> - <input type="text" name ="score2" id ="score2" value = "' . $row[6] . '"> <p>
               <p>Status: <input type="text" name ="status" id ="status" value = "Live"></p>
               <p>Start Time: ' . $row[1]. '</p>
                   <input type="submit">
                       </form>
             </div>';
    }
  }
     mysqli_close($connection);
?>
