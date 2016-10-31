<?php

$db = new mysqli(
        'eu-cdbr-azure-north-e.cloudapp.net',
        'b39bd113c5cf09',
        '19484f39',
        'pb1404886db'
);

if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');

}