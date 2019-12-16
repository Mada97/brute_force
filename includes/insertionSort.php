<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insertion Sort</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <nav>
            <p class="navP">Brute Force Algorithms Web Application</p>
        </nav>
        <h3>Insertion Sort</h3>
        <p class="info">
            "Insertion sort is a simple sorting algorithm that builds the final sorted array one item at a time.
            It is much less efficient on large lists."
        </p>
        <p>Enter the array elements that you want to sort in the field below.</p>
        <p>Note: Separate the elements by a comma.</p>
        <form action="insertionSort.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>


<?php
if(isset($_POST['submit'])) {
    $myInput = $_POST['array'];
    $myArray = explode(',', $myInput);
    $n = count($myArray);
    for($i=1; $i < $n; $i++) {
        $value = $myArray[$i];
        $hole = $i;
        while($hole > 0 && $myArray[$hole - 1] > $value) {
            $myArray[$hole] = $myArray[$hole-1];
            $hole --;
        }
        $myArray[$hole] = $value;
    }
    echo "<div class='sorted-items'>";
    echo "<p class='sorted'>The sorted array looks like this..</p>";
    foreach($myArray as $item) {
        echo "<p class='btn btn-secondary'>" . $item . "</p>";
    }
    echo "</div>";
    echo "</body></html>";
}
?>
