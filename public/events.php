                        <?php

$dbc=mysqli_connect("localhost","root","","admin");
if(isset($_POST['event_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['title']);
    $body=mysqli_real_escape_string($dbc,$_POST['body']);
  $img=mysqli_real_escape_string($dbc,$_POST['url']);
   
            $sql="INSERT INTO recipe(rname,rdetails,img) VALUES('$title','$body','$img')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/home");
die();
  
}
if(isset($_POST['contact_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['cname']);
    $body=mysqli_real_escape_string($dbc,$_POST['cemail']);
  $msg=mysqli_real_escape_string($dbc,$_POST['msg']);
   
            $sql="INSERT INTO contact(cname,cemail,msg) VALUES('$title','$body','$msg')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/");
die();
  
}

?>
