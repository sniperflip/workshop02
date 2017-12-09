<?php
    if(isset($_POST['submit'])) {
        $guess = $_POST['guess'];
        $count = isset($_POST['count']) ? $_POST['count']:0;
        $count++;
    }
?>
<html>
<head>
<title>Guess the Word Game</title>
</head>
<h3>by: Johann N. Trocio </h3>
<body>

<div id = "header">
</div>

<div id = "word">
<?php

//create array
$words = array("aardvarks", "determine", "different", "greatness", "miserable");

$random = array_rand($words);
//choose a random word from array
$newWord = $words[$random];

$change = str_split($newWord);
//prints out array
/*foreach($change as $list) {
    echo $list;
}*/
$masked = str_replace($change, '*', $change);
//prints masked array
foreach($masked as $hide) {
echo $hide;
}

?>
</div>

<div id = "guess">

<form name="guessLetter" method="POST" action=""
<p>Please input your guess below</p>
<input type="text" name="guess" id="guess"/><br />

<input type="hidden" name="count" id="count" value="<?php echo $count; ?>" />

<?php

?>

<input type="submit" name="submit" id="submit" value="Submit" />

</form>

<?php

if(isset($_POST['submit'])) {

    echo "Guess: ".$guess."<br />";
    echo "Count: ".$count;
}

?>

</div>
</body>
</html>