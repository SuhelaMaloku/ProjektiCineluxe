<?php
session_start();
session_destroy();
header("Location: Cineluxe.php");
exit;