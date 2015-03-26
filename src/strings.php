<?php
  $task = isset($_POST['task']) ? $_POST['task'] : '';
  $inputString = isset($_POST['inputString']) ? $_POST['inputString'] : '';
?>

<div class="container">
  <div class="row">
    <div class="col8 col-offset-2">
      <form action="<?=$baseUrl?>/index.php?page=strings" method="POST" class="form">
        <!-- <input type="hidden" name="page" value="strings"> -->
        <label for="" class="form__label">Выберите тип задания:</label>
        <div class="select">
          <select name="task" id="task" class="select__inst">
            <option value="1" <? if ($task == 1) {echo 'selected';} ?>>Задание 1: количество слов</option>
            <option value="2" <? if ($task == 2) {echo 'selected';} ?>>Задание 2: количество четных слов</option>
            <option value="3" <? if ($task == 3) {echo 'selected';} ?>>Задание 3: каждый второй символ к верхнему регистру</option>
            <option value="4" <? if ($task == 4) {echo 'selected';} ?>>Задание 4: перемешать все символы</option>
            <option value="5" <? if ($task == 5) {echo 'selected';} ?>>Задание 5: выделить имя файла из полного пути</option>
          </select>
        </div>
        <label for="" class="form__label">Введите текст:</label>
        <div class="form__inp-wrap">
          <textarea name="inputString" id="inputString" class="form__inp form__inp--textarea"><?php if (!empty($inputString)) { echo $inputString; } else { echo 'Обычный пример текстового текста';}?></textarea>
          <a onclick="(function(e){e.preventDefault(); e.target.previousElementSibling.value=''})(event);" class="form__clear icon-close"></a>
        </div>
        <button type="submit" class="form__submit btn pull-right">Отправить</button>
      </form>

    </div>
  </div>

  <?php
    if (!empty($task) && !empty($inputString)) {
  ?>
    <div class="content">
      <div class="row">
        <div class="col8 col-offset-2">
          <div class="text-center">
            <h2>Задание <?=$task?>:</h2>
            <p class="lead">
              <?php
                switch ($task) {
                  case 1:
                    echo "Дана строка в которой записаны слова через пробел. Необходимо посчитать количество слов.";
                    break;

                  case 2:
                    echo "Дана строка в которой записаны слова через пробел. Необходимо посчитать количество слов с четным количеством символов.";
                    break;

                  case 3:
                    echo "Напишите функцию, которая каждый второй символ строки приводит к верхнему регистру.";
                    break;

                  case 4:
                    echo "Дана строка в которой записаны слова через пробел. Необходимо перемешать в каждом слове все символы в случайном порядке кроме первого и последнего.";
                    break;

                  case 5:
                    echo "Дана строка в которой записан полный путь к файлу. Необходимо найти имя файла без расширения.";
                    break;

                  default:
                    echo "Похоже, этого задания нет.";
                    break;
                }
              ?>
            </p>
            <?php

              $answer = '';

              switch ($task) {
                case 1:
                  $answer = "Количество слов: ".wordCount($inputString);
                  break;

                case 2:
                  $answer = "Количество четных слов: ".wordEvenCount($inputString);
                  break;

                case 3:
                  $answer = upperEverySecondChar($inputString);
                  break;

                case 4:
                  $answer = hellify($inputString);
                  break;

                case 5:
                  $answer = myGetFileName($inputString);
                  break;

                default:
                  echo "Поэтому ответа тоже нет..";
                  break;
              }

              if (!empty($answer)) {
                echo htmlspecialchars($answer);
              } else {
                echo "Похоже, у меня нет ответа. Возможно, в другой раз...";
              }
             ?>
          </div>
        </div>
      </div>
    </div>
  <?php
    }
  ?>
</div>

<?php


function wordCount($str) {
  return count(explode(" ", $str));
}



function wordEvenCount($str) {
  $words = explode(" ", $str);
  $evenCount = 0;

  foreach ($words as $word) {
    if (mb_strlen(trim($word)) % 2 == 0) {
      $evenCount ++;
    }
  }

  return $evenCount;
}



function upperEverySecondChar($str) {
  $length = mb_strlen($str);
  $clone = "";
  $flag = false;
  for ($i=0; $i < $length; $i++) {
    $clone = $flag? $clone.mb_strtoupper(mb_substr($str, $i, 1)) : $clone.mb_substr($str, $i, 1);
    $flag = !$flag;
  }
  return $clone;
}


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



function myGetFileName($str) {
  // $components = explode("/", $str);
  // $lastComp = (string)array_pop($components);
  // $fileName = (string)(explode(".",$lastComp)[0]);

  return '';
}

 ?>