

</style>
<body>

<nav>
      <a href="dashboard.php" > Dashboard</a>
      <a href="teachernames.php">Subject allocation</a>
      <a href="dropdown.html">Generate </a>
      <a href="holidays.php">Holiday schedule </a>
      <a href="view.php">Display</a>
      
    </nav>
<style>
  body{
    background-color: orange;

  }
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
     <link rel="stylesheet" href="">
<?php 
include "dbconnect2.php";

$sql = "SELECT * FROM teacher";

$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>Taachernames And Subject</title>
<link rel="stylesheet" href="">
</head>
<body>
  
  <style >
    
    .form li{
     display: inline;
     float: left;
     border: 1px solid #e7e7e7;
    }
  </style>
      
   
      <br>
      <br>
      <h3 align="center">TeacherNames and Subject </h3>

<br>
  <table border="1" align="center" > 
  <tr> 
          <th  rowspan="1"  width="1%" scope="col" > Teacher Names</th>
        <th rowspan="1"  width="1%" scope="col" >Subject</th>
      
            
     
</tr>
  </thead>
  <tbody> 
    <?php
      if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
    ?>
      
          <tr>
          <td align="center"><?php echo $row['name']; ?></td>
          <td align="center" ><?php echo $row['subject']; ?></td>
          </tr>
        
          
    <?php   
            }
      }
    ?>
            
  </tbody>
</table>
  </div>
              
</body>
