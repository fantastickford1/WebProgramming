<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 2/24/2016
 * Time: 10:18 PM
 */
    session_start();
    session_unset();
    session_destroy();
    header("Location:LogIn.php");