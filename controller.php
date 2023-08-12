<?php
$startDataTimeStamp = strtotime("10/01/2023") - time();

if (@$_POST['form_name'] == 'app_form') {
    print_r($_POST);
}