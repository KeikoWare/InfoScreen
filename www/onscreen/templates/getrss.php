<?php
//get the q parameter from URL
$q=$_GET["q"];
if($q == '') $q = 'http://nyhederne.tv2.dk/rss.xml';
//find out which feed was selected

$z = new XMLReader;
$z->open("$q");

$doc = new DOMDocument;

// move to the first <product /> node
while ($z->read() && $z->name !== 'item');

// now that we're at the right depth, hop to the next <product/> until the end of the tree
while ($z->name === 'item')
{
    // either one should work
    //$node = new SimpleXMLElement($z->readOuterXML());
    $node = simplexml_import_dom($doc->importNode($z->expand(), true));

    // now you can use $node without going insane about parsing
    //var_dump($node->title);

	echo ("<li style='font-size: 24px; padding: 10px; overflow: hidden; width: 700px;'>" . substr($node->title,0,70) . (strlen($node->title)>70 ? "...":"") ."</li>");
    // go to next <product />
    $z->next('item');
}

/*
$xml=("$q");
  
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
//echo '<ul id="scroller">';
//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=15; $i++)
  {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;

  echo ("<li style='padding: 10px;'>" . str_replace(' ','&nbsp;',$item_title) . "</li>");
  }
  
//  echo "</ul>";
*/
?> 