<?php

class Auth{
    
    public function afterLogin(){
        @session_start();
        if(isset($_SESSION['usser'])){
            header("Location: /PAPANTLADAE8/usser/bienvenida");
            exit;
        }
    }

    public function needLogin(){
    	@session_start();
        if(!isset($_SESSION['usser'])){
            header("Location: /PAPANTLADAE8/login");
            exit;
        }
    }
}