<?php

mb_internal_encoding("UTF-8");

$baseUrl = '/work/aem-php';
// $baseUrl = '';

$pageAction = isset($_GET['page']) ? $_GET['page'] : '';
$pageType = isset($_GET['type']) ? $_GET['type'] : '';
$pageFileName = '';
$pageTitle = '';


switch ($pageAction) {
  case 'strings':
    $pageTitle = 'Задания на строки';
    $pageFileName = 'strings.php';
    break;

  case 'activities':
    $pageTitle = 'Деятельность';
    $pageFileName = 'activities.php';
    break;

  case 'projects':
    $pageTitle = 'Проекты';
    $pageFileName = 'projects.php';
    if ($pageType == 'clients') {
      $pageTitle = 'Клиенты';
      $pageFileName = 'clients.php';
    }
    break;

  case 'contacts':
    $pageTitle = 'Компания';
    $pageFileName = 'contacts.php';
    if ($pageType == 'partners') {
      $pageFileName = 'contacts-partners.php';
    }
    break;

  default:
    $pageTitle = 'Главная';
    $pageFileName = 'main.php';
    break;
}

require_once 'header.php';

 ?>

<?php

require_once $pageFileName;

?>

<?php

require_once 'footer.php';

 ?>