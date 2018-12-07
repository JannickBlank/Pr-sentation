<?php
echo $_POST["Name"];
echo $_POST["Kommentar"];

$seperator = ',';
$lineending = "\r\n";
$name = str_replace(',', '||', $_POST["Name"]);
$comment = str_replace(',', '||', $_POST["Kommentar"]);
$comment1 = str_replace("\r\n", '#@#',$comment);

$line = $name . $seperator . $comment1 . $lineending;

$oldEntries = file_get_contents('Davinci.txt');
$newEntries = $line . $oldEntries;

file_put_contents('Davinci.txt', $newEntries);

$entries = array();
$entries[] = array(
	'from' => $_POST["Name"],
	'message' => $_POST["Kommentar"]
);

include ("Gaestebuch.php");