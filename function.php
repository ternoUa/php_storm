<?php
/**
 * @author: Yura Shved (jur.ukr@gmail.com)
 * Date: 29.10.2016 17:00
 */
include_once 'header.html';


// funny summer
echo '
<form action="function.php" method="get">
  <select name="month">
    <option value="6">june</option>
    <option value="7">july</option>
    <option value="8">august</option>
  </select>
  <br/>
  <br/>
  <select name="ln">
    <option value="ua">Українська</option>
    <option value="de">Deutsch</option>
  </select>
  <br/>
  <br/>
  <input type="submit"/>
</form>
';

//var_dump(isset($_GET['month']));

if (isset($_GET['month']) and isset($_GET['ln'])) {
  translateByMonthNumber($_GET['month'], $_GET['ln']);
} else {
  echo 'Please choose a month and language';
}

include_once 'footer.html';







function translateByMonthNumber($number, $languageIso){
  if ($number <= 12 and $number >= 1) {

    switch ($languageIso) {
      case 'ua':
        switch ($number) {
          case 6:
            echo 'Червень';
            break;

          case 7:
            echo 'Липень';
            break;

          case 8:
            echo 'Серпень';
            break;

          default:
            echo 'Ви провтикали своє літо';
            break;
        }
        break;

      case 'de':
        switch ($number) {
          case 6:
            echo 'Juni';
            break;

          case 7:
            echo 'Juli';
            break;

          case 8:
            echo 'August';
            break;

          default:
            echo 'Sie haben Ihr Sommer verpasst';
            break;
        }
        break;

      default:
        switch ($number) {
          case 6:
            echo 'June';
            break;

          case 7:
            echo 'July';
            break;

          case 8:
            echo 'August';
            break;

          default:
            echo 'You have lost your summer';
            break;
        }

    }

  } else {
    echo 'Wrong parameter';
  }
}




