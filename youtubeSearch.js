// this is the youtubeSearch.js file

// load the youtube API
function onClientLoad()
	{
    gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
	}

// called when onClientLoad is called, sets API key and searches	
function onYouTubeApiLoad()
	{
    gapi.client.setApiKey('YOUR KEY HERE'); // add your own key here!
    search();
	}

// search youtube videos uploaded today for cats, returning 5 results
function search()
	{
    var request = gapi.client.youtube.search.list
    	({
    	part: 'snippet',
    		q: 'cats', 
    		maxResults: 5,
    		publishedAfter: '2015-06-26T00:00:00Z'
   		});

    request.execute(onSearchResponse);
	}

// Send response to youtubeSearchResult.php for processing into MySQL Database
function onSearchResponse(response) 
	{
	var dataIntoDB = JSON.stringify(response);

	// make AJAX call to PHP page that handles display and DB insertions
	$.ajax(
		{
 	  	url: 'youtubeSearchResult.php',
 	  	type: 'post',
 	  	data: {"youtubeData" : dataIntoDB},
 	  	success: function(data) 
  	 		{
  	 		// display results to screen
   			document.write(data);
    		}
		});
	}

