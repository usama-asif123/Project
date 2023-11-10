<!DOCTYPE html>
<nav>
      <a href="dashboard.php" > Dashboard</a>
      <a href="teachernames.php">Subject allocation</a>
      <a href="UserName.html">University detail</a>
      <a href="holidays.php">Holiday schedule </a>
      <a href="view.php">Display</a>
      
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
    <title>Time Table</title>
  </head>


  

 
  <body>
  <div class="form"> 
  	 <h1>Enter Data</h1>

      <form action="" method="post" align="center" id="form1">
               <label>ID</label> 
              <input type="text"name="id" class="a" >
               <br>
              <label>Day</label> 
               <input type="text" name="day">
               <br>
               <label>1st period</label>
               <input type="text" name="subject(1st)">
               <br>
              <label> 2nd period</label>
               <input type="text" name="subject(2nd)">
               <br>
              <label>3rd period</label>
               <input type="text" name="subject(3rd)">
               <br>
              
               <label>4th period</label>
               <input type="text" name="subject(4th)">
               <br>
                 <label> Lunch</label>
                 <input align="left"type="text" name="lunch">
               <br>
              <label>5th period</label>
               <input type="text" name="subject(5th)">
               <br>
               <label>6th period</label>
               <input type="text" name="subject(6th)">
               <br>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        
      </form>
    
  </div>
  
  <style>
.form {
    margin: 119px auto;
    width: 700px;
    padding: 1px 25px;
    background-color: white;
}

label{
	width : 100px;
	display:inline-block;
	color:white;
}
#form{
	border-radius : 10px;
	color: white;
}




</style>
  
  
    
  </body>
</html>
<?php
//echo "asdasdasdaasd";
if(isset($_POST['submit']))
{
  include "dbConnect.php";

  $id=  $_POST["id"];
  $day = $_POST["day"];
  $onep = $_POST["subject(1st)"];
  $twop = $_POST["subject(2nd)"];
  $threep = $_POST["subject(3rd)"];
  $lunch = $_POST["lunch"];
  $fourp = $_POST["subject(4th)"];
  $fivep = $_POST["subject(5th)"];
  $sixp = $_POST["subject(6th)"];
  
  //echo $tname." ".$sname." ".$cname." ".$st." ".$et;
  //echo "asdasdasdaasd";
  $sql = "INSERT INTO teachertimetable(id,day,1p,2p,3p,lunch,4p,5p,6p) VALUES ('$id', '$day', '$onep', '$twop', '$threep','$lunch','$fourp','$fivep','$sixp')";
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
<?php 
include "dbconnect.php";

$sql = "SELECT * FROM teachertimetable";

$result = $conn->query($sql);
?>
<div>
   <h3 align="center"> TimeTable </h3>
   <div class="timetable" >
  <table border="1" align="center" cellpadding="" cellspacing="2"> 
  <tr> 
          <th rowspan="2"  width="1%" scope="col"> S.No </th>
        <th rowspan="2" width="6%" scope="col">Day</th>
        <th rowspan="2" width="14%" scope="col">9:00 - 10:00 am</th>
          <th width="16%"  scope="col">10:00 - 11:00 am </th>
            <th width="14%"width="14%" scope="col">11:00 - 12:00 am </th>
            <th width="14%" scope="col"> 12:00 - 1:00 am </th>
            <th width="10%" scope="col">1:00 - 2:00 pm</th>      
            <th width="16%" rowspan="2" scope="col">2:00 pm - 3:00 pm</th>  
            <th width="24%" scope="col">3:00 - 4:00 am  </th> 
          <th width="16%" cellspacing="2" scope="col">EDIT </th>
            <th width="16%" cellspacing="2" scope="col">DELETE </th>
     
</tr>
  </thead>
  <tbody> 
    <?php
      if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
    ?>
      
          <tr>
          <td><?php echo $row['id']; ?></th>
          <td ><?php echo $row['day']; ?></th>
          <td  ><?php echo $row['1p']; ?></td>
          <td ><?php echo $row['2p']; ?></td>
          <td  ><?php echo $row['3p']; ?></td>
          <td ><?php echo $row['4p']; ?></td>
          <td ><?php echo $row['lunch']; ?></td>
          <td ><?php echo $row['5p']; ?></td>
          <td ><?php echo $row['6p']; ?></td>
   <td>   <a href="up.php?sid=<?php echo $row['id']; ?>" >Edit</a> 	</td>
   <td><a href="delete.php?sid=<?php echo $row['id']; ?>" >Delete</a> </td>
    
          </tr> 
        
          
    <?php   
            }
      }
    ?>
            
  </tbody>
</table>

  </div>
