<?php
/**
 * Created by PhpStorm.
 * User: stavroskefaleas
 * Date: 12/11/2018
 * Time: 19:24
 */
    //Create Connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Check Connection
    if(mysqli_connect_errno())
    {
        //Connection failed
        echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
    }