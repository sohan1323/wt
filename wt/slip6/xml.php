<?php
// Load the XML file into a SimpleXML object
$xml = simplexml_load_file('book.xml');

// Display attributes and elements
echo "Books Information:\n";
foreach ($xml->children() as $book) {
    echo "Category: " . $book['category'] . "\n";
    echo "Title: " . $book->title . "\n";
    echo "Author: " . $book->author . "\n";
    echo "Published: " . $book->published . "\n";
    echo "Publisher: " . $book->publisher . "\n\n";
}
?>
