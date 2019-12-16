<?php
/*
function Merge($left, $right, $array) {
$nleft = count($left);
$nright = count($right);
$i = $j = $k = 0;
while($i < $nleft && $j < $nright) {
if($left[$i] <= $right[$j]) {
$array[$k] = $left[$i];
$i ++;
} else {
$array[$k] = $right[$j];
$j ++;
}
$k ++;
}
while($i < $nleft) {
$array[$k] = $left[$i];
$i ++;
$k ++;
}
while ($j < $nright) {
$array[$k] = $right[$j];
$j ++;
$k ++;
}
}

function MergeSort($array) {
$n = count($array);
if($n < 2) return;
$mid = $n / 2;
$left = array_slice($array, 0, $mid);
$right = array_slice($array, $mid);
MergeSort($left);
MergeSort($right);
Merge($left, $right, $array);
}*/
/**********************************************************************/
/*
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
    if($start < $end) {
        $partitionIndex = Partition($array, $start, $end); // calling Partition function.
        QuickSort($array, $start, $partitionIndex-1);
        QuickSort($array, $partitionIndex-1, $end);
    }
}*/