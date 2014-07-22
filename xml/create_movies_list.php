<?php

//“$dom = new DOMDocument();” creates an instance of DOMDocument class.
$dom = new DOMDocument();

//“$dom->encoding = 'utf-8';” sets the document encoding to utf-8
//“$dom->xmlVersion = '1.0';” specifies the version number 1.0
//“$dom->formatOutput = true;” ensures that the output is well formatted
$dom->encoding = 'utf-8';
$dom->xmlVersion = '1.0';
$dom->formatOutput = true;

$xml_file_name = 'movies_list.xml';

//“$root = $dom->createElement('Movies');” creates the root node named Movies
//“$attr_movie_id = new DOMAttr('movie_id', '5467');” defines the movie id attribute of Movies node
/*“$child_node_element_name = $dom->createElement('ElementName', 'ElementValue')”
*  creates the child node of Movies node. ElementName specifies the name of the element e.g. Title.
*  ElementValue sets the child node value e.g. The Campaign. */
//"$movie_node->setAttributeNode($attr_movie_id);" set the movie id as an attribute of movie node.
$root = $dom->createElement('Movies');
$movie_node = $dom->createElement('movie');
$attr_movie_id = new DOMAttr('movie_id', '5467');
$movie_node->setAttributeNode($attr_movie_id);

$child_node_title = $dom->createElement('Title', 'The Campaign');
$movie_node->appendChild($child_node_title);
 
$child_node_year = $dom->createElement('Year', 2012); 
$movie_node->appendChild($child_node_year);
 
$child_node_genre = $dom->createElement('Genre', 'Comedy'); 
$movie_node->appendChild($child_node_genre);
 
$child_node_ratings = $dom->createElement('Ratings', 6.2); 
$movie_node->appendChild($child_node_ratings);

//“$root->appendChild($movie_node);” appends the movie_node elements to the root node Movies
$root->appendChild($movie_node);

//$dom->appendChild($root);” appends the root node to the XML document.
$dom->appendChild($root);

//“$dom->save($xml_file_name);” saves the XML file in the root directory of the web server.
$dom->save($xml_file_name);

//“echo '<a href= "'.$xml_file_name.'">' . $xml_file_name . '</a> 
// has been successfully created';” creates the link to the XML file.
echo '<a href= "'.$xml_file_name.'">' . $xml_file_name . '</a> has been successfully created';

?>