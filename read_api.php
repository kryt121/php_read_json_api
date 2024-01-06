<?php

$link = "http://verdaduras.com.pl/api_testy/index.php/user/list?limit=20";
$content=file_get_contents($link);
echo $content;
echo "yyyy\n";
$data = json_decode($content,true);
foreach ( $data as $fields) {
   foreach ( $fields as $field) {
        echo $field;
        echo "\n";
   }
}

print_r($data)
?>
