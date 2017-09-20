<?php
session_start();

unset($_SESSION["user"]);
unset($_SESSION["passwd"]);
session_destroy();
header("Location: ActVariablesSesio.html");
exit;

