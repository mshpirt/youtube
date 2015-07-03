<!doctype html>
<!-- This fille will give you a search box and button, which will return 5 results for any youtube video search in the form of image links. -->
<html>
  <head>
    <title>Search Youtube</title>
  </head>
  <body>
    <div id="buttons">
      <label> <input id="query" value='dogs' type="text"/><button id="search-button" disabled onclick="search()">Search</button></label>
    </div>
    <div id="search-container">
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="YoutubeCustomSearch.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=onClientLoad"></script>
  </body>
</html>
