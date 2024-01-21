<?php
if (defined('PDO::ATTR_DRIVER_NAME')) {
    print_r(PDO::getAvailableDrivers());
} else {
    echo 'PDO unavailable';
}

if ( extension_loaded('pdo') ) {
    echo '<br>', 'PDO Available';
}
echo '<pre>';
print_r(get_loaded_extensions());