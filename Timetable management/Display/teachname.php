 <link rel="stylesheet" href="style.css">
 <div class="form">
     <h1>Enter Data</h1>

    <div class="jumbotron">
     
      <form action="" method="post" align="center">

              <label>Teacher Name</label> 
               <input type="text" name="teacher">
               <br>
               <label>Subject</label>
               <input type="text" name="subject">
               <br>
              <label> Subject Code</label>
               <input type="text" name="code">
               

        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
        
      </form>
    </div>
  </div>
    
  </body>
</html>
<?php
//echo "asdasdasdaasd";
if(isset($_POST['submit']))
{
  include "dbConnect.php";


  $teacher = $_POST["teacher"];
  $subject = $_POST["subject"];
  $code = $_POST["code"];

  
  //echo $tname." ".$sname." ".$cname." ".$st." ".$et;
  //echo "asdasdasdaasd";
  $sql = "INSERT INTO teachertimetable(teacher,subject,code) VALUES ( '$teacher', '$subject', '$code')";
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

$sql = "SELECT teacher,subject,code FROM teachertimetable";

$result = $conn->query($sql);
?>
<div class="container">
    
  <thead  class="thead-dark">
    
   


<br>
<br>
<div class="form">
   <h2 align="center"> TimeTable </h2>
  <table border="1" align="center" cellpadding="" cellspacing="2"> 
  <tr> 
          <th rowspan="2"  width="1%" scope="col"> Teacher Name </th>
        <th rowspan="2" width="6%" scope="col">Sub</th>
        <th rowspan="2" width="14%" scope="col">Code</th>
     
          
     
</tr>
  </thead>
  <tbody> 
    <?php
      if ($result->num_rows > 0) {
        //output data of each row
        while ($row = $result->fetch_assoc()) {
    ?>
      
          <tr>
          <td><?php echo $row['teacher']; ?></th>
          <td ><?php echo $row['subject']; ?></th>
          <td  ><?php echo $row['code']; ?></td>
          </tr> 
        
          
    <?php   
            }
      }
    ?>
            
  </tbody>
</table>
  </div>