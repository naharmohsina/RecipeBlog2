 <?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

$title = mysqli_real_escape_string($connect, $input["rname"]);
$body = mysqli_real_escape_string($connect, $input["rdetails"]);
$url = mysqli_real_escape_string($connect, $input["img"]);
$time = mysqli_real_escape_string($connect, $input["time"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE recipe  
 SET rname = '".$title."', 
 rdetails = '".$body."' ,
  img = '".$url."' ,
  time = '".$time."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM recipe 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    