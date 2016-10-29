<?php
/**
 * @author: Yura Shved (jur.ukr@gmail.com)
 * Date: 29.10.2016 17:00
 */
include_once 'header.html';

//echo '<br/>';
//var_dump(1); // show type and value

if (isset($_GET['month'])) {
  $month = $_GET['month'];
} else {
  $month = 0;
}

if (isset($_GET['ln'])) {
  $ln = $_GET['ln'];
} else {
  $ln = 0;
}

// funny summer
echo '
<form action="index.php" method="get">
  <select name="month">
    <option value="6" ' . (($month == 6) ? 'selected' : '') . '>june</option>
    <option value="7" ' . (($month == 7) ? 'selected' : '') . '>july</option>
    <option value="8" ' . (($month == 8) ? 'selected' : '') . '>august</option>
  </select><br/>
  
  <label>
    <input type="radio" name="ln" value="ua" ' . (($ln === 'ua') ? 'checked' : '') . '/>Ukraine
  </label>
  <br/>
  <label><input type="radio" name="ln" value="en" ' . (($ln === 'en') ? 'checked' : '') . '/>English</label>
  <br/>
  <input type="submit"/>
</form>
';

//var_dump(isset($_GET['month']));

if (isset($_GET['month'])) {

  if ($month <= 12 and $month >= 1) {

//    if ($month == 6) {
//      echo 'Червень';
//    } elseif ($month == 7) {
//      echo 'Липень';
//    } elseif ($month == 8) {
//      echo 'Серпень';
//    } else {
//      echo 'Ви провтикали своє літо';
//    }

    switch ($month) {
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

  } else {
    echo 'Wrong parameter';
  }

} else {
  echo 'Please choose a month';
}

include_once 'footer.html';