
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
     




		
  <thead  class="thead-dark">
  	
  	<div align="center">
        <h2> Jamia millia islamia</h2>
        <h4> Diploma in computer engg </h4>
        <h4> 3rd Semester</h4>
</div>

 
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
            <th width="10%" scope="col">1:00 - 2:00 pm</th>      
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
					<td align="center"><?php echo $row['id']; ?></th>
					<td align="center" ><?php echo $row['day']; ?></th>
					<td  align="center" ><?php echo $row['1p']; ?></td>
					<td  align="center"><?php echo $row['2p']; ?></td>
					<td   align="center"><?php echo $row['3p']; ?></td>
					<td  align="center"><?php echo $row['4p']; ?></td>
					<td  align="center"><?php echo $row['lunch']; ?></td>
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
              
</body>
</html>