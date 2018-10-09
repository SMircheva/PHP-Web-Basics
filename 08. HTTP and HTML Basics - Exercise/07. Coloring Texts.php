<form>
    <textarea rows="10" name="input"></textarea><br>
    <input type="submit" value="Color text">
</form>

<?php
if (isset($_GET['input'])){
    $input = array_filter(str_split($_GET['input']), function($el){
        return ($el !="" && $el !=" ");
    });

    foreach ($input as $char) {
        if (ord($char) % 2 == 0){
            echo "<span style='color:red'>$char</span>";
        } else {
            echo "<span style='color:blue'>$char</span>";

        }
    }
}

?>
