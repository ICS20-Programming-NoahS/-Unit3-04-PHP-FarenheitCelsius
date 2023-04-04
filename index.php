<!DOCTYPE html>
<!-- Unit3-04-PHP-FarenheitCelsius -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="fahrenheit celcius">
    <meta name="keywords" content="immaculata, ICS2O">
    <meta name="author" content="Noah Smith">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<!-- Favicon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  	<link rel="manifest" href="./fav_index/site.webmanifest">
  
  	<!--Link to CSS file-->
  	<link rel="stylesheet" href="./css/style.css">
  
  	<!-- Google's MDL -->
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-red.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
  
  	<title>Fahrenheit to Celsius, using PHP</title>
  </head>  
  <body>
    <!--header-->
  	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  		<header class="mdl-layout__header">
  			<div class="mdl-layout__header-row">
  				<span class="mdl-layout-title">Fahrenheit to Celsius, using PHP</span>
  			</div>
  		</header>
  	</div>
  	<main class="mdl-layout__content">
  		<br>
  		<h4>Formula:</h4>
  		<img src="./images/temp.PNG" alt="sphere formula">
      <br>
      <br>
      
       <!-- form to get the temperture in fahrenheit from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="f-temp">Fahrenheit:</label>
      <input type="text" id="f-temp" placeholder="Fahrenheit..." name="f-temp">
      <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit"
          name="submit"
        >
          Calculate
        </button>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The temperature in Celsius is" + $celsius + C°.
	    </iframe>
  		</form>
    </main>
  </body>
</html>