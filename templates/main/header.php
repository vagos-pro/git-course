<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="ru" class="ie8"> <![endif]-->
<!--[if (gt IE 8)]><!--> <html lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>Тестовый заголов</title>
    <link href="favicon.ico" rel="shortcut icon">
    <link href="templates/main/assets/stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="templates/main/assets/stylesheets/responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="templates/main/assets/stylesheets/theme.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="templates/main/assets/stylesheets/fonts.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrapper">
    <!-- Page Header -->
    <header id="masthead">
        <nav class="navbar navbar-static-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <h1 class="brand">
                        <a href="/">Тестовый сайт</a>
                    </h1>
                    <!-- Top Menu -->
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <?php $menu = menu::getData();
                            foreach ($menu as $item)
                            echo <<<MENU
                            <li><a href="{$item['link']}">{$item['text']}</a></li>
MENU;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
