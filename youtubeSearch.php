<!-- this is the youtubeSearch.php file
This file will search youtube for cats and display 5 results in the form of titles, as well as uploading them to a MySQL database-->

<!DOCTYPE html>
<html>
    <head>
    	<title>Search Youtube</title>
    	<p id="dataIntoDB"></p>
    	<!-- div or id needs to go before calling the .js file -->
    	<script src="youtubeSearch.js" type="text/javascript"></script>
    	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
		<script src="https://apis.google.com/js/client.js?onload=onClientLoad" type="text/javascript"></script>

    </head>
</html>
