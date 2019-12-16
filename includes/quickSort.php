<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quick Sort</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <nav>
            <p class="navP">Brute Force Algorithms Web Application</p>
        </nav>
        <h3>Quick Sort</h3>
        <p class="info">
            "Quicksort is an O efficient sorting algorithm,
            serving as a systematic method for placing the elements of an array in order.<br>
            Developed by British computer scientist Tony Hoare in 1959 and published in 1961,
            it is still a commonly used algorithm for sorting."
        </p>
        <p>Enter the array elements that you want to sort in the field below.</p>
        <p>Note: Separate the elements by a comma.</p>
        <form action="quickSort.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>

<?php



if(isset($_POST['submit'])) {
    function Partition(&$array, $start, $end) {
        $pivot = $array[$end];
        $partitionIndex = $start; // set partition index as start initially.
        for($i = $start; $i < $end; $i++) {
            if($array[$i] <= $pivot) {
                // swap if element is less than pivot.
                $temp = $array[$i];
                $array[$i] = $array[$partitionIndex];
                $array[$partitionIndex] = $temp;
                $partitionIndex ++;
            }
        }
        // swap pivot with element at partition index.
        $temp = $array[$partitionIndex];
        $array[$partitionIndex] = $array[$end];
        $array[$end] = $temp;
        return $partitionIndex;
    }

    function QuickSort(&$array, $start, $end) {
        $partitionIndex = Partition($array, $start, $end);
        if($start < $partitionIndex-1) {
            QuickSort($array, $start, $partitionIndex-1);
        }
        if($partitionIndex < $end) {
            QuickSort($array, $partitionIndex, $end);
        }
    }


    $myInput = $_POST['array'];
    $myArray = explode(',', $myInput);
    QuickSort($myArray, 0, count($myArray)-1);
    echo "<div class='sorted-items'>";
    echo "<p class='sorted'>The sorted array looks like this..</p>";
    foreach($myArray as $item) {
        echo "<p class='btn btn-secondary'>" . $item . "</p>";
    }
    echo "</div>";
    echo "</body></html>";
}
?>
