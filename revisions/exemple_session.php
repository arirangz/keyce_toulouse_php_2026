<?php

session_start();

$_SESSION["test"] = "abc";

var_dump($_SESSION);
