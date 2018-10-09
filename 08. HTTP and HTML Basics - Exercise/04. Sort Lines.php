<?php
if(isset($_GET['lines'])){
    $lines = explode(PHP_EOL, $_GET['lines']);
    sort($lines, SORT_STRING);
    $sortedLines = implode(PHP_EOL,$lines);
}

?>

<form>
  <textarea rows="10" name="lines"><?= $sortedLines?></textarea> <br>
    <input type="submit" value="Sort">
</form>
