   <!doctype html>
<html>
<head>
	<title>Trying out php</title>
	<meta charset= "utf-8"/>
	<meta http-equiv="Content-type" content = "text/html"/>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1"/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script type="text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<style type="text/css">
 body,html {
 	height: 100%;
 	
 }


 .container-fluid{
 	
 	background-image:url("background.jpg"); 
 	min-height:100%;
 	width:100%;
 	background-size: cover;
 	background-position: center;
 	padding-top: 210px;
 	
 }
 .center {
 	text-align: center;


 }

.white {
	color: white;
}
.button {
	margin-bottom: 10px;
}
p{
	padding: 40px 0 40px 0;
}
.alert {
	margin-top: 20px;
	display: none;
}


</style>
  
</head>

<body>
<div id = "container" class = "container-fluid">
<div class = "row">
<div class = "col-md-12 center">
<h1>Weather Predictor</h1>
<p class  = "lead white" >Enter your city below to get a forecat of the weather there</p>
<form>
<div class = "form-group">
	<input type = "text"  class = "form-control" name = "city" id= "city" placeholder = "E.g. London, Paris, California"/>

</div>

<button id= "findMyWeather" class = "btn btn-success btn-lg "> Find my Weather</button>
<div class = "alert alert-success"></div>
<div class = "alert alert-danger">Check your City</div>
</form>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src= https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<script type="text/javascript">
	
 $("#findMyWeather").click(function(event) {
 	event.preventDefault();
 	$(".alert").hide();
 	if ($("#city").val() == "") {
 	$(".alert-success").html("You have not typed in any city").fadeIn();
 }
 else{
 $.get('scraper.php?city='+$("#city").val() , function(data) {
 	if (data == ''){
 	$(".alert-danger").fadeIn();
 } else {

 	$(".alert-success").html(data).fadeIn();}

 });

}
 	
 });
</script>
</body>
</html>

