<?
session_start();
//update username :quocthuan.2T => 2T.quocthuan
 $_SESSION['login']['username'] = 'new.quocthuan';
 echo  $_SESSION['login']['username'] ;

?>