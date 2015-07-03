<?php

// this file takes stringified JSON from youtube, decodes it, and displays it as image links

if (isset($_POST["youtubeData"])) 
	{
    // Decode JSON into PHP objects
    $youtubeIntoDB = json_decode($_POST["youtubeData"]);

    // make an array to store the results we need
    $youtubeInfo = array();

    // make it an associate array so only one loop is needed later
    foreach ($youtubeIntoDB->items as $youtubeItems) 
        { 
        array_push($youtubeInfo, array($youtubeItems->id->videoId, $youtubeItems->snippet->thumbnails->medium->url));
        }

    // display results in the form of image links
    foreach ($youtubeInfo as $info)
    	{
        $link = "https://www.youtube.com/watch?v=" . $info[0];
        echo '<a href=' . $link . '><img src=' . $info[1] . '></a><br>';
        }
    }
   		
else
	{
	echo "An error occurred. Please contact an Administrator.";
	}

?>