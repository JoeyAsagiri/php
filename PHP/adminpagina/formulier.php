<?php
setcookie("gebruikerCookie", "", time()-3600);
setcookie("administratorCookie", "", time()-3600);
include("formulier.html");
?>