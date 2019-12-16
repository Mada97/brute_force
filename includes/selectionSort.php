<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Selection Sort</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>


    <body>
        <nav>
            <p class="navP">Brute Force Algorithms Web Application</p>
        </nav>
        <h3>Selection Sort</h3>
        <p class="info">
            "selection sort is a sorting algorithm, specifically an in-place comparison sort.
            It has O(n squared) time complexity, making it inefficient on large lists"
        </p>
        <p>Enter the array elements that you want to sort in the field below.</p>
        <p>Note: Separate the elements by a comma.</p>
        <form action="selectionSort.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>


<?php
if(isset($_POST['submit'])) {
    $myInput = $_POST['array'];
    $myArray = explode(',', $myInput);
    $n = count($myArray);
    for($i=0; $i < $n-1; $i++) {
        $min = $i;
        for($j = $i+1; $j < $n; $j++) {
            if($myArray[$j] < $myArray[$min])
                $min = $j;
        }
        $temp = $myArray[$i];
        $myArray[$i] = $myArray[$min];
        $myArray[$min] = $temp;
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
