<!DOCTYPE html>
<nav>
     <a href="dashboard.php" > Dashboard</a>
      <a href="dropdown.html">Generate </a>
      <a href="teachernames.php">Subject allocation</a>
      <a href="holidays.php">Allocation</a>
      <a href="viewteachernames.php">Display teacher table </a>
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







 
<?php 
include "dbconnect2.php";

$sql = "SELECT * FROM facult";

$result = $conn->query($sql);
?>  


 


<h3 align= "center" >Holidays </h3>


  <table border="1" align= "center" > 
  <tr> 
          <th >Date</th>
        <th >Event</th>
   
</tr>
  </thead>

  <tbody> 
  <div>
    <?php
      if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
    ?>
      
          <tr>
          <td align="center"><?php echo $row['date']; ?></th>
          <td align="center" ><?php echo $row['event']; ?></th>
          </tr>
        
          
    <?php   
            }
      }
    ?>
            
  </tbody>
</table>
  </div>
              
</body>
