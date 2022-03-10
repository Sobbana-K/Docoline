
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
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $password = $_POST['password'];

  $sql = "INSERT INTO register VALUES ('$name','$phonenumber','$password')";

  if(mysqli_query($conn, $sql)){
    $_SESSION['name'] = $name;
    header("Location: login.html");
  } 
  else {
      echo "Fill all details";
        }
  mysqli_close($conn);
  ?>
</body>
</html>
