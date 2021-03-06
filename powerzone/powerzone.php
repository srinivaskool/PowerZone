<!DOCTYPE html>
<html lang="en">
<head>
  <title>Powerzone</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="Logo Powerzone Favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto|Anton|Oswald|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
<style>

.grandhtext {
  background-color: white;
  color: black;
  font-size: 7vw; 
  font-weight: bold;
  margin: 0 auto;
  padding: 10px;
  width: 60%;
  text-align: center;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  mix-blend-mode: screen;
}


  @media only screen and (max-width: 480px) {
       h1 { font-size: 20px !important; }
       h2 { font-size: 22px !important; }
       h3 { font-size: 18px !important; }
       h5 { font-size: 16px !important; }
       h6 { font-size: 8px  !important; }
       h8 { font-size: 12px !important; }
       p  { font-size: 18px !important; }
     }
a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

a:active {
    text-decoration: none;
}
  body, html {
    height: 100%;
    margin: 0;
}

  .bg {
    /* The image used */
    background-image: url("ezgif.com-gif-maker.gif");
	filter: opacity(95%);
    /* Full height */
    height: 100%; 
  
    /* Center and scale the image nicely */
    background-repeat: no-repeat;
    background-size: cover;
  }
  .headline {
    font-family: Calibri, "Helvetica", san-serif;
    line-height: 1.5em;
    color: black;
    font-size: 30px;
    position: relative;
  
}
.headline:after {
    content:' ';
    position: absolute;
    display:block;
    width: 100px;
    margin: 0 2%;
    border:2px solid orange;
    border-radius:4px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
  left: 48%;
  transform: translateX(-50%);
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  bottom:40%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  background-color: rgba(0, 0, 0, 0.8);
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: black;
}

.container123 .title{
  color: #1a1a1a;
  text-align: center;
  margin-bottom: 10px;
}

.content123 {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
}

