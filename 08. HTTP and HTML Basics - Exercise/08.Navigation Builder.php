<form>
    Categories: <input type="text" name="categories"><br>
    Tags: <input type="text" name="tags"><br>
    Months: <input type="text" name="months"><br>

    <input type="submit" value="Generate">
</form>

<?php
if (isset($_GET['categories'])){
    echo "<h2>Categories</h2>";
    echo "<ul>";
        $categories = explode(', ', $_GET['categories']);
        foreach ($categories as $item) {
            echo "<li>$item</li>";
        }
    echo "</ul>";


    echo "<h2>Tags</h2>";
    echo "<ul>";
    $tags = explode(', ', $_GET['tags']);
    foreach ($tags as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";


    echo "<h2>Months</h2>";
    echo "<ul>";
    $months = explode(', ', $_GET['months']);
    foreach ($months as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}

?>