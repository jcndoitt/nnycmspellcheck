<?php
    header("Access-Control-Allow-Origin: https://nnycmspellcheck.herokuapp.com");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
    header("Access-Control-Max-Age: 86400");
    header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header("Content-Type: text/javascript");
    include("include.js");
?>
