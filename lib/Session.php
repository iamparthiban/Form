<?php
class Session{
    public static function init(){
        session_start();
        print_r("Session Started");
    }

    public static function set($key,$val){
        $_SESSION[$key] = $val;
    }
    
    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }

    public static function checkSession(){
        self::init();
        if(self::get("login")==false){
        print_r($_SESSION[$key]);
            self::destroy();
            header("Location:http://www.mazetech.co.in/demo/Form/admin/login.php");
        }
    }

    public static function destroy(){
        session_destroy();
        header("Location:http://www.mazetech.co.in/demo/Form/admin/login.php");
    }
}
?>