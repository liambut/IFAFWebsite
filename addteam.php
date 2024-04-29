<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="css/main.css">
  <meta charset="UTF-8">
 <title>IFAF European Championships</title>
</head>
<body>
<div class="mid">
<h1> Add team info </h1>
<p>Here you can add the details of all team members (12 athletes and 4 staff)</p>
<p>Please upload square headshots of each player (like on an ID card)</p>
<p>If required you can use the following website to resize images: <a href ="https://squareanimage.com/"> squareanimage.com </a> and choose Square Crop</p>
<p>Please enter the team ID and password provided to you by email</p>
<br/>

<form action="scripts/teamadder.php" method="POST" enctype="multipart/form-data">
  <label>ID : </label>
  <input type="text" placeholder="1234" name="id" required>
  &nbsp;
  <label>Password : </label>
    <input type="password"  name="password" required>
  <div class="formup">
  <br/>
  <?php
      $connection = mysqli_connect("localhost", "root", "", "repair");
      $i = 0;
        while ($i < 2) {
          echo'<div class="posholder">
          <h1>Position ' . $i+1 . '</h1>
  <br/>
          <label>Name : </label>
          <input type="text" placeholder="John Doe" name="name' . $i+1 . '" required>
          <br/>
          <label>Age: </label>
          <input type="number"  placeholder="22" name="age' . $i+1 . '" required>
          <br/>
          <label>Photo: </label>
          <input type="file" name="photo' . $i+1 . '" id="photo' . $i+1 . '" onchange ="update' . $i+1 . '()" required>
          <br/>
          <img id="preview' . $i+1 . '" src="#" style="display:none;"/>
                    <script>
                      function update' . $i+1 . '(){
                        const [filephoto' . $i+1 . '] = document.getElementById("photo' . $i+1 . '").files;
                        if (filephoto' . $i+1 . ') {
                          document.getElementById("preview' . $i+1 . '").src = URL.createObjectURL(filephoto' . $i+1 . ');
                          document.getElementById("preview' . $i+1 . '").style = "display: inherit; width: 10em; height:auto;"
                        }
                      }
                    </script>
          <br/>
          <label>Position: </label>
          <input type="text" placeholder="QB" name="position' . $i+1 . '" required>
          </div>';
          $i = $i+1;
          }
      ?>
      </div>
      <br/>
  <input type="submit" value = "Save Info" class="form-submit-button">
</form>
</div>
<?php mysqli_close($connection); ?>
</body>
</html>
