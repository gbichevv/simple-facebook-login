<?php
session_start();
require_once 'Facebook/autoload.php';

$FB = new \Facebook\Facebook([
    'app_id' => '641893499972525',
    'app_secret' => 'd27de3806c61d55f88fbf11d446acf86',
    'default_graph_version' => 'v2.10'
]);

$helper = $FB->getRedirectLoginHelper();