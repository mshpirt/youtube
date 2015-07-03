<?php

// this is the youtubeSearchResult.php file

include 'include.php';

if (isset($_POST["youtubeData"])) 
	{
    // Decode JSON into PHP objects
    $youtubeIntoDB = json_decode($_POST["youtubeData"]);

    // an array to store titles
    $youtubeTitles = array();

    // loop through search results, push titles to array
    foreach ($youtubeIntoDB->items as $youtubeItems) 
    	{ 
        array_push($youtubeTitles, $youtubeItems->snippet->title);
    	}

    // loop through titles, insert each one into DB
    foreach ($youtubeTitles as $title)
    	{
    	echo "Titles uploaded: " . $title . "<br>";

   		// The actual insertion into MySQL Database
    	If ($stmt = $mysqli->prepare("INSERT INTO YoutubeTitle(title) VALUES (?)"))
    		{	
    		$stmt->bind_param("s", $title);
   			$stmt->execute();
    		}
    	$stmt->close();
		}

	$mysqli->close();
	}
else
	{
	echo "An error occurred. Please contact an Administrator.";
	}

?>