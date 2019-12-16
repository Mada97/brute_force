<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bubble Sort</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <nav>
            <p class="navP">Brute Force Algorithms Web Application</p>
        </nav>
        <h3>Bubble Sort</h3>
        <p class="info">
            "sometimes referred to as sinking sort,
            is a simple sorting algorithm that repeatedly steps through the list,
            compares adjacent pairs and swaps them if they are in the wrong order.
            The pass through the list is repeated until the list is sorted."
        </p>
        <p>Enter the array elements that you want to sort in the field below.</p>
        <p>Note: Separate the elements by a comma.</p>
        <form action="bubbleSort.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>

<?php
if(isset($_POST['submit'])) {
    $myInput = $_POST['array'];
    $myArray = explode(',', $myInput);
    $n = count($myArray);
    for($i=1; $i < $n; $i++) {
        $flag = 0;
        for($j = 0; $j <= $n-$i-1; $j++) {
            if($myArray[$j] > $myArray[$j+1]) {
                $temp = $myArray[$j];
                $myArray[$j] = $myArray[$j+1];
                $myArray[$j+1] = $temp;
                $flag = 1;
            }
        }
        if($flag = 0)
            break;
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
