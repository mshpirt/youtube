// this file handles all the API requests and sends the results to another page for display

// load the youtube API
function onClientLoad()
	{
	// when youtube API is loaded, allow the search button to work
	$('#search-button').attr('disabled', false);
    gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
	}

// called when onClientLoad is called, sets API key and searches	
function onYouTubeApiLoad()
	{
    gapi.client.setApiKey('YOUR KEY HERE'); // add your own key here!
	}

// search youtube videos based on user-defined query, returning 5 results and excluding videos in playlists or channels
function search()
	{
  	var q = $('#query').val();
  	var request = gapi.client.youtube.search.list({
    	q: q,
    	part: 'snippet',
      type: 'video',
  		});

    request.execute(onSearchResponse);
	}

// Send response to JStoPHP3result.php for processing into MySQL Database
function onSearchResponse(response) 
	{
	var dataIntoDB = JSON.stringify(response);

	// make AJAX call to PHP page that handles display
	$.ajax(
		{
		url: 'YoutubeCustomSearchResult.php',
 	  	type: 'post',
 	  	data: {"youtubeData" : dataIntoDB},
 	  	success: function(data) 
  	 		{
			// display results to screen under the search box
			$('#search-container').html('<pre>' + data + '</pre>');
    		}
		});
	}