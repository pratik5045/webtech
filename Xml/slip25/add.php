<?php
$xml=simplexml_load_file("team.xml");
$team=$xml->addChild("Team");
$team->addAttribute('country','india');
$team->addchild('player','virat');
$team->addchild('run',100);
$team->addchild('wicket',0);
$team->addchild('player','rohit');
$team->addchild('run',100);
$team->addchild('wicket',2);
$xml->asXML("team.xml");
echo("update successful");
?>

