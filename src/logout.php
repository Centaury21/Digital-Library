<?php
session_start();
session_unset();
session_destroy();
header('Location: ../index.php?pesan=info_logout');
exit();