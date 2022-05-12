<?php

    header('Application: Belajar PHP Web');
    header('Author: Muhammad Kusnadi');

    $client = $_SERVER['HTTP_CLIENT_NAME'];

    echo "Hello $client";