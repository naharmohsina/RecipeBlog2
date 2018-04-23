@extends('adminlte::layouts.app')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
<style> 

div.b {
    white-space: nowrap; 
    width: 10px; 
    overflow: hidden;
    text-overflow: ellipsis; 
    border: 0px solid #000000;
}

</style>
@section('main-content')
	<div class="container-fluid spark-screen">

		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM recipe ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>				

<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Publish Recipe</h3>
            </div>
			<form action="events.php" method="post">
            <div class="box-body">
              <input class="form-control" type="text" id="title" name="title" required="" placeholder="Recipe Name">
              <br>
			  <div class="form-group">
                       <input type="text" id="body" class="form-control"  name="body" required="" rows="3" placeholder="Recipe Description">
                </div>
				
             <input type="text" class="form-control"  id="url" name="url" required=""placeholder="Picture Url">
              			 	<br>
					  <div align="center" class="form-group">
				<button type="submit" name="event_btn" class="btn btn-success">Add Recipe</button>
				<br>
            </div>
			 </div>
			
			</form>
            <!-- /.box-body -->
          </div>			
												
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
    
       </div>
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Recipe</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>Recipe Name</th>
       <th>Recipe Details</th>
	    <th>Image</th>
		 <th>Time</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["rname"].'</td>
       <td>'.$row["rdetails"].'</td>
	    <td>'.$row["img"].'</td>
		<td>'.$row["time"].'</td>
	   	        </tr>
			
      ';
     }
     ?>
     </tbody>
    </table>
	
   </div>  
  </div>   
	</body>   
<script>  
( function($) {
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'event.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'rname'], [2, 'rdetails'], [3, 'img'], [4, 'time']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  } ) ( jQuery );
 </script>
	</div>
	<body> 


@endsection
