<?php
$connection = mysqli_connect("localhost", "root", "", "flag");
$ID = mysqli_real_escape_string($connection, $_REQUEST['id']);
$pass = mysqli_real_escape_string($connection, $_REQUEST['password']);
$query = "SELECT * FROM games WHERE team_id = " . $ID;
$result = $connection->query($query);
if ($result->num_rows > 0) {
  // output data of each row
  if($result->num_rows > 1){
  exit("ERROR with ID " . $ID . " please contact an administrator");
  }
  while($row = $result->fetch_assoc()) {
    $realpass = $row["password"];
     if($pass != $realpass){
     exit("ERROR: incorrect password, check your password and if this issue persists please contact an administrator");
     }
  }
} else {
  exit("ERROR: ID " . $ID . " does not exist");
}
// Attempt insert query execution
$i = 1;
$targetDir = "../uploads/";

while($i<3){
$nameholder = "name" . $i;
$name = mysqli_real_escape_string($connection, $_REQUEST[$nameholder]);
$ageholder = "age" . $i;
$age = mysqli_real_escape_string($connection, $_REQUEST[$ageholder]);

$PID = $ID . $i;
$photoholder = "photo" . $i;
$fileName = basename($_FILES[$photoholder]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$allowTypes = array('jpg','png','jpeg','gif', 'JPG', 'JPEG', 'GIF', 'PNG');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        $temp = explode(".", $_FILES[$photoholder]["name"]);
        $newfilename = $PID . '.'. end($temp);
        if(move_uploaded_file($_FILES[$photoholder]["tmp_name"], $targetDir . $newfilename)){
         echo $fileName . " uploaded successfully ";
        }else{
            echo"Sorry, there was an error uploading" . $fileName . " please try again or contact an administrator.<br/>";
        }
    }else{
       echo'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
$positionholder = "position" . $i;
$position = mysqli_real_escape_string($connection, $_REQUEST[$positionholder]);

$sql = "INSERT INTO players (player_id, team_id, position, name, age, picture) VALUES ('$PID', '$ID', '$position', '$name', '$age', '$fileName')";
if(mysqli_query($connection, $sql)){
    echo "Position " . $i ." successfully added<br/>";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($connection) . "please report this message to the admin";
}
$i = $i+1;
}
 mysqli_close($connection);
?>
