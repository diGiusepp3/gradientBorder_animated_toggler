<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pagetitle ?? ''; ?></title>
    <meta name="description" content="<?php echo $description ?? ''; ?>">
    <?php if (isset($keywords) && is_array($keywords)) : ?>
        <meta name="keywords" content="<?php echo implode(', ', $keywords); ?>">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">    <!-- Theme Selector CSS -->
    <link href="/styles.css" rel="stylesheet">
    <script src="/jquery/jquery.min.js"></script>
</head>
<body>
<header>
    <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="webcrafters logo"></a>
    <div class="theme-selector">
        <i class="bi bi-moon" onclick="setTheme('dark')"></i>
        <i class="bi bi-sun" onclick="setTheme('light')"></i>
    </div>
    <div class="navbar-toggler">
        <i class="bi bi-chevron-double-down"></i>
    </div>
</header>