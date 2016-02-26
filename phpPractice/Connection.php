<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 2/24/2016
 * Time: 6:41 PM
 */
//Create connection
    $conn = new mysqli("localhost","root","root","users");
//Check connection
    if ($conn -> connect_error) {
        header("Location:Error.html");
    }

