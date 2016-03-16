<?php

$base_url = 'app/view/pages/main.php';
$db_path = 'config/db/db.php';
$paths = [$base_url, $db_path];
foreach($paths as $path) {
    require($path);
}
 ?>