<div class="container">
<?php


// $text = "   lJl asdf alsdjkqkj2198 j \n фыдвалофывайцук <strong> фывафыв</strong> asdf";

// $englishText = " Hello! ";
// $russianText = "Привет";

// $length = strlen($englishText);
// $length2 = strlen($russianText);
// var_dump($length, $length2);

// var_dump($text, htmlspecialchars(ucfirst(nl2br(trim($text)))));

// // echo $text;

// // $text = "asdf alsdjkqkj2198   j фыдвалофывайцук фывафыв asdf";

// // $parts = explode(" ", $text);

// var_dump($parts);

// $values =["rollover", "snake", "pullshot", "pushshot", "pullkick", "pinshot"];

// echo implode(', ', $values);

$mail = 'roma@evercodelab.com';
$url = getMailUrl($mail);
// echo $url;

function getMailUrl($mail) {
  $mailArray = explode("@", $mail);
  return $mailArray[count($mailArray)-1];
}





$values =[" rollover ", "SNAKE", " p u l l s h o t ", "pushshot", "pullkick", "pinshot"];

function arrayToString($arr) {
  $temp = array();

  foreach ($arr as $key => $value) {
    if (is_string($value)) {
      array_push($temp, strtolower(trim(implode("",explode(" ", $value)))));
    }
  }

  return implode('&',$temp);
}

// var_dump($values);
// echo arrayToString($values);

$text = "  1234 12345678 asdf alsdjkqkj2198 j \n фыдвалофывайцук <strong> фывафыв</strong> asdf";


// echo hellify($text);


$dataString = file_get_contents('hipsta.txt');
// var_dump($dataString);

$parts = array_filter(explode("\n", $dataString));

$dataOut = implode("\n\n", array_reverse($parts));

var_dump($dataOut);
file_put_contents('hipstaOut.txt', $dataOut);

?>
</div>