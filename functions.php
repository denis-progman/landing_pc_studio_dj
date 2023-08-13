<?php
function getUsersData(): array {
    $storageString = file_get_contents(FILE_STORAGE);
    return explode(USER_DELIMITER, $storageString);
}

function readStorage(?string $checkMail = null): array {
    $storage = [];
    $usersData = getUsersData();
    if (!count($usersData)) {
        return [];
    }
    foreach (getUsersData() as $userNum => $user) {
        foreach (explode(FIELD_DELIMITER, $user) as $field) {
            $value = explode(KEY_DELIMITER, $field);
            if (!isset($value[1])){
                continue;
            }
            if($value[0] == "email" && $checkMail && $value[1] == $checkMail) {
                throw new Exception("Your email has already been registered!", 1);
            }
            if (!isset($storage[$userNum])) {
                $storage[$userNum] = [];
            }
            $storage[$userNum][$value[0]] = $value[1];
        }
    }
    return $storage;
}

function addLog(mixed $message):void {
    file_put_contents(
        LOG_FILE . ".log",
        date("d-m-Y H:i:s") . " -- " . print_r($message, true) . "\n\n",
        FILE_APPEND | LOCK_EX
    );
}

function getGeoInfoByIP(string $ip, $login = ""): ?array {
    try {
        if (!$ip) {
            throw new Exception("ip is not found");
        }
        $ipApiResponse = file_get_contents("http://ip-api.com/json/{$ip}");
        $ipApiResponseArray = json_decode($ipApiResponse, true);
        if (!isset($ipApiResponseArray['status'])){
            throw new Exception("an unexpected answer from ip-api.com \n-> ". $ipApiResponse);
        }
        if ($ipApiResponseArray['status'] != "success") {
            throw new Exception("an error answer from ip-api.com \n-> ". $ipApiResponse);
        }
        return $ipApiResponseArray;
    } catch (Throwable $e) {
        addLog("getGeoInfoByIP error: {$e->getMessage()}\nu-login: $login");
        return null;
    }
}

function showMessage($message) {
    echo "<script>alert(\"{$message}\")</script>";
}