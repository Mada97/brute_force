<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Binary Search</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <style>
            input {
                width: 400px !important;
            }
            .alert {
                margin-top: 20px;
            }
        </style>
    </head>


    <body>
        <nav>
            <p class="navP">Brute Force Algorithms Web Application</p>
        </nav>
        <h3>Binary Search</h3>
        <p class="info">
            " binary search, also known as half-interval search, logarithmic search,
            or binary chop, is a search algorithm that finds the position of a target value within a sorted array.
            Binary search compares the target value to the middle element of the array."
        </p>
        <p>Enter the array elements and the keyword in the fields below.</p>
        <p>Note: Separate the elements by a comma and no spaces.</p>
        <form action="binarySearch.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <input class="form-control" type="text" name="keyword" placeholder="Enter the keyword here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>
    </body>
</html>

<?php

if(isset($_POST['submit'])) {
    function BinarySearch(Array $arr, $keyword)
    {
        // check for empty array
        if (count($arr) === 0) return false;
        $low = 0;
        $high = count($arr) - 1;

        while ($low <= $high) {

            // compute middle index
            $mid = floor(($low + $high) / 2);

            // element found at mid
            if ($arr[$mid] == $keyword) {
                return $mid + 1;
            }

            if ($keyword < $arr[$mid]) {
                // search the left side of the array
                $high = $mid - 1;
            } else {
                // search the right side of the array
                $low = $mid + 1;
            }
        }

        // If we reach here element x doesnt exist
        return -1;
    }

    $myInput = $_POST['array'];
    $keyword = $_POST['keyword'];
    $myArray = explode(',', $myInput);

    $result = BinarySearch($myArray, $keyword);

    if ($result == -1) {
        echo "<p class='alert alert-danger'>The element you're searching for wasn't found!</p>";
    } elseif ($result == 1) {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'>" . $keyword . "</span></strong> was found in the <span class='btn btn-secondary'>"
            . $result . "st</span> index</p>";
    } elseif ($result == 2) {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'>" . $keyword . "</span></strong> was found in the <span class='btn btn-secondary'>"
            . $result . "nd</span> index</p>";
    } elseif ($result == 3) {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'>" . $keyword . "</span></strong> was found in the <span class='btn btn-secondary'>"
            . $result . "rd</span> index</p>";
    } else {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'> " . $keyword . "</span></strong> was found in the <span class='btn btn-secondary'>"
            . $result . "th</span> index</p>";
    }
}

?>
