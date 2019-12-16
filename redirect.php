<?php

if(isset($_POST['arraySubmit'])) {
    $type = $_POST['type'];

    if($type == "selection") {
        header("Location: includes/selectionSort.php");
    } elseif($type == "bubble") {
        header("Location: includes/bubbleSort.php");
    } elseif($type == "sequential") {
        header("Location: includes/sequentialSearch.php");
    } elseif($type == "matching") {
        header("Location: includes/stringMatching.php");
    } elseif($type == "insertion") {
        header("Location: includes/insertionSort.php");
    } elseif($type == "merge") {
        header("Location: includes/mergeSort.php");
    } elseif($type == "quick") {
        header("Location: includes/quickSort.php");
    } elseif($type == "binary") {
        header("Location: includes/binarySearch.php");
    }
}
