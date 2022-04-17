<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="title.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style >
    .navbar {
      margin: 0px;
      border-radius: 0;
      background-color: #4d4d4d;
    }
     .jumbotron {
      margin-bottom: 0;
    	background-color: black;
    	padding: 0;

    }
    footer {
      background-color: black;
      padding: 25px;
    }

    #home {
color: white ; 
font-size:36px;
font-family:"Comic Sans MS", cursive, sans-serif;
margin: 5px 5px;
}
#textbox{

	padding: 50px 200px 10px 200px;
	text-align: left;


}

.bottom-left {
    position: absolute;
    bottom: 50px;
    left: 40%;
	color: black;
	font-family :cursive;
	font-size: 250px;
}
  </style>


</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1 id="home"><img src="home1.jpg" width="200" height="80">IMMUNIZATION RECORDS</h1>      
  </div>
</div>

<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">HOME</a></li>
        <li><a href="admin.php">ADMIN LOGIN</a></li>
        
        <li><a href="student.php">STUDENT LOGIN</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="home2.jpg" alt="no1" style="width:100%; height: 300px;">
        <div class="bottom-left"style="font-size: 15px"><b>Total confirmed cases of COVID-19 per million people</b></div>
      </div>

      <div class="item">
        <img src="home3.jpg" alt="no1" alt="no2" style="width:100%; height: 300px;">
        <div class="bottom-left"style="font-size: 15px"><b>Total confirmed deaths due to COVID-19 per million people</b></div>
      </div>
    
      <div class="item">
        <img src="home4.jpg" alt="no3" style="width:100%; height: 300px;">
        <div class="bottom-left" style="font-size: 15px"><b>Population fully vaccinated relative to a country's total population</b></div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div id="textbox" class="container-fluid" align:justify>
	<p>COVID‑19 vaccine is a vaccine intended to provide acquired immunity against severe acute respiratory syndrome coronavirus 2 (SARS‑CoV‑2), the virus that causes coronavirus disease 2019 (COVID‑19). Before the COVID‑19 pandemic, an established body of knowledge existed about the structure and function of coronaviruses causing diseases like severe acute respiratory syndrome (SARS) and the Middle East respiratory syndrome (MERS). This knowledge accelerated the development of various vaccine platforms during early 2020. The initial focus of SARS-CoV-2 vaccines was on preventing symptomatic, often severe illness. On 10 January 2020, the SARS-CoV-2 genetic sequence data was shared through GISAID, and by 19 March, the global pharmaceutical industry announced a major commitment to addressing COVID‑19. The COVID‑19 vaccines are widely credited for their role in reducing the severity and death caused by COVID‑19.

Many countries have implemented phased distribution plans that prioritize those at the highest risk of complications, such as the elderly, and those at high risk of exposure and transmission, such as healthcare workers.

As of 4 December 2021, 8.14 billion doses of COVID‑19 vaccines have been administered worldwide based on official reports from national public health agencies. By December 2020, more than 10 billion vaccine doses had been preordered by countries,[164] with about half of the doses purchased by high-income countries comprising 14% of the world's population.


</p>
</div>

<footer class="container-fluid text-center">
<p>@covid vaccination records</p>
</footer>
</body>

</html>