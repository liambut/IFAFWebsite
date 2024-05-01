 <?php
   $connection = mysqli_connect("localhost", "root", "", "flag");
   $query = "SELECT * FROM games WHERE completed = 'Scheduled' ORDER BY start DESC;";
   $oldboxcat = "09:00:00";
   $boxcount = 2;
       echo '<div id="box1">';
if ($result = $connection -> query($query)) {
    while ($row = $result -> fetch_row()) {
    $boxcat = $row[1];
    if ($oldboxcat == $boxcat){
    echo'<div class="game-card">
              <h1> ' . $row[7] . '
               <div class="teams">
                 <h1>' . $row[3] . '</h1>
                 <h1>VS</h1>
                 <h1>' . $row[4] . '</h1>
               </div>
               <p>Score: ' . $row[5] . ' - ' . $row[6] . ' <p>
               <p>Status: Scheduled</p>
               <p>Start Time: ' . $row[1]. '</p>
	<p>Pitch: ' . $row[10]. '</p>
             </div>';
             }else{
               echo'</div>
               <div box' . $boxcount . '<div class="game-card">
                            <h1> ' . $row[7] . '
                             <div class="teams">
                               <h1>' . $row[3] . '</h1>
                               <h1>VS</h1>
                               <h1>' . $row[4] . '</h1>
                             </div>
                             <p>Score: ' . $row[5] . ' - ' . $row[6] . ' <p>
                             <p>Status: Scheduled</p>
                             <p>Start Time: ' . $row[1]. '</p>
              	<p>Pitch: ' . $row[10]. '</p>
                           </div>';
                           $boxcount = boxcount+1;
             }
        }

    }
  }
     mysqli_close($connection);
?>
