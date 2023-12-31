<?php
session_start();
require __DIR__ . '/vendor/autoload.php';
require_once "config.php";
require_once "functions.php";

use Aws\S3\S3Client;

try {
    (new S3Client([
        "version" => "latest",
        "region" => "us-east-1",
    ]))->registerStreamWrapper();

    if (@$_POST['form_name'] == 'app_form') {
        if (!isset($_POST["agreement"]) || $_POST["agreement"] != "yes") {
            throw new Exception("You didn't sign the data processing agreement! it's required!", 1);
        }
        if (isset($_SESSION["registered"]) && $_SESSION["registered"] === 1) {
            throw new Exception("You have been registered recently. Thank you!", 1);
        }
        unset($_POST['form_name']);
        $_POST = array_map('trim', $_POST);
        if (count($_POST) < 5 || count($_POST) > 8) {
            throw new Exception("Error of the form data!!", 1);
        }
        $data = "n" . KEY_DELIMITER . $realUserCount . FIELD_DELIMITER;
        foreach ($_POST as $key => $field) {
            if (
                !in_array($key, ["link", "suggestion"])
                && ($field === "" || mb_stripos($field, "\n") === true)
            ) {
                throw new Exception("Incorrect values in the form!", 1);
            }
            if (!in_array($key, ["email", "nickname", "music_genre", "experience_years", "tracks_amount", "link", "suggestion", "agreement"])) {
                throw new Exception("Error of the form data!", 1);
            }
            $data .= $key . KEY_DELIMITER . str_replace(["\r\n", "\r", "\n"], "", $field) . FIELD_DELIMITER;
        }
        $data .= "ip" . KEY_DELIMITER . @$_SERVER["REMOTE_ADDR"] . FIELD_DELIMITER;
        $data .= "platform" . KEY_DELIMITER . @$_SERVER["HTTP_SEC_CH_UA_PLATFORM"] . FIELD_DELIMITER;

        $geoData = getGeoInfoByIP($_SERVER["REMOTE_ADDR"]);
        if ($geoData) {
            $data .= "country" . KEY_DELIMITER . $geoData["country"] . FIELD_DELIMITER;
            $data .= "country_code" . KEY_DELIMITER . $geoData["countryCode"] . FIELD_DELIMITER;
            $data .= "region" . KEY_DELIMITER . $geoData["regionName"] . FIELD_DELIMITER;
            $data .= "region_code" . KEY_DELIMITER . $geoData["region"] . FIELD_DELIMITER;
            $data .= "city" . KEY_DELIMITER . $geoData["city"] . FIELD_DELIMITER;
            $data .= "timezone" . KEY_DELIMITER . $geoData["timezone"] . FIELD_DELIMITER;
            $data .= "geo_lat" . KEY_DELIMITER . $geoData["lat"] . FIELD_DELIMITER;
            $data .= "geo_lon" . KEY_DELIMITER . $geoData["lon"] . FIELD_DELIMITER;
        } else {
            $data .= "geo" . KEY_DELIMITER . "none" . FIELD_DELIMITER;
        }

        $data .= USER_DELIMITER;

        if (file_exists(STORAGE_FOLDER)) {
            readStorage($_POST['email']);
        }
        if (!file_put_contents(STORAGE_FOLDER . "/" . USER_REQUEST_FILE, $data, FILE_APPEND)) {
            throw new Exception("Sorry! Unexpected error!", 1);
        }
        $_SESSION["registered"] = 1;
        showMessage(
            [
                "title" => "Success!",
                "text" => "Thank you! You will receive a privilege access and all instructions when the project will be launched!",
                "button" => "OK"
            ]
        );
        exit();
    }
} catch (\Throwable $e) {
    if ($e->getCode() === 1) {
        showMessage([
            "title" => "Ups, Error!",
            "text" => $e->getMessage(),
            "button" => "got it!"
        ]);
    } else {
        showMessage([
            "title" => "Ups, Error!",
            "text" => "An undefined error! Please connect to us to solve the problem.",
            "button" => "got it!"
        ]);
    }
}
