<?php include('client.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="icon" type="image/png" sizes="32x32" href="http://goranciganovic.com/images/favicon/favicon-32x32.ico">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <title>Area Circle</title>
  <style>
  @media (max-width: 680px){
	  #endpoint{
		  font-size:16px;
	  }
  }
  </style>
</head>
<body>

  <div class="container">
	<a href="http://goranciganovic.com/" class='btn btn-default btn-lg' role='button'>Back</a>
	<div class="jumbotron">
	<h3>Area Circle</h3>
	<h4>Endpoint: <span id="endpoint" class="text-primary h4">http://goranciganovic.com/AreaCircleWSDL</span></h4>
	<br>
      <form action="client.php" target="_blank" method="GET" id="form">
	<div class="row">
	<div class="col-lg-10">
        <h4>Get Area of a Circle <span class="h6">(method returns Area of the Circle based on provided Radius Value)</span></h4>
        <label class="h5">Radius:</label>
        <input class="btn-md" type="number" min="0"  step="0.01" id="areaCircleRadius" name="areaCircleRadius">
	<button type="submit" id="acr_submit" name="acr_submit">Enter</button>
	<div class="h5">(method: <span class="text-primary">getAreaCircleRadius</span>, parameter: <span class="text-info">radius</span>)</div>
	</div>
	<div class="col-lg-2">
	<img class="img-responsive img-thumbnail pull-left" src="http://goranciganovic.com/webservices/soap/area_circle/img/AreaCircleRadius.jpg" alt="AreaCircleRadius">
	</div>
	</div>
        <hr>
	<div class="row">
	<div class="col-lg-10">
        <h4>Get Area of a Circle <span class="h6">(method returns Area of the Circle based on provided Diameter Value)</span></h4>
        <label class="h5">Diameter:</label>
        <input class="btn-md" type="number" min="0"  step="0.01" id="areaCircleDiameter" name="areaCircleDiameter">
	<button type="submit" id="acd_submit" name="acd_submit">Enter</button>
	<div class="h5">(method: <span class="text-primary">getAreaCircleDiameter</span>, parameter: <span class="text-info">diameter</span>)</div>
	</div>
	<div class="col-lg-2">
	<img class="img-responsive img-thumbnail pull-left" src="http://goranciganovic.com/webservices/soap/area_circle/img/AreaCircleDiameter.jpg" alt="AreaCircleRadius">
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="col-lg-10">
        <h4>Get Radius <span class="h6">(method returns Radius based on provided Area of the Circle)</span></h4>
        <label class="h5">Area of a Circle:</label>
        <input class="btn-md" type="number" min="0"  step="0.01" id="radius" name="radius">
	<button type="submit" id="r_submit" name="r_submit">Enter</button>
	<div class="h5">(method: <span class="text-primary">getRadiusCircle</span>, parameter: <span class="text-info">area_of_Circle</span>)</div>
	</div>
	<div class="col-lg-2">
	<img class="img-responsive img-thumbnail pull-left" src="http://goranciganovic.com/webservices/soap/area_circle/img/RadiusCircle.jpg" alt="AreaCircleRadius">
	</div>
	</div>
	<hr>
	<div class="row">
	<div class="col-lg-10">
        <h4>Get Diameter <span class="h6">(method returns Diameter based on provided Area of the Circle)</span></h4>
        <label class="h5">Area of a Circle:</label>
        <input class="btn-md" type="number" min="0.00" step="0.01" id="diameter" name="diameter">
	<button type="submit" id="d_submit" name="d_submit">Enter</button>
	<div class="h5">(method: <span class="text-primary">getDiameterCircle</span>, parameter: <span class="text-info">area_of_Circle</span>)</div>
	</div>
	<div class="col-lg-2">
	<img class="img-responsive img-thumbnail pull-left" src="http://goranciganovic.com/webservices/soap/area_circle/img/DiameterCircle.jpg" alt="AreaCircleRadius">
	</div>
	</div>
      </form>
    </div>
  </div>

</body>
</html>