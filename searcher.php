<?php
$host='192.168.43.242';
$username='connect';
$pwd='1234';
$db="first_database";
$con=mysqli_connect($host,$username,$pwd,$db) or die('Unable to connect');
if(mysqli_connect_error($con))
{
  echo "Failed to Connect to Database ".mysqli_connect_error();
}
$name=$_POST['Query'];
$sql="SELECT * FROM first_database WHERE name LIKE '%$name%'";

$query=mysqli_query($con,$sql);
if($query)
{
    while($row=mysqli_fetch_array($query))
  {
    $data[]=$row;
  }
    print(json_encode($data));
}else
{
  echo('Not Found ');
}
mysqli_close($con);
?>