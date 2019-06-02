<?php 

function folder_error() {
  echo "Неверно указан каталог\n";
}

$line = readline("Укажите каталог в котором установлен Wordpress: ");
if(is_dir($line)) {
  $plugins_address = rtrim($line, "/") . "/wp-content/plugins/";
}
