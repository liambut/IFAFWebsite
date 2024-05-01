 <?php
   $connection = mysqli_connect("localhost", "root", "", "flag");
   $query = "SELECT * FROM games WHERE completed = 'Upcoming' ORDER BY start DESC;";
if ($result = $connection -> query($query)) {
    while ($row = $result -> fetch_row()) {
    echo'<div class="game-card">
               <div class="teams">
                 <h1>' . $row[3] . '</h1>
                 <h1>VS</h1>
                 <h1>' . $row[4] . '</h1>
               </div>
               <p>Status: Upcoming</p>
               <p>Start Time: ' . $row[1]. '</p>
             </div>';
    }
  }
     mysqli_close($connection);
?>
