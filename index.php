
<!doctype html >
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
      
     
    
        <title>Stewart Events</title>
       
        

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        
        

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        
    </head>
    <style type="text/css">
    .dim{
    	opacity: .75;
    }
    .notdim{
    	opacity: 1;
    	-webkit-box-shadow: 5px 7px 19px -6px rgba(40,40,40,1);
-moz-box-shadow: 5px 7px 19px -6px rgba(40,40,40,1);
box-shadow: 5px 7px 19px -6px rgba(40,40,40,1);
    }
    .hidden{
    	display: none;
    }
    </style>
<body>
<div class="container">
<div id="stewartModal"class="modal fade hidden">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<div class="row">
		<div class="col-md-12">
			<h1 style="text-align:center;">Joel</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-2">
			<a class="imageHover" href="#"><img id="joel" class="dim"style="display:block;margin-left: auto; margin-right: auto;width:100px; height=150px; border-radius:100%; " src="https://lh3.googleusercontent.com/9kkGPFbHsjxFXS0zoOJIOvHwWuqt5zwq1--j3AhRoMyT=s438-p-no"/></a>
		</div>
		<div class="col-md-5"></div>
	</div>
	<div style="margin-top:10px;" class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="taskForm">
				<button style="width:100%;" type="button" class="btn btn-success" value="diaper">Diaper</button>
			</form>
		</div>
		
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="taskForm">
				<button  style="width:100%;"type="button" class="btn btn-success"value="bath">Bath</button>
			</form>
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-2"></div>
			<?php
			require('config.php');

			$checkQuery = "SELECT count(*) as count from stewart_events WHERE stop = '0000-00-00 00:00:00' and type='nap'";

			$checkQueryResults = mysqli_query($con,$checkQuery);

			$row = mysqli_fetch_assoc($checkQueryResults);

			if($row['count']==1){
			
			?>
			<div class="col-md-4">
				<form id="taskForm">
					<button  id="napStart"style="width:100%;" type="button" class="btn btn-success disabled"value="nap">Start Nap</button>
				</form>
			</div>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="napStop" style="width:100%;"type="button" class="btn btn-danger  "value="nap">Stop Nap</button>
				</form>
			</div>
			<?php
		     }else{

		     
			?>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="napStart"style="width:100%;" type="button" class="btn btn-success "value="nap">Start Nap</button>
				</form>
			</div>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="napStop"style="width:100%;"type="button" class="btn btn-danger  disabled"value="nap">Stop Nap</button>
				<form id="taskForm">
			</div>
			<?php
			}	
			?>
		
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="taskForm">
				<button style="width:100%;"type="button" class="btn btn-success"value="nurse">Nursed</button>
			</form>
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="taskForm">
				<button style="width:100%;"type="button" class="btn btn-success"value="solids">Solids</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h1 style="text-align:center;">Home</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-2">
			<a class="imageHover" href="#"><img id="home" class="dim"style="display:block;margin-left: auto; margin-right: auto;width:100px; height:100px; border-radius:100%; " src="https://lh6.googleusercontent.com/-Pkwfe48tptc/VNrTt2WhBPI/AAAAAAAAnUY/za6uacBXyws/w790-h1052-no/IMG_0994.JPG"/></a>
		</div>
		<div class="col-md-5"></div>
	</div>
	
	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="taskForm">
				<button style="width:100%;" type="button" class="btn btn-info" value="vacuum">Vacuum</button>
			</form>
			
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form id="taskForm">
				<button style="width:100%;"type="button" class="btn btn-info"value="change sheets">Change Sheets</button>
			</form>
		</div>
	</div>

	

	<div style="margin-top:10px;"class="row">
		<div class="col-md-2"></div>
			<?php
			require('config.php');

			$checkQuery = "SELECT count(*) as count from stewart_events WHERE stop = '0000-00-00 00:00:00' and type='exercise'";

			$checkQueryResults = mysqli_query($con,$checkQuery);

			$row = mysqli_fetch_assoc($checkQueryResults);

			if($row['count']==1){
			
			?>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="execStart" style="width:100%;" type="button" class="btn btn-success disabled"value="exercise">Start Exercise</button>
				</form>
			</div>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="execStop" style="width:100%;"type="button" class="btn btn-danger  "value="exercise">Stop Exercise</button>
				</form>
			</div>
			<?php
		     }else{

		     
			?>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="execStart" style="width:100%;" type="button" class="btn btn-success "value="exercise">Start Exercise</button>
				</form>
			</div>
			<div class="col-md-4">
				<form id="taskForm">
					<button id="execStop"style="width:100%;"type="button" class="btn btn-danger  disabled"value="exercise">Stop Exercise</button>
				</form>
			</div>
			<?php
			}	
			?>
		
	</div>
</div>
<script type="text/javascript">

$("#joel").hover(
  function () {
    $(this).addClass("notdim",1000);
  },
  function () {
    $(this).removeClass("notdim",1000);
  }
);
$("#home").hover(
  function () {
    $(this).addClass("notdim",1000);
  },
  function () {
    $(this).removeClass("notdim",1000);
  }
);

</script>

</body>
</html>