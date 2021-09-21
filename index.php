<?php
include "StopWatch.php";


$time = new StopWatch();

echo "Thời gian bắt đầu " . $time->start() . "<br/>";
echo "Thời gian kết thúc " . $time->stop() . "<br/>";
echo 'Time to do the Selection Sort is: ' . $time->getElapsedTime() . "<br/>" ;
