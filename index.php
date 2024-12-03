<?php
require_once('/home/ddosyaa/PhpstormProjects/App/templates/libs/vendor/smarty/smarty/libs/Smarty.class.php');
use Smarty\Smarty;
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates/tmp');

$username = 'DooSyaa';
$email = 'doosyaa@example.com';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $smarty->display('homePage.tpl');
        break;
    case 'login':
        $smarty->display('login.tpl');
        break;
    case 'logout':
        $smarty->assign('username', $username);
        $smarty->assign('email', $email);
        $smarty->display('logout.tpl');
        break;
    case 'access_link':
        $smarty->display('access_link.tpl');
        break;
    case 'email_notification':
        $smarty->display('email_notification.tpl');
        break;
    case 'directory':
        $smarty->display('directory.tpl');
        break;
}

?>
