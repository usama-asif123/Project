<?php

if(isset($_POST["update"]))
{
  $stu_id=$_GET['sid'];
 
 $id = $_POST["id"];
  $day = $_POST["day"];
  $onep = $_POST["subject(1st)"];
  $twop = $_POST["subject(2nd)"];
  $threep = $_POST["subject(3rd)"];
  $lunch = $_POST["lunch"];
  $fourp = $_POST["subject(4th)"];
  $fivep = $_POST["subject(5th)"];
  $sixp = $_POST["subject(6th)"];
  

$conn = mysqli_connect('localhost', 'root', 'mysql', 'timetable2');
 
$sql ="UPDATE teachertimetable SET    day='".$day."', 1p='".$onep."', 2p='".$twop."', 3p='".$threep."',4p='".$fourp."',lunch='".$lunch."',5p='".$fivep."',6p='".$sixp."'  WHERE id=$stu_id ";

$result=mysqli_query($conn,$sql);
}
?>
<script type="text/javascript">
  alert("updated");
  window.location="view.php"
</script>