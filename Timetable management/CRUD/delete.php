<!DOCTYPE html>
<html>
<title>Automated timetable generation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("clock.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	<a href="dashboard.php" class="w3-bar-item w3-button">Home</a>
      <a href="create.php" class="w3-bar-item w3-button">Create</a>
      <a href="teachernames.php" class="w3-bar-item w3-button">Subject Allocation</a>
      <a href="view.php" class="w3-bar-item w3-button"> Display</a>
      <a href="UserName.html" class="w3-bar-item w3-button"> University Details</a>
      <a href="holidays.php" class="w3-bar-item w3-button"> Holiday Schedule</a>
	  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>



<?php 

$conn = mysqli_connect('localhost', 'root', 'mysql', 'timetable2');

$stu_id=$_GET['sid'];

$sql="SELECT *FROM teachertimetable WHERE id=$stu_id";
$result=mysqli_query($conn,$sql) ;

if (mysqli_num_rows($result) > 0) {
				
				while ($row =mysqli_fetch_assoc($result)) {

?>
	
</html>
<head>
   <link rel="stylesheet" href=""> 
 </head>

<div class="form">
<form action="deletedata.php?sid=<?php echo $row['id']; ?>" method="post" align="center">

          ID : <br> 
              <input type="text" name="id" value="<?php echo $row['id']; ?>">
               <br>
                Day : <br> 
               <input type="text" name="day" value="<?php echo $row['day']; ?>">
               <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <br>
               subject(1st)/time : <br> 
              <input type="text" name="subject(1st)" value="<?php echo $row['1p']; ?>">
               <br>
               subject(2nd)/time : <br> 
               <input type="text" name="subject(2nd)" value="<?php echo $row['2p']; ?>">
               <br>
               subject(3rd)/time : <br> 
               <input type="text" name="subject(3rd)"value="<?php echo $row['3p']; ?>">
               <br>
               Lunch : <br> 
               <input type="text" name="Lunch"value="<?php echo $row['lunch']; ?>" >
               <br>
               subject(4th)/time : <br> 
               <input type="text" name="subject(4th)"value="<?php echo $row['4p']; ?>">
               <br>
               subject(5th)/time : <br> 
               <input type="text" name="subject(5th)"value="<?php echo $row['5p']; ?>">
               <br>
               subject(6th)/time : <br> 
               <input type="text" name="subject(6th)"value="<?php echo $row['6p']; ?>">
               <br>

       <button type="submit" name="delete">Delete</button>
        
      </form>
    </div>
  <?php
  }
  }
    ?>

 
	

		</body>
		</html>