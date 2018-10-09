
<?php
if(isset($_GET['input'])){
    $input = $_GET['input'];
    $matches = preg_split("/[^A-Za-z]/", $input, -1, PREG_SPLIT_NO_EMPTY);
    $result = [];
    $matches = array_map('strtolower', $matches);
    foreach ($matches as $word) {
        if(!array_key_exists($word, $result)) {
            $result[$word]=0;
        }
        $result[$word]++;
    }

    echo "<table border='2'>";
    foreach ($result as $word=>$count) {
        echo "<tr><td>".$word."</td><td>".$count."</td></tr>";
    }
    echo "</table>";
}

?>

<form>
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Count words">
</form>

