<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sequential Search</title>
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
        <h3>Sequential Search</h3>
        <p class="info">
            "linear search or sequential search is a method for finding an element within a list.<br>
            It sequentially checks each element of the list until a match is found or the whole list has been searched."
        </p>
        <p>Enter the array elements and the keyword in the fields below.</p>
        <p>Note: Separate the elements by a comma and no spaces.</p>
        <form action="sequentialSearch.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <input class="form-control" type="text" name="keyword" placeholder="Enter the keyword here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])) {
    $myInput = $_POST['array'];
    $keyword = $_POST['keyword'];
    $myArray = explode(',', $myInput);
    $n = count($myArray);
    $result = -1;
    for($i=0; $i < $n; $i++) {
        if($myArray[$i] == $keyword) {
            $result = $i+1;
            break;
        }
    }
    if($result == -1) {
        echo "<p class='alert alert-danger'>The element you're searching for wasn't found!</p>";
    } elseif($result == 1) {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'>" . $keyword . "</span></strong> is in the <span class='btn btn-secondary'>"
            . $result . "st</span> index</p>";
    } elseif($result == 2) {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'>" . $keyword . "</span></strong> is in the <span class='btn btn-secondary'>"
            . $result . "nd</span> index</p>";
    } elseif($result == 3) {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'>" . $keyword . "</span></strong> is in the <span class='btn btn-secondary'>"
            . $result . "rd</span> index</p>";
    } else {
        echo "<p class='alert alert-success'>The element <strong><span class='btn btn-light'> " . $keyword . "</span></strong> is in the <span class='btn btn-secondary'>"
            . $result . "th</span> index</p>";
    }
    }

?>
