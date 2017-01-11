<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class Token {
    public static function generate(){
		$_SESSION['token_time']=time();
       return  $_SESSION['token']=base64_encode(openssl_random_pseudo_bytes(32));
		 //return $_SESSION['token'];
    }
} 