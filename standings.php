 <?php
   $connection = mysqli_connect("localhost", "root", "", "flag");
   $query = "SELECT * FROM games WHERE completed = 'Scheduled' ORDER BY start DESC;";

echo"
   <h1>Group A Women</h1>
   <div class="ptable">
      <table>
        <tr class="col">
        <th>#</th>
          <th>Team</th>
          <th>Win</th>
          <th>Loss</th>
          <th>Points</th>
        </tr>";
        $query = "SELECT * FROM teams WHERE groupnum="A" AND male="0" ORDER BY wins DESC";
        $i = 0;
         if ($result = $connection -> query($query)) {
          while ($row = $result -> fetch_row()) {
            echo"<tr class='pos'>
              <td>" . $i . "</td>
              <td>" . $row[3] . "</td>
              <td>" . $row[4] . "</td>
              <td>" . $row[5] . "</td>
              <td>" . $row[6] . "</td>
              </tr>";
            $i = $i+1;
            }
          }
          echo"
       </table>
     </div>";
     echo"
        <h1>Group B Women</h1>
        <div class="ptable">
           <table>
             <tr class="col">
             <th>#</th>
               <th>Team</th>
               <th>Win</th>
               <th>Loss</th>
               <th>Points</th>
             </tr>";
             $query = "SELECT * FROM teams WHERE groupnum="B" AND male="0" ORDER BY wins DESC";
             $i = 0;
              if ($result = $connection -> query($query)) {
               while ($row = $result -> fetch_row()) {
                 echo"<tr class='pos'>
                   <td>" . $i . "</td>
                   <td>" . $row[3] . "</td>
                   <td>" . $row[4] . "</td>
                   <td>" . $row[5] . "</td>
                   <td>" . $row[6] . "</td>
                   </tr>";
                 $i = $i+1;
                 }
               }
               echo"
            </table>
          </div>";
          echo"
             <h1>Group A Men</h1>
             <div class="ptable">
                <table>
                  <tr class="col">
                  <th>#</th>
                    <th>Team</th>
                    <th>Win</th>
                    <th>Loss</th>
                    <th>Points</th>
                  </tr>";
                  $query = "SELECT * FROM teams WHERE groupnum="A" AND male="1" ORDER BY wins DESC";
                  $i = 0;
                   if ($result = $connection -> query($query)) {
                    while ($row = $result -> fetch_row()) {
                      echo"<tr class='pos'>
                        <td>" . $i . "</td>
                        <td>" . $row[3] . "</td>
                        <td>" . $row[4] . "</td>
                        <td>" . $row[5] . "</td>
                        <td>" . $row[6] . "</td>
                        </tr>";
                      $i = $i+1;
                      }
                    }
                    echo"
                 </table>
               </div>";
               echo"
                  <h1>Group B Men</h1>
                  <div class="ptable">
                     <table>
                       <tr class="col">
                       <th>#</th>
                         <th>Team</th>
                         <th>Win</th>
                         <th>Loss</th>
                         <th>Points</th>
                       </tr>";
                       $query = "SELECT * FROM teams WHERE groupnum="B" AND male="1" ORDER BY wins DESC";
                       $i = 0;
                        if ($result = $connection -> query($query)) {
                         while ($row = $result -> fetch_row()) {
                           echo"<tr class='pos'>
                             <td>" . $i . "</td>
                             <td>" . $row[3] . "</td>
                             <td>" . $row[4] . "</td>
                             <td>" . $row[5] . "</td>
                             <td>" . $row[6] . "</td>
                             </tr>";
                           $i = $i+1;
                           }
                         }
                         echo"
                      </table>
                    </div>";
                    echo"
                       <h1>Group C Men</h1>
                       <div class="ptable">
                          <table>
                            <tr class="col">
                            <th>#</th>
                              <th>Team</th>
                              <th>Win</th>
                              <th>Loss</th>
                              <th>Points</th>
                            </tr>";
                            $query = "SELECT * FROM teams WHERE groupnum="C" AND male="1" ORDER BY wins DESC";
                            $i = 0;
                             if ($result = $connection -> query($query)) {
                              while ($row = $result -> fetch_row()) {
                                echo"<tr class='pos'>
                                  <td>" . $i . "</td>
                                  <td>" . $row[3] . "</td>
                                  <td>" . $row[4] . "</td>
                                  <td>" . $row[5] . "</td>
                                  <td>" . $row[6] . "</td>
                                  </tr>";
                                $i = $i+1;
                                }
                              }
                              echo"
                           </table>
                         </div>";
                         echo"
                            <h1>Group D Men</h1>
                            <div class="ptable">
                               <table>
                                 <tr class="col">
                                 <th>#</th>
                                   <th>Team</th>
                                   <th>Win</th>
                                   <th>Loss</th>
                                   <th>Points</th>
                                 </tr>";
                                 $query = "SELECT * FROM teams WHERE groupnum="D" AND male="1" ORDER BY wins DESC";
                                 $i = 0;
                                  if ($result = $connection -> query($query)) {
                                   while ($row = $result -> fetch_row()) {
                                     echo"<tr class='pos'>
                                       <td>" . $i . "</td>
                                       <td>" . $row[3] . "</td>
                                       <td>" . $row[4] . "</td>
                                       <td>" . $row[5] . "</td>
                                       <td>" . $row[6] . "</td>
                                       </tr>";
                                     $i = $i+1;
                                     }
                                   }
                                   echo"
                                </table>
                              </div>";
?>
