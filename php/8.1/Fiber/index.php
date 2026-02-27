<?php

$fiber = new Fiber(function () {
    echo 'fiber 1 is over' . PHP_EOL;

    Fiber::suspend();

    echo 'fiber 2 is over' . PHP_EOL;

    echo 'fiber 3 is over' . PHP_EOL;
});

echo 'execution started' . PHP_EOL;
echo 'process 1' . PHP_EOL;
$fiber->start();
echo 'process 2' . PHP_EOL;
$fiber->resume();
echo 'execution finished' . PHP_EOL;
