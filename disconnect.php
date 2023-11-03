<?php
require_once 'utils/common.php';
require_once 'utils/database.php';
session_destroy();
header('Location: http://localhost/Memories/index.php');
