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
  $Phone = $_POST['Phone'];
  $Date = $_POST['Date'];
  $Time = $_POST['Time'];

  $sql = "SELECT * FROM APPOINTMENT";
  if(mysqli_query($conn, $sql)){
    header("Location: patient-dashboard.html");
  } 
  else {
      echo "Fill all details";
        }
  mysqli_close($conn);
 

  ?>
</body>
</html>