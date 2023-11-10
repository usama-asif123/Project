<!DOCTYPE html>

   <nav>
      <a href="create.php" > Create</a>
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



  <?php

include("auth_session.php");
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    
    <link rel="stylesheet" href="dashboard.css" />
</head>
    
<body>
 

	
<br>


    <div class="form">
        <p>Hi !, <?php echo $_SESSION['username']; ?>! <br><br>  On this website , you can create timetable for any school or college , allot subject to teachers and prepare a separate table for every teacher.<br>
  <br> Also , you can schedule holidays in a table.<br><br>Access to the timetaable can be given to the students with an email ID and password but they can only
  access the timetable and cannot perform and operations on it.<br><br> Only Admin can make changes to the timetable and perform various operations on timetable .</p>
      
<style>
.form {
    margin: 119px auto;
    width: 700px;
    padding: 1px 25px;
    background-color: black;
	
}
</style>	  

</body>

</html>
