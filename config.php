<?php 


ini_set("display_errors",1);
session_start();

$conn=new mysqli("localhost","root","","bmst_small");// new calls mysqli
if ($conn->connect_error) {
    echo "failed";}
    else{
        echo "pass";
    }







?>