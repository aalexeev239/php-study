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


function str_split_unicode($str, $l = 0) {
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}



function hellify($str) {
  // var_dump($str);

  $words = explode(" ", $str);

  $response = array();

  foreach ($words as $key => $word) {

    if (mb_strlen($word) > 3) {

      $chars = str_split_unicode($word);

      $charsFirst = array_shift($chars);
      $charsLast = array_pop($chars);

      shuffle($chars);

      $response[$key] = implode("", array_merge((array)$charsFirst, $chars, (array)$charsLast));

    } else {
      $response[$key] = $word;
    }
  }

  return implode(" ",$response);
}

// echo hellify($text);


$dataString = file_get_contents('hipsta.txt');
// var_dump($dataString);

$parts = array_filter(explode("\n", $dataString));

$dataOut = implode("\n\n", array_reverse($parts));

var_dump($dataOut);
file_put_contents('hipstaOut.txt', $dataOut);

?>
</div>