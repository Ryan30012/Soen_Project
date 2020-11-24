<?php

$hash = '$2y$10$vOYQwn0haa9NnRx7zt/ftuKMUXkee9yZGd3C.QPsx2xlWpfwyJoCe';

if (password_verify('WebsiteSPCA22@', $hash)) {
    echo 'hey';
}
elseif (password_verify('SPCAwebsite22@', $hash)) {
    echo 'hey2';
}else{
    echo 'else';
}