.content123 .content123-overlay {
  background: rgba(0,0,0,0.7);
  position: absolute;
  height: 99%;
  width: 100%;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

.content123:hover .content123-overlay{
  opacity: 1;
}

.content123-image{
  width: 100%;
}

.content123-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.content123:hover .content123-details{
  top: 50%;
  left: 50%;
  opacity: 1;
}

.content123-details h3{
  color: #fff;
  font-weight: 500;
  letter-spacing: 0.15em;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.content123-details p{
  color: #fff;
  font-size: 0.8em;
}

.fadeIn-top{
  top: 20%;
}

.fadeIn-left{
  left: 20%;
}
 .container123{
  padding: 1em 0;
  float: left;
  width: 50%;
}

@media screen and (max-width: 640px){
  .container123{
    display: block;
    width: 50%;

  }
}

@media screen and (min-width: 900px){
  .container123{
    width: 25%;
  }
}


h1,h2 {
  font-weight: 200;
  margin: 0.4em 0;
}
h1 { font-size: 3.5em; }
h2 {
  color: #888;
  font-size: 2em;
}
.hidden {
  opacity:0;
}

.fa {
  padding: 15px;
  font-size: 24px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa-facebook:hover {
    background-color:grey;
}

.fa-twitter:hover {
    background-color:grey;
}

.fa-linkedin:hover {
    background-color:grey;
}

.fa-youtube:hover {
    background-color:grey;
}

.fa-instagram:hover {
    background-color:grey;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.fa-phone:hover {
    color:blue;
}
.fa-map-marker:hover{
    color:yellow;
}
.material-icons:hover{
    color:red;
}
 .div123 {
  background: #f1f1f1;
  font-family: 'Merriweather', sans-serif;
  padding: 1em;
}

form {
  max-width: 600px;
  text-align: center;
  margin: 20px auto;
}
form input, form textarea {
  border: 0;
  outline: 0;
  padding: 1em;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  border-radius: 8px;
  display: block;
  width: 100%;
  margin-top: 1em;
  font-family: 'Merriweather', sans-serif;
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  resize: none;
}
form input:focus, form textarea:focus {
  -moz-box-shadow: 0 0px 2px #e74c3c !important;
  -webkit-box-shadow: 0 0px 2px #e74c3c !important;
  box-shadow: 0 0px 2px #e74c3c !important;
}
form #input-submit {
  color: white;
  background: #e74c3c;
  cursor: pointer;
}
form #input-submit:hover {
  -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
  box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
}
form textarea {
  height: 200px;
}

.half {
  float: left;
  width: 48%;
  margin-bottom: 1em;
}

.right {
  width: 50%;
}

.left {
  margin-right: 2%;
}

@media (max-width: 480px) {
  .half {
    width: 100%;
    float: none;
    margin-bottom: 0;
  }
}
.wrap {
  height: 100%;
  position: relative;
  overflow: hidden;
}
.wrap .bg123{
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  background: url("colortheory.jpg") no-repeat center center;
  background-size: cover;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}
.item {
  position: absolute;
  margin: 0%;
  overflow: hidden;
  width: 90%;
}
.item mg {
  max-width: 100%;
  -moz-transition: all 2s;
  -webkit-transition: all 2s;
  transition: all 2s ease-in;
}
.item:hover img {
  -moz-transform: scale(1.09);
  -webkit-transform: scale(1.09);
  transform: scale(1.09);
}
  .bg-success123
 {
 background-color: #f4f0e6;
 } 
   .bg-info123123123123
 {
 background-color: #524d5b;
 } 
  .bg-danger123
 {
 background-color:  #524d5b;
 } 
   .bg-secondary123
 {
 background-color:  #f4f0e6;
 } 
  .bg-srini1234
 {
 background-color:  #524d5b;
 } 
   .bg-srini123
 {
 background-color:  #f4f0e6;
 } 



.row img{width:100%;height:50%}
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.item {
  position: relative;
  margin: 0%;
  overflow: hidden;
  width: 100%;
}
.item 
mg {
  max-width: 100%;
  
  -moz-transition: all 1s;
  -webkit-transition: all 1s;
  transition: all 1s ease-in;
}
.item:hover img {
  -moz-transform: scale(1.05);
  -webkit-transform: scale(1.05);
  transform: scale(1.05);
}

.vl {
    border-left: 3px solid grey;
    height: 200px;
    position: absolute;
    left: 0%;
    margin-left: -3px;
    top: 0;
}

.divtext{
   padding:50px;
   color:blue;
}

 @media only screen and (max-width: 480px) {
.divtext{
   padding:50px;
   color:blue;
}
 }
 
 
 .missionstyles{
   margin:8%;
}

 @media only screen and (max-width: 480px) {
.missionstyles{
margin:3%;
}
 }

.card_contact {
  float : left;
  width:30%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-left:10%;
  margin-right:10%;
  background-color:#ffffff;
}

.title {
  color: grey;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {

.card_contact {
  float : left;
  width:50%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
}
  
}



  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav style="padding:0px;width:100%;" class="navbar navbar-expand-sm bg-light navbar-dark fixed-top"> 
  <a href="powerzone.php"><img style="width:140px;height:50px;margin-left:5%;" src="Logo Powerzone Full.png"></a>
  <button  class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="collapsibleNavbar">
  
  <ul style="padding-right:75px;" class="navbar-nav ml-auto">
    <li class="nav-item">
      <a style="color:black;" class="nav-link" href="#about">&nbsp;ABOUT US&nbsp;</a>
    </li>
	<li class="nav-item">
      <a style="color:black;" class="nav-link" href="#benefits">WHY POWERZONE</a>
    </li>
    <li class="nav-item">
      <a style="color:black;" class="nav-link" href="#products">&nbsp;PRODUCTS&nbsp;</a>
    </li>
	 <li class="nav-item">
      <a style="color:black;" class="nav-link" href="#services">&nbsp;SERVICES&nbsp;</a>
    </li>
    <li class="nav-item">
      <a style="color:black;" class="nav-link" href="#Clientele">&nbsp;CLIENTELE&nbsp;</a>
    </li>
	<li class="nav-item">
      <a style="color:black;" class="nav-link" href="#contact">&nbsp;CONTACT US&nbsp;</a>
    </li>
  </ul>
    </div>  
</nav>
<div class="bg">
     
     <div class="divtext">
	  <center><br><br>
	 <h3 style="font-family: 'Oswald', serif;color:white;"> TO SAVE MONEY AND POWER WITH HIGHLY INTELLIGENT MICROPROCESSOR APFC</h3>
	 <br><br>
	 <h3 style="font-family: 'Oswald', serif;color:white;">BEST RESULT | DURABILITY | MAINTAINENCE FREE APFC | STURDY | SAVE POWER | LEAD THE CHANGE</h3>
	 </center>
     </div>
      <div class="grandhtext">POWERZONE</div>
</div>

<div id="about" class="container-fluid bg-success123" style="padding-top:60px;padding-bottom:50px">
	    <center><h4 class="headline">About Us</h4></center><br>
  <div class="container-fluid">    
    <div class="row">
      <div class="col-sm-7 bg-success123">
       <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Powerzone&nbsp;</b>a Proprietary organization was established in the year 2000 by
Mr. Subhash Bhat, having vast experience in marketing and technical knowledge in
Automatic Power Factor Correction Systems (APFCs). POWERZONE started
trading in Capacitor Panels.<br><br>
In 2004, <b>???POWERZONE SYSTEMS (INDIA) PVT. LTD.???</b> was formed because of
the immense amount of good response from the customers with timely supply and
service back up to manufacture Capacitor Panels.<br><br>The company is backed by brilliant and insightful R&D
department having vast experience and expertise in the APFC technology.
From every component to the final product, the company takes effective steps in
quality for ensuring world class workmanship</h5>
		<center style="color:orange;"><h4><b>"Going ahead, we are pursuing..."</b></h4></center>
      </div>
	  <div class="col-sm-5 bg-success123">
      <div id="demo123" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo123" data-slide-to="0" class="active"></li>
    <li data-target="#demo123" data-slide-to="1"></li>
    <li data-target="#demo123" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width:100%;height:300px;" src="logo powerzone.svg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div id="video_here" class="carousel-item">
      <img style="width:100%;height:300px;" src="open panel1.png" alt="Chicago" width="1100" height="500">
    </div>
    <div id="video_here" class="carousel-item">
      <img style="width:100%;height:300px;" src="cont wiring.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  <a1 class="carousel-control-prev prev" href="#demo123" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a1>
  <a1 class="carousel-control-next next" href="#demo123" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a1>
     </div>
      </div>
    </div>
  </div>
</div>

<div id="mission" class="container-fluid bg-info123123123123" style="padding-top:70px;padding-bottom:70px;color:white;">
  <center><h3 style="color:white;" class="headline">Our Mission</h3></center>
<div class="container-fluid">    
    <div class="row">
     <div class="col-sm-2 bg-info123123123123">
	  </div>
      <div class="col-sm-8 bg-info123123123123">
	  <br><h5>To save Power with highly intelligent microprocessor thyristor switching to control
the connection and disconnection of capacitor steps in milliseconds to achieve
required target Power Factor.Powerzone the only name in Capacitors Panels for the best result, durability,
sturdy and maintenance free APFC</h5>
	  </div>
	 
	  
	  <div class="col-sm-2 bg-info123123123123"></div>
          </div>
   </div>   
</div>


<div id="benefits" class="container-fluid bg-success123" style="padding-top:70px;padding-bottom:70px;">
  <center><h4 class="headline">Why <b>POWERZONE</b></h4></center><br>
  <div class="container-fluid">    
    <div class="row">
     <div class="col-sm-2 bg-success123">
	  </div>
      <div class="col-sm-6 bg-success123">
        <h5><br>
		  <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Participating in on-site Power Quality Analysis<br><br>
		  <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Guaranteed Power Factor (PF) improvement up to unity<br><br>
          <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Reduction in maximum demand<br><br>
          <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Installation, commissioning & utilization of the plant equipment<br><br>
		  <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Providing system design as per customer requirements
		</h5>
      </div>
	  <div class="col-sm-2 bg-success123">
	      <img style="width:100%;height:270px;" src="40 kvar (Thyristor switching).png">
	  </div>
	   <div class="col-sm-2 bg-success123">
	  </div>
	</div>
  </div>
</div>


  <div id="products" style="padding-top:70px;padding-bottom:70px;color:black;" class="container-fluid bg-danger123">
	<h3 style="color:white;" class="headline"><center>Our Products</center></h3><br>
  <div class="card-deck">
    <div class="card bg-light">
    <div class="card-body text-center">
      <div class="item">
  <img style="height:300px;width:90%;" src="400 kvar (Thyristor switching).png" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div><br><br>
   <h5> 400 kVar (Thyristor switching) </h5>
      </div>
      </div>
 <div class="card bg-light">
 <div class="card-body text-center">
     <div class="item">
  <img style="height:300px;width:90%;" src="800 kvar (Thyristor switching).png" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div>
<br><br>
    <h5>800 kvar (Thyristor switching)</h5>
      </div>
      </div>
 <div class="card bg-light">
 <div class="card-body text-center">
      <div class="item">
  <img style="height:300px;width:90%;" src="100 kvar (Thyristor switching).png" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div>
<br><br>
    <h5>100 kvar (Thyristor switching)</h5>
      </div>
	</div>  
	  
 <div class="card bg-light">
 <div class="card-body text-center">
      <div class="item">
  <img style="height:300px;width:90%;" src="Controller.jpg" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div>
<br><br>
    <h5><center>Controller</center></h5>
      </div>
      
    </div>
	</div>
    <br><br>
    <div class="card-deck">
    <div class="card bg-light">
    <div class="card-body text-center">
      <div class="item">
  <img style="height:300px;width:90%;" src="400 kvar (Thyristor switching closed look).png" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div><br><br>
    <h5>400 kvar (Thyristor switching closed look)</h5>
      </div>
      </div>
 <div class="card bg-light">
 <div class="card-body text-center">
     <div class="item">
  <img style="height:300px;width:90%;" src="180 kvar (Contactor switching).png" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div>
<br><br>
    <h5>180 kvar (Contactor switching)</h5>
      </div>
      </div>
 <div class="card bg-light">
 <div class="card-body text-center">
      <div class="item">
  <img style="height:300px;width:90%;" src="Reactors for Harmonics.jpg" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div>
<br><br>
    <h5>Reactors for Harmonics</h5>
      </div>
</div> 
	  
 <div class="card bg-light">
 <div class="card-body text-center">
      <div class="item">
  <img style="height:300px;width:90%;" src="Controller Back Side.png" alt="powerzone" width="100%" height="300px">
  <div class="item-overlay top"></div>
</div>
<br><br>
    <h5>Controller Back Side</h5>
      </div>
      
    </div>
</div><br><br>
<center><a href="Powerzone Brochures.rar" target="_blank"><button class="btn btn-primary">Download Our Brochure Of All Products</button></a></center>
</div>

<div id="services" class="container-fluid bg-success123" style="padding-top:70px;padding-bottom:70px">
  <center><h4 class="headline">Our Services</h4></center><br>
  <div class="container">    
    <div class="row">
      <div class="col-sm-9 bg-success123"><br>
      <h5>
       <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Annual Maintenance Contract(AMC) of all types of Electronic Panels<br><br>
       <img style="width:16px;height:16px;align:center;" src="bullet.png">&nbsp;&nbsp;Power Quality Audit (PQA) / Electrical Audit<br><br>
      </h5>
      </div>
	  <div class="col-sm-3 bg-success123">
	      <img style="width:40%;height:100px;margin-left:30%;" src="Clipart for Services.png">
	  </div>
	</div>
  </div>
</div>

  
  <div id="Clientele" style="padding-top:70px;padding-bottom:70px" class="container-fluid bg-info123123123123">
  <h3 style="color:white;" class="headline"><center>Our Clientele</center></h3><br>
  
  <div id="demo5" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="container">
    <div style="padding-right:10px;padding-left:10px;" class="card bg-light"> <br>
    <div class="row">
<img style="width:20%;height:100px;margin-left:4%;" src="DHL Logistics Pvt. Ltd.png">
<img style="width:20%;height:100px;margin-left:4%;" src="ICICI Lombard GIC Ltd.png">
<img style="width:20%;margin-left:4%;height:100px;" src="IDFC Bank Ltd.png">
<img style="width:20%;margin-left:4%;height:100px;" src="Reliance Industries Ltd.png"><br>
      </div><br>
    </div>
  </div>
    </div>
    <div class="carousel-item">
   <div class="container">
    <div style="padding-right:10px;padding-left:10px;" class="card bg-light"> <br>
    <div class="row">
<img style="width:20%;height:100px;margin-left:4%;" src="Aditya Birla Retail.png">
<img style="width:20%;height:100px;margin-left:4%;" src="General Mills India Pvt. Ltd.png">
<img style="width:20%;height:100px;margin-left:4%;" src="Hiranandani.png">
<img style="width:20%;height:100px;margin-left:4%;" src="Yashwantrao Chavan Pratishthan.png"><br>
      </div><br>
    </div>
  </div>
    </div>
  </div>
</div>
	<br>
	
	
  </div>
	
	
	

<div id="team" class="container-fluid bg-success123" style="padding-top:45px;padding-bottom:45px">
<h4 class="headline" style="text-align:center;color:black;">Our Team</h4><br>

<div class="card_contact">
  <b><h2>Subhash Bhat</h2></b>
  <p class="title">Managing Director</p>
  <h6>+91-9820500434</h6>
  <h6>Subhash.Bhat@powerzonesystems.com</h6>
</div>

<div class="card_contact">
  <b><h2>Atit Bhat</h2></b>
  <p class="title">Associate Director</p>
      <h6>+91-9823402122</h6>
  <h6>Atit.Bhat@powerzonesystems.com</h6>
</div>
<br><br><br><br><br><br><br><br>
</div>


<div id="contact" class="container-fluid bg-srini1234" style="padding-top:30px;padding-bottom:30px">
<div class="div123">
<center><h2 class="headline">Lets Get In <b>Touch</b></h2></center><br>
  <div class="container-fluid">    
    <div class="row">
      <div class="col-sm-6">
        <br><h5>For <b>free evaluation</b> of your savings in monthly electricity bill,  send your latest electricity bill at <b>info@powerzonesystems.com</b></h5>
	  <div style="width:100%;">
	  <div style="width:10%;margin-left:5%;float:left;">
	  <i class="fa fa-phone" style="font-size:36px"></i> 
	  <br><br>
	  &nbsp;&nbsp;&nbsp;<i class="material-icons" style="font-size:36px;">email</i>
	  <br><br>
	  <i class="fa fa-map-marker" style="font-size:36px" aria-hidden="true"></i> 
	  </div>
	   <div style="width:75%;margin-left:10%;float:left;">
	  <br>+91- 9823402122<br>+91 - 9820500434
	  <br><br>
	  <h8>info@powerzonesystems.com<br>
          services@powerzonesystems.com</h8>
        <br> <br> 
		<b>Corporate Office :</b><br>
A-4, Deepali Apartments,
<br>Mahatma Nagar, Nashik : 422 007.
		<br>
	  </div>
	  </div>
      </div>
	  <div class="col-sm-6">
	     <form id="form1" method="" action="" novalidate="novalidate" class="cf">
  <div class="half left cf">
    <input id="name" name="name"  placeholder="Name*">
    <input id="email" name="email" " placeholder="Email id*">
    <input id="phone_number" name="phone_number" placeholder="Phone Number*">
  </div>
  <div class="half right cf">
    <textarea id="query" name="query" type="text" placeholder="Type Your Query Here*"></textarea>
  </div>  
  <button class="btn btn-primary" type="button" name="insert-data2" id="insert-data2" onclick="insertData2()">Submit Your Query</button><br><br>
   <h7 style="text-allign:center" id="message2"></h7>
</form>
	  </div>
	</div>
  </div>
</div>
</div>




<div id="footer" class="container-fluid bg-success123" style="padding-top:35px;padding-bottom:35px">
<div class="container">    
    <div class="row">
	<div class="col-sm-1"><br>
	<a href="#products">Products</a><br><br>
	<a href="#services">Services</a><br><br>
	<a href="#Clientele">Clientele</a>
	  </div>
	  <div class="col-sm-1">
	  </div>
	  <div class="col-sm-2">
	  <img style="height:80%;width:100%;margin-top:10%;" src="Logo Powerzone Full.png">
	  </div>
      <div class="col-sm-4">
                <div style="color: #E31E24;text-shadow: 0px 2px 1px #444443;font-size: 45px;font-weight: bold;text-transform: uppercase;">PowerZone</div>
				<div style="font-weight: bold;text-transform: uppercase;display: inline-block;text-shadow: 0px 1px 1px #444443;">
				???Powerzone??? the only name in Capacitors Panels for durability,
sturdy and maintenance free APFC.</div>
	  </div>
	    <div class="col-sm-1">
	  </div>
      <div class="col-sm-3"><br>
	  <h3>Follow Us On :-</h3>
<a href="https://www.facebook.com/PowerzoneSystems/" class="fa fa-facebook"></a>
<a href="https://www.linkedin.com/company/powerzone-systems/" class="fa fa-linkedin"></a>

      </div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
</script>

  <script>
           $('.navbar-nav>li>a').on('click', function(){
           $('.navbar-collapse').collapse('hide');
           });
  </script> 
     
     
     
        <script type="text/javascript">
  function insertData2() {
        var name=$("#name").val();
	var email =$("#email").val();
	var phone_number=$("#phone_number").val();
	var query=$("#query").val();
	
        $.ajax({
            type: "POST",
            url: "insert-data2.php",
            data: {
			
        name:name,
        email:email,
	phone_number:phone_number,
	query:query
			
			},
            dataType: "JSON",
            success: function(data) {
             $("#message2").html(data);
            $("h7").addClass("alert alert-success");
            },
            error: function(err) {
            alert("All Required Fields Are Not Entered");
            }
        });
        
        $('#form1 #name').val('');
        $('#form1 #email').val('');
        $('#form1 #phone_number').val('');
        $('#form1 #query').val('');

}
  </script>
  
  
  
  
</body>
</html>
