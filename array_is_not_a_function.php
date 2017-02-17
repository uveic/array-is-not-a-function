<?php

const RUN_TIMES = 2000000;

echo "Running test: pushing " . number_format(RUN_TIMES, 0) . " Array items to an array using 'array()'...\n";
$arrayContent = array();
$secondsTimeStampBeforeStarting = microtime(true);
for ($i = 0; $i < RUN_TIMES; $i++) {
	$arrayContent[] = array(rand(10000, 99999));
}
$secondsTimeStampAfterFinished = microtime(true);
echo "Execution time (seconds): " . round($secondsTimeStampAfterFinished - $secondsTimeStampBeforeStarting, 4) . "\n";
unset($arrayContent);




echo "Running test: pushing " . number_format(RUN_TIMES, 0) . " Array items to an array using '[]'...\n";
$arrayContent = [];
$secondsTimeStampBeforeStarting = microtime(true);
for ($i = 0; $i < RUN_TIMES; $i++) {
	$arrayContent[] = [rand(10000, 99999)];
}
$secondsTimeStampAfterFinished = microtime(true);
echo "Execution time (seconds): " . round($secondsTimeStampAfterFinished - $secondsTimeStampBeforeStarting, 4) . "\n";
unset($arrayContent);




echo "Running test: pushing " . number_format(RUN_TIMES, 0) . " Array items to an array using 'array_push()'...\n";
$arrayContent = [];
$secondsTimeStampBeforeStarting = microtime(true);
for ($i = 0; $i < RUN_TIMES; $i++) {
	array_push($arrayContent, [rand(10000, 99999)]);
}
$secondsTimeStampAfterFinished = microtime(true);
echo "Execution time (seconds): " . round($secondsTimeStampAfterFinished - $secondsTimeStampBeforeStarting, 4) . "\n";
unset($arrayContent);