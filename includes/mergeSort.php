<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Merge Sort</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <nav>
            <p class="navP">Brute Force Algorithms Web Application</p>
        </nav>
        <h3>Merge Sort</h3>
        <p class="info">
            "merge sort is an efficient, general-purpose,
            comparison-based sorting algorithm.<br>
            Most implementations produce a stable sort,
            which means that the order of equal elements is the same in the input and output.<br>
            Merge sort is a divide and conquer algorithm that was invented by John von Neumann in 1945."
        </p>
        <p>Enter the array elements that you want to sort in the field below.</p>
        <p>Note: Separate the elements by a comma.</p>
        <form action="mergeSort.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>

<?php



if(isset($_POST['submit'])) {
    function Merge($left, $right) {
        $res = array();
        while(count($left) > 0 && count($right) > 0) {
            if($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }
        while(count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }

    function MergeSort($array) {
        if(count($array) == 1 ) return $array;
        $mid = count($array) / 2;
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);
        $left = MergeSort($left);
        $right = MergeSort($right);
        return Merge($left, $right);
    }
    $myInput = $_POST['array'];
    $myArray = explode(',', $myInput);
    $sortedArray = MergeSort($myArray);
    echo "<div class='sorted-items'>";
    echo "<p class='sorted'>The sorted array looks like this..</p>";
    foreach($sortedArray as $item) {
        echo "<p class='btn btn-secondary'>" . $item . "</p>";
    }
    echo "</div>";
    echo "</body></html>";
}
?>
