<?php
// Load the existing XML file or create a new one if it doesn't exist
$xmlFile = 'cricket.xml';
if (file_exists($xmlFile)) {
    $cricketXML = simplexml_load_file($xmlFile);
} else {
    $cricketXML = new SimpleXMLElement('<CricketTeam></CricketTeam>');
}

// Add multiple elements with category country="India"
$teams = $cricketXML->xpath('//Team[@country="India"]');
if (empty($teams)) {
    // If no team with country="India" exists, create one
    $indiaTeam = $cricketXML->addChild('Team');
    $indiaTeam->addAttribute('country', 'India');
    $players = [
        ["Sachin Tendulkar", 18426, 46],
        ["Virat Kohli", 12169, 8],
        ["Rohit Sharma", 9205, 8]
    ];
    foreach ($players as $player) {
        $playerElement = $indiaTeam->addChild('player', $player[0]);
        $playerElement->addChild('runs', $player[1]);
        $playerElement->addChild('wicket', $player[2]);
    }
} else {
    // If team with country="India" already exists, add more players
    $indiaTeam = $teams[0];
    $players = [
        ["MS Dhoni", 10773, 0],
        ["Ravindra Jadeja", 2412, 192]
    ];
    foreach ($players as $player) {
        $playerElement = $indiaTeam->addChild('player', $player[0]);
        $playerElement->addChild('runs', $player[1]);
        $playerElement->addChild('wicket', $player[2]);
    }
}

// Save the modified XML back to the file
$cricketXML->asXML($xmlFile);

echo "Elements added successfully to cricket.xml";
?>
