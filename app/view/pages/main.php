<?php

$head = 'app/view/pages/snippets/main/head.html';
$header = 'app/view/pages/snippets/main/header.html';
$footer = 'app/view/pages/snippets/main/footer.html';

$snippets = [$head, $header, $footer];

foreach($snippets as $snippet) {
    require ($snippet);
}
?>