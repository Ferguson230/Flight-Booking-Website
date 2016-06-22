<style>
h1 {
    text-align: center;
    color: white;
    padding-bottom: 5px;
    font-family: Verdana, sans-serif !important;
    line-height: 50px;
}

a { 
    text-decoration: none;
}

button {
    padding: 3% 9% !important;
}

.wrapper {
    text-align: center;
    margin-top: 11%;
    margin-left: 2%;
}
</style>

<head>
	<link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" type="text/css" href="background.css">
    <link rel="stylesheet" type="text/css" href="hover-min.css">
    <title>Flight Tracker</title>
</head>
<body>
<!--  content class from background.css -->
<div class="content">
<h1><b><a href="index.php" class="hvr-underline-from-left">Flight Tracker</a></b></h1>
<!-- wrapper class centers buttons on page -->
<div class="wrapper">
<button onclick="location.href = 'http://lyndoncis.com/CIS3120SP16/tdl01030/Project/flight_table.php';" id="bookAFlight">Book a Flight</button>
<button onclick="location.href = 'http://lyndoncis.com/CIS3120SP16/tdl01030/Project/cancel.php';" id="cancelFlight"> View/Cancel Flights</button>
<button onclick="location.href = 'http://lyndoncis.com/CIS3120SP16/tdl01030/Project/account.php';" id="signIn">Sign In/ Create Account</button>
<!-- end wrapper div -->
</div>
<footer><?php include 'footer.php'?></footer>
</div>
</body>

