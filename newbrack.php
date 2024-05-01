 <?php
   $connection = mysqli_connect("localhost", "root", "aFHlE/sN8Z,5", "flag");
   echo '<h1> EFFC Championships 2023 Men </h1>';
   $query = "SELECT * FROM games WHERE game_id = '90';";
if ($result = $connection -> query($query)) {
    $row = $result -> fetch_row())
    echo'<div class="game-card">
               <div class="teams">
                 <h1>' . $row[3] . '</h1>
                 <h1>VS</h1>
                 <h1>' . $row[4] . '</h1>
               </div>
               <p>Semi Final</p>
               <p>Status: Completed</p>
               <p>Start Time: ' . $row[1]. '</p>
               <p>Pitch: Pitch 1</p>
             </div>';
  }
     $query = "SELECT * FROM games WHERE game_id = '91';";
  if ($result = $connection -> query($query)) {
      $row = $result -> fetch_row())
      echo'<div class="game-card">
                 <div class="teams">
                   <h1>' . $row[3] . '</h1>
                   <h1>VS</h1>
                   <h1>' . $row[4] . '</h1>
                 </div>
                 <p>Semi Final</p>
                 <p>Status: Completed</p>
                 <p>Start Time: ' . $row[1]. '</p>
                 <p>Pitch: Pitch 2</p>
               </div>';
    }


echo '<h1> EFFC Championships 2023 Men </h1>';
   $query = "SELECT * FROM games WHERE game_id = '88';";
if ($result = $connection -> query($query)) {
    $row = $result -> fetch_row())
    echo'<div class="game-card">
               <div class="teams">
                 <h1>' . $row[3] . '</h1>
                 <h1>VS</h1>
                 <h1>' . $row[4] . '</h1>
               </div>
               <p>Semi Final</p>
               <p>Status: Completed</p>
               <p>Start Time: ' . $row[1]. '</p>
               <p>Pitch: Pitch 1</p>
             </div>';
  }
     $query = "SELECT * FROM games WHERE game_id = '89';";
  if ($result = $connection -> query($query)) {
      $row = $result -> fetch_row())
      echo'<div class="game-card">
                 <div class="teams">
                   <h1>' . $row[3] . '</h1>
                   <h1>VS</h1>
                   <h1>' . $row[4] . '</h1>
                 </div>
                 <p>Semi Final</p>
                 <p>Status: Completed</p>
                 <p>Start Time: ' . $row[1]. '</p>
                 <p>Pitch: Pitch 2</p>
               </div>';
    }
     mysqli_close($connection);
?>
