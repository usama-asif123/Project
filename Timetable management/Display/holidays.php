<!DOCTYPE html>
<nav>
     <a href="dashboard.php" > Dashboard</a>
      <a href="dropdown.html">Generate </a>
      <a href="teachernames.php">Subject allocation</a>
    
      <a href="viewteachernames.php">Display teacher table </a>
      <a href="viewholiday.php">Display holidays</a>
      
    </nav>
<style>
nav{
  width: 60%;
  display: flex;
  justify-content: space-around;
  background-color: white;
  height: 10%;
  width:100%;
  
  }
nav a{
  text-decoration:none;
  text-transform:uppercase;
  color:#000;
  font-weight:900;
  font-size:17px;
  position:relative;
}
nav a: first-child { 
  color:#4458dc;
}
nav a:before{
  content:"";
  position:absolute;
  top:110%;
  left:0;
  width:0;
  height:2px;
  border-bottom:2px solid #4458dc;
  transition:all 0.4s linear;
}
nav a:hover: before {
  width:100%;
  
}

</style>

<!doctype html>
<html lang="en">

  <head>
     <link rel="stylesheet" href="create.css">
    <meta charset="utf-8">
    <title>Holidays</title>
</head>



 
  <body>
  <div class="form"> 
  	 <h1>Enter Data</h1>

      <form action="" method="post" align="center">
               <label>Date</label> 
              <input type="text"name="date" class="a" >
               <br>
              <label>Event</label> 
               <input type="text" name="event">
               <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        
      </form>
    
  </div>
    
<style>
label{
  width : 100px;
  display:inline-block;
  color:black;
}
</style>


  </body>
</html>
<?php
//echo "asdasdasdaasd";
if(isset($_POST['submit']))
{
  include "dbConnect2.php";

  $date=  $_POST["date"];
  $event = $_POST["event"];

  
  //echo $tname." ".$sname." ".$cname." ".$st." ".$et;
  //echo "asdasdasdaasd";
  $sql = "INSERT INTO facult(date,event) VALUES ('$date','$event')";
  if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
    alert('New record created successfully');
  </script>" ;
  } 
  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}  
?>
