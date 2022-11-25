<?php
include_once __DIR__ . '/lib/config.php';
header('location:' . URL_BASE);

session_destroy();
