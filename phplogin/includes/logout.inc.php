<?php

// Start Session, unset any open sessions, destroy session, return to index page
session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();
