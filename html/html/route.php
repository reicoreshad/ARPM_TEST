<?php
switch($_GET['url']) {
    case 'folder1':
        $view = 'folder1.php';
        break;
    case 'folder2':
        $view = 'folder2.php';
        break;
    default:
        $view = 'home.php';
        break;
}
include 'PageController.php';
$page = new PageController();
$page->render($view);
?>