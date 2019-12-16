<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>String Matching</title>
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
        <h3>String Matching</h3>
        <p class="info">
            "string-searching algorithms, are an important class of string algorithms that try to find a place where one
            or several strings are found within a larger string or text."
        </p>
        <p>Enter the array and pattern elements  in the fields below respectively.</p>
        <p>Note: Separate the elements by a comma and no spaces.</p>
        <form action="stringMatching.php" method="post">
            <input class="form-control" type="text" name="array" placeholder="Enter the elements here..">
            <input class="form-control" type="text" name="pattern" placeholder="Enter the pattern here..">
            <button type="submit" name="submit" class="submit btn btn-success">Apply Algorithm</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])) {
    $myInput = $_POST['array'];
    $pattern = $_POST['pattern'];
    $myText = explode(',', $myInput);
    $myPattern = explode(',', $pattern);
    $n = count($myText);
    $m = count($myPattern);
        $result = -1;

    for($i=0; $i <= $n-$m; $i++) {
        $j = 0;
        while($j < $m && $myPattern[$j] == $myText[$i+$j]) {
            $j++;
        }
        if($j == $m){
            $result = $i + 1;
            break;
        }
    }

    if($result == -1) {
        echo "<p class='alert alert-danger'>The pattern you're searching for wasn't found!</p>";
    } elseif($result == 1) {
        echo "<p class='alert alert-success'>The first character of the matching substring is in the <span class='btn btn-secondary'>"
            . $result . "st</span> index</p>";
    } elseif($result == 2) {
        echo "<p class='alert alert-success'>The first character of the matching substring is in the <span class='btn btn-secondary'>"
            . $result . "nd</span> index</p>";
    } elseif($result == 3) {
        echo "<p class='alert alert-success'>The first character of the matching substring is in the <span class='btn btn-secondary'>"
            . $result . "rd</span> index</p>";
    } else {
        echo "<p class='alert alert-success'>The first character of the matching substring is in the <span class='btn btn-secondary'>"
            . $result . "th</span> index</p>";
    }
}

?>
