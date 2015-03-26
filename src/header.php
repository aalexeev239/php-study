<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=980">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />


  <title>Группа компаний «АЭМ»</title>

  <link href="css/style.min.css" rel="stylesheet" media="screen">

  <script>
    document.documentElement.className =
       document.documentElement.className.replace("no-js","js");
  </script>

  <script src="grunticon.loader.js"></script>
  <script>
    grunticon(["css/grunticon-icons.data.svg.css", "css/grunticon-icons.data.png.css", "css/grunticon-icons.fallback.css"], grunticon.svgLoadedCallback);
  </script>
  <noscript><link href="css/grunticon-icons.fallback.css" rel="stylesheet"></noscript>

</head>

<body>
  <div class="fixed-nav" id="js-fixed-nav">
    <div class="fixed-nav__container">
      <div class="fixed-nav__logo">
      <a href="/"><p class="h1">Crazy php</p></a>
      </div>
      <div class="fixed-nav__nav">
        <nav class="nav nav--fixed">
          <ul>
            <li <?php if ($pageAction == 'about') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=strings"><span class="nav__span"><span data-hover="Строки">Строки</span></span></a></li>
            <li <?php if ($pageAction == 'activities') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=activities"><span class="nav__span"><span data-hover="Деятельность">Деятельность</span></span></a></li>
            <li <?php if ($pageAction == '  projects') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=projects"><span class="nav__span"><span data-hover="Проекты">Проекты</span></span></a></li>
            <li <?php if ($pageAction == 'contacts') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=contacts"><span class="nav__span"><span data-hover="Контакты">Контакты</span></span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <header class="page-header js-stick-nav-after-me">
      <div class="header-top">
        <div class="container">
        <a href="/"><p class="h1">Crazy php</p></a>
        </div>
      </div>
      <div class="page-nav">
        <div class="container">
          <div class="row">
            <div class="col8">
              <nav class="nav">
                <ul>
                  <li <?php if ($pageAction == 'about') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=strings"><span class="nav__span"><span data-hover="Строки">Строки</span></span></a></li>
                  <li <?php if ($pageAction == 'activities') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=activities"><span class="nav__span"><span data-hover="Деятельность">Деятельность</span></span></a></li>
                  <li <?php if ($pageAction == 'projects') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=projects"><span class="nav__span"><span data-hover="Проекты">Проекты</span></span></a></li>
                  <li <?php if ($pageAction == 'contacts') { echo 'class="active"'; } ?>><a href="<?= $baseUrl?>/index.php?page=contacts"><span class="nav__span"><span data-hover="Контакты">Контакты</span></span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <?php
        if (strlen($pageTitle) > 0) {
       ?>
      <div class="page-title">
        <div class="container">
          <div class="row">
            <div class="col8">
              <h1 class="page-title__caption">
                <?= $pageTitle ?>
              </h1>
            </div>
            <?php
              if ($pageAction == 'contacts' || $pageAction == 'projects') {

              if ($pageAction == 'contacts') {
                if ($pageType == 'partners') {
                  $switchTypeOne   = '';
                  $switchTypeTwo  = 'checked';
                  $contentTypeOne  = '<a href="'.$baseUrl.'/index.php?page=contacts">Филиалы</a>';
                  $contentTypeTwo = 'Партнеры';
                } else {
                  $switchTypeOne   = 'checked';
                  $switchTypeTwo  = '';
                  $contentTypeOne  = 'Филиалы';
                  $contentTypeTwo = '<a href="'.$baseUrl.'/index.php?page=contacts&type=partners">Партнеры</a>';
                }
              } else {
                if ($pageType == 'clients') {
                  $switchTypeOne   = '';
                  $switchTypeTwo  = 'checked';
                  $contentTypeOne  = '<a href="'.$baseUrl.'/index.php?page=projects">Проекты</a>';
                  $contentTypeTwo = 'Клиенты';
                } else {
                  $switchTypeOne   = 'checked';
                  $switchTypeTwo  = '';
                  $contentTypeOne  = 'Проекты';
                  $contentTypeTwo = '<a href="'.$baseUrl.'/index.php?page=projects&type=clients">Клиенты</a>';
                }
              }
             ?>

            <div class="col4">
              <div class="page-title__switch switch">
                <input class="switch__inp switch__inp--master" type="radio" name="pageSwitch" id="switchAffiliates" <?= $switchTypeOne?>>
                <label class="switch__label" for="switchAffiliates">
                  <?= $contentTypeOne?>
                </label>
                <div class="switch__control"></div>
                <input class="switch__inp switch__inp--slave" type="radio" name="pageSwitch" id="switchTypeTwo" <?= $switchTypeTwo?>>
                <label class="switch__label"  for="switchTypeTwo">
                  <?= $contentTypeTwo?>
                </label>
              </div>
            </div>
            <?php
              }
             ?>
          </div>
        </div>
      </div>
      <?php
        }
       ?>
    </header>

    <main class="page-content">