<!DOCTYPE html>
<nav>
     <a href="dashboard.php" > Dashboard</a>
      <a href="dropdown.html">Generate </a>
      <a href="teachernames.php">Subject allocation</a>
      <a href="UserName.html">University detail</a>
      <a href="viewteachernames.php">Display teacher table </a>
      
      
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


<?php 
include "dbconnect.php";

$sql = "SELECT * FROM teachertimetable";

$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Display TimeTable</title>
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
      <h3 align="center"> TimeTable </h3>


	
	<div class="container">
		
  <thead  class="thead-dark">
  	
  	



   <?
     $name=$_REQUEST['University'];
     $roll=$_REQUEST['dept'];
     $category=$_REQUEST['semester'];
 
       echo "<p><center> Jamia Millia Islamia ".$_REQUEST['university'];
       echo"<br>";
       echo " Computer Engg ".$_REQUEST['department'];
       echo"<br>";
       echo " 6th Semester".$_REQUEST['semester'];

?>
<br>
<br>
	<table border="1" align="center" cellpadding="" cellspacing="2"> 
	<tr> 
    	    <th rowspan="2"  width="1%" scope="col"> S.No </th>
    	 	<th rowspan="2" width="6%" scope="col">Day</th>
    	 	<th rowspan="2" width="14%" scope="col">9:00 - 10:00 am</th>
    	    <th width="16%"  scope="col">10:00 - 11:00 am </th>
            <th width="14%"width="14%" scope="col">11:00 - 12:00 am </th>
            <th width="14%" scope="col"> 12:00 - 1:00 am </th>
            <th  width="10%" scope="col">1:00 - 2:00 pm</th>      
            <th width="16%" rowspan="2" scope="col">2:00 pm - 3:00 pm</th>  
            <th width="24%" scope="col">3:00 - 4:00 am  </th> 
            
     
</tr>
  </thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>
      
				  <tr>
          <td align="center"><?php echo $row['id']; ?></td>
          <td align="center" ><?php echo $row['day']; ?></td>
          <td  align="center" ><?php echo $row['1p']; ?></td>
          <td  align="center"><?php echo $row['2p']; ?></td>
          <td   align="center"><?php echo $row['3p']; ?></td>
          <td  align="center" ><?php echo $row['4p']; ?></td>
          <th  align="center"><?php echo $row['lunch']; ?></th>
          <td  align="center"><?php echo $row['5p']; ?></td>
          <td  align="center"><?php echo $row['6p']; ?></td>      
  

          </tr>
				
					
		<?php		
	          }
			}
		?>
	        	
	</tbody>
</table>
	</div>
	
	
	

	
	
<html lang="en">

  <head>
     <link rel="stylesheet" href="">
<?php 
include "dbconnect2.php";

$sql = "SELECT * FROM teacher";

$result = $conn->query($sql);
?>
<br>
<br>

	  <h4 >Teachernames and Subject </h4>
  <table border="1"  > 
  <tr> 
          <th rowspan="1"  width="1%" scope="col">Name</th>
        <th rowspan="1"  width="1%" scope="col">Subject</th>
      
            
     
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

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
              
</body>
</html>