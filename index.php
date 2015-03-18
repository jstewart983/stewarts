
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
    }
    </style>
<body>
<div class="container">
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
			<button style="width:100%;" type="button" class="btn btn-success">Diaper</button>
		</div>
		
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button  style="width:100%;"type="button" class="btn btn-success">Bath</button>
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-2"></div>
			<?php
			require('config.php');

			$checkQuery = "SELECT count(*) from stewart_events WHERE stop = '0000-00-00 00:00:00' and type='nap'";

			$checkQueryResults = mysqli_query($con,$checkQuery);

			$row = mysqli_fetch_assoc($checkQueryResults);
			if($row<1){
			
			?>
			<div class="col-md-4">
				<button style="width:100%;" type="button" class="btn btn-success disabled">Start Nap</button>
			</div>
			<div class="col-md-4">
				<button style="width:100%;"type="button" class="btn btn-danger  ">Stop Nap</button>
			</div>
			<?php
		     }else{

		     
			?>
			<div class="col-md-4">
				<button style="width:100%;" type="button" class="btn btn-success ">Start Nap</button>
			</div>
			<div class="col-md-4">
				<button style="width:100%;"type="button" class="btn btn-danger  disabled">Stop Nap</button>
			</div>
			<?php
			}	
			?>
		
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button style="width:100%;"type="button" class="btn btn-success">Nursed</button>
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button style="width:100%;"type="button" class="btn btn-success">Solids</button>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h1 style="text-align:center;">Copper</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="col-md-2">
			<a class="imageHover" href="#"><img style="display:block;margin-left: auto; margin-right: auto;width:100px; height=150px; border-radius:100%; " src="https://lh3.googleusercontent.com/T6PBCIPjrjpxXpnxUr5flrhbEWrNcw3nkHFpAVT6rM7Z=s438-p-no"/></a>
		</div>
		<div class="col-md-5"></div>
	</div>
	
	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button style="width:100%;" type="button" class="btn btn-info">Pee</button>
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button style="width:100%;"type="button" class="btn btn-info">Poop</button>
		</div>
	</div>

	<div style="margin-top:10px;"class="row">
		<div class="col-md-2"></div>
			<?php
			require('config.php');

			$checkQuery = "SELECT count(*) from stewart_events WHERE stop = '0000-00-00 00:00:00' and type='exercise'";

			$checkQueryResults = mysqli_query($con,$checkQuery);

			$row = mysqli_fetch_assoc($checkQueryResults);
			if($row<1){
			
			?>
			<div class="col-md-4">
				<button style="width:100%;" type="button" class="btn btn-success disabled">Start Exercise</button>
			</div>
			<div class="col-md-4">
				<button style="width:100%;"type="button" class="btn btn-danger  ">Stop Exercise</button>
			</div>
			<?php
		     }else{

		     
			?>
			<div class="col-md-4">
				<button style="width:100%;" type="button" class="btn btn-success ">Start Exercise</button>
			</div>
			<div class="col-md-4">
				<button style="width:100%;"type="button" class="btn btn-danger  disabled">Stop Exercise</button>
			</div>
			<?php
			}	
			?>
		
	</div>
</div>
<script type="text/javascript">

$("#joel").hover(function(){

       $(".notdim").fadeIn();
        $(".dim").fadeOut();
        
    
    	$(".notdim").fadeOut();
        $(".dim").fadeIn();
        
    
    }
    );

</script>

</body>
</html>