<html>
<head>
<title>Google Feed Loader Example #1</title> 

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://www.jugbit.com/jquery/jquery.vticker-min.js"></script>
<script type="text/javascript">
    google.load("feeds", "1");

    // Our callback function, for when a feed is loaded.
function feedLoaded(result) {
    if (!result.error) {
        // Grab the container we will put the results into
    var container = document.getElementById("feed");
    container.innerHTML = '';
            //create a list container for vTicker
    var list = document.createElement("ul");
    container.appendChild(list);
    // Loop through the feeds, putting the titles onto the page.
    // Check out the result object for a list of properties returned in each entry.
    // http://code.google.com/apis/ajaxfeeds/documentation/reference.html#JSON
    for (var i = 0; i < result.feed.entries.length; i++) {
      var entry = result.feed.entries[i];
              //new list item
      var listItem = document.createElement("li");
      var div1 = document.createElement("div");
      div1.setAttribute("id", "title");
      div1.innerHTML = '<h3><a href="' + entry.link + '">' + entry.title + '</a></h3>';
      //div1.appendChild(document.createTextNode(entry.feedUrl));

      var div2 = document.createElement("div");
      div2.setAttribute("id", "description");
      div2.appendChild(document.createTextNode(entry.content));

      var div3 = document.createElement("div");
      div3.appendChild(document.createTextNode(entry.publishedDate));
      div3.setAttribute("id", "date");
              //add all child divs to list item
      listItem.appendChild(div1);
      listItem.appendChild(div2);
      listItem.appendChild(div3);
              //add list item to the list container
      list.appendChild(listItem);
      /*var li = document.createElement("li");
      li.innerHTML = '<h3><a href="' + entry.link + '">' + entry.title + '</a></h3>';
      li.innerHTML += '<p>' + entry.contentSnippet + '</p>';
      container.appendChild(li);*/
    }
            //add the list container to the containing div
    container.appendChild(list);
    $(container).vTicker({ 
        speed: 1000,
        pause: 0,
        animation: 'fade',
        mousePause: false,
        showItems: 5
    });
  }
}

function OnLoad() {
  // Create a feed instance that will grab Digg's feed.
  var feed = new google.feeds.Feed("http://nyhederne.tv2.dk/rss");
  feed.setNumEntries(15);
  feed.includeHistoricalEntries();
  // Calling load sends the request off.  It requires a callback function.
  feed.load(feedLoaded);
}

    google.setOnLoadCallback(OnLoad);
</script>

<style>
h1 {
background-color:   #356AA0;
}

a {
color:              #FEC659;
}

a:link {
text-decoration:    none;
}

a:visited {
text-decoration:    none;
}

a:hover {
text-decoration:    underline;
}

a:active {
text-decoration:    underline;
}

div {line-height: 1;}
/*h1, p {margin: 0;}    */

div#feed {
width:              330;
height:             150;
overflow-y:         auto;
background-color:   #F8F8F8; /* background-color when image is not shown */
border-top:         1px solid #C0C0C0;
border-bottom:      1px solid #C0C0C0; /* set grey border bottom */
border-left:        1px solid #C0C0C0; /* set grey border left */
border-right:       1px solid #C0C0C0; /* set grey border right */
}

div#title {
/*padding:          5px;*/
background-color:   #FFFFFF;
font-size:          14px; /* sets the font size of the title to 18px*/
font-weight:        bold; /* and bold of course */
color:              #FEC659;
text-decoration:    none;
}

div#description {
color:              #356AA0;
background-color:   #FFFFFF;
padding-bottom:     5px;
}

div#date {
background-color:   #FFFFFF;
color:              #000000;
border-bottom:      1px dotted #C0C0C0;
padding-bottom:     5px;
}

div#header {
width:              330;
background-color:   #356AA0;
font-size:          18px; /* sets the font size of the title to 18px*/
font-weight:        bold; /* and bold of course */
color:              #FFFFFF;
text-decoration:    none;
}

</style>

</head>
<body>
<div id="header">RSS Feed </div>
<div id="feed"></div>
</body>
</html>