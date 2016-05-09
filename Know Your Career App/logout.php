<?php

if(!isset($_SESSION)){
  session_start();
}

session_unset($_SESSION['username']);
session_destroy();

     echo '<meta http-equiv="refresh" content="0;url=index.html">';

?>