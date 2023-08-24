<?php
session_start();
//require __DIR__ . '/vendor/autoload.php';
require_once "config.php";
require_once "functions.php";

use Aws\S3\S3Client;

try {
    (new S3Client([
        "version" => "latest",
        "region" => "us-east-1",
    ]))->registerStreamWrapper();
    $startDataTimeStamp = strtotime(DATE_OF_PROJECT_START) - time();
    $realUserCount = count(getUsersData());
    $userCount = $realUserCount + MIN_USER_COUNT;
} catch (\Throwable $e) {
    echo '<script>alert("An undefined error! Please connect to us to solve the problem.")</script>';
//        print_r([$e->getMessage(), $e->getFile(), $e->getLine()]);
}
