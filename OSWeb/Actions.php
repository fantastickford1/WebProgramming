<?php
/**
 * Created by PhpStorm.
 * User: Karlos
 * Date: 3/10/2016
 * Time: 9:00 PM
 */

session_start();

include 'Connection.php';
include '_database_access.php';

if (isset($_SESSION['username'])){
    if (isset($_POST['action'])){
        switch ($_POST['action']){
            case 'create':
                addNote($conn);
                break;
            case 'delete':
                deleteNote($conn);
                break;
            default:
                break;
        }
    }
}