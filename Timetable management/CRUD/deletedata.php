<?php


if(isset($_POST["delete"]))
{

  $stu_id = $_GET['sid'];
  $conn = mysqli_connect('localhost', 'root', 'mysql', 'timetable2');
 
$sql =" DELETE FROM `teachertimetable`  WHERE id=$stu_id ";

$result=mysqli_query($conn,$sql);
}
?>
<script type="text/javascript">
  alert("deleted");
  window.location="view.php"
</script>