<?php
require_once("../config/global_params.php");
require_once("../models/model1.php");

if (isset($_REQUEST['section'])) {
    $section = $_REQUEST['section'];
} else {
    $section = "";
}


switch ($section) {
    case "colaborar":
        //PHP Donate
        require_once("../view/collaborate.php");
        break;
    default:
        //PHP Index
        require_once("../view/index.php");
        break;

    }

