<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $phpversion = phpversion();
    
    $htmlBody = <<<EOT
    <h1>Hi there, PHPUS!</h1>
    <h2>Laravel Framework</h2>

    <p>Current PHP version: $phpversion</p>
    EOT;

    return $htmlBody;
});
