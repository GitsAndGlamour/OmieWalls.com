<html lang="en" ng-app="domain">
<?php

$snippets = ['head', 'nav', 'header', 'main', 'footer'];

foreach($snippets as $snippet) {
    $path = 'app/view/pages/snippets/main/'.$snippet.'.html';
    require ($path);
}
?>
</html>