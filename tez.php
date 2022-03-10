<html>
<head>
<title>Inserted Data</title>
</head>
<body>
  <?php
  $conn = mysqli_connect("localhost", "root", "","subhi");   
  if($conn === false){
  die("ERROR: Could not connect. " 
                . mysqli_connect_error());
  }
  $Name = $_POST['Name'];
  $Phonenumber = $_POST['Phonenumber'];
  $Password = $_POST['Password'];

  $sql = "INSERT INTO docregister VALUES ('$Name','$Phonenumber','$Password')";

  if(mysqli_query($conn, $sql)){
    $_SESSION['Name'] = $Name;
    header("Location: doclogin.html");
  } 
  else {
      echo "Fill all details";
        }
  mysqli_close($conn);
  ?>
</body>
</html>
