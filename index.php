<!-- 
  Spell Check Starter
  This start code creates two arrays
  1: dictionary: an array containing all of the words from "dictionary.txt"
  2: aliceWords: an array containing all of the words from "AliceInWonderLand.txt"
 -->

<?php

function fileToArray($file) {
  // Read file as a string
  $fileRef = fopen($file, "r");
  $textData = fread($fileRef, filesize($file));
  fclose($fileRef);

  // Split text by one or more whitespace characters
  return preg_split('/\s+/', $textData);
}

// Load data files into arrays 
$dictionary = fileToArray("data-files/dictionary.txt");
$aliceWords = fileToArray("data-files/AliceInWonderLand.txt");

// Print first 50 values of each array to verify contents
echo "***DICTIONARY***<br>";
print_r(array_slice($dictionary, 0, 50));
echo "***ALICEWORDS***<br>";
print_r(array_slice($aliceWords, 0, 50));

?>

<!DOCTYPE html>
<html>

<head>
  <title>Spell Check</title>
</head>

<body>
  <h1>Spell Check</h1>
</body>

</html>