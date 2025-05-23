<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,500,600,700" rel="stylesheet">
    
    <!-- Favicon и иконки -->
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- Дополнительные иконки для десктопных браузеров -->
    <link type="image/png" sizes="16x16" rel="icon" href="<?php echo e(asset('icons/favicon-16x16.png')); ?>">
    <link type="image/png" sizes="32x32" rel="icon" href="<?php echo e(asset('icons/favicon-32x32.png')); ?>">
    <link type="image/png" sizes="96x96" rel="icon" href="<?php echo e(asset('icons/favicon-96x96.png')); ?>">
    <link type="image/png" sizes="120x120" rel="icon" href="<?php echo e(asset('icons/favicon-120x120.png')); ?>">

    <!-- Иконки для Android -->
    <link type="image/png" sizes="72x72" rel="icon" href="<?php echo e(asset('icons/android-icon-72x72.png')); ?>">
    <link type="image/png" sizes="96x96" rel="icon" href="<?php echo e(asset('icons/android-icon-96x96.png')); ?>">
    <link type="image/png" sizes="144x144" rel="icon" href="<?php echo e(asset('icons/android-icon-144x144.png')); ?>">
    <link type="image/png" sizes="192x192" rel="icon" href="<?php echo e(asset('icons/android-icon-192x192.png')); ?>">
    <link type="image/png" sizes="512x512" rel="icon" href="<?php echo e(asset('icons/android-icon-512x512.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('manifest.json')); ?>">

    <!-- Иконки для iOS (Apple) -->
    <link sizes="57x57" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-57x57.png')); ?>">
    <link sizes="60x60" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-60x60.png')); ?>">
    <link sizes="72x72" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-72x72.png')); ?>">
    <link sizes="76x76" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-76x76.png')); ?>">
    <link sizes="114x114" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-114x114.png')); ?>">
    <link sizes="120x120" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-120x120.png')); ?>">
    <link sizes="144x144" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-144x144.png')); ?>">
    <link sizes="152x152" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-152x152.png')); ?>">
    <link sizes="180x180" rel="apple-touch-icon" href="<?php echo e(asset('icons/apple-touch-icon-180x180.png')); ?>">

    <!-- Иконки для MacOS (Apple) -->
    <link color="#e52037" rel="mask-icon" href="<?php echo e(asset('icons/safari-pinned-tab.svg')); ?>">

    <!-- Иконки и цвета для плиток Windows -->
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('icons/mstile-144x144.png')); ?>">
    <meta name="msapplication-square70x70logo" content="<?php echo e(asset('icons/mstile-70x70.png')); ?>">
    <meta name="msapplication-square150x150logo" content="<?php echo e(asset('icons/mstile-150x150.png')); ?>">
    <meta name="msapplication-wide310x150logo" content="<?php echo e(asset('icons/mstile-310x150.png')); ?>">
    <meta name="msapplication-square310x310logo" content="<?php echo e(asset('icons/mstile-310x310.png')); ?>">
    <meta name="application-name" content="<?php echo e(config('app.name', 'Laravel')); ?>">
    <meta name="msapplication-config" content="<?php echo e(asset('browserconfig.xml')); ?>">
    
    <!-- PWA Meta Tags -->
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Платформа для управления сертификатами">
    <link rel="manifest" href="<?php echo e(asset('manifest.json')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('icons/icon-192x192.png')); ?>">
    
    <!-- Иконки -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">

    <!-- При проблемах с Vite можно подключить Bootstrap напрямую -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js', 'resources/js/pwa.js']); ?>
</head>
<body>
    <div id="app">
      
        <!-- Основное содержимое с отступом для фиксированного меню -->
        <main style="">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <style>
        div#app {
    overflow-x: hidden;
}
    </style>
    <!-- Скрипты Bootstrap напрямую для гарантированной работы -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Эффект прокрутки для меню
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled', 'bg-white');
                    navbar.classList.remove('bg-transparent');
                } else {
                    navbar.classList.remove('navbar-scrolled', 'bg-white');
                    navbar.classList.add('bg-transparent');
                }
            }
        });

        // Глобальная инициализация компонентов Bootstrap
        document.addEventListener('DOMContentLoaded', function() {
            // Инициализация всех тултипов
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Инициализация всех поповеров
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });
        });
    </script>
    
</body>
</html>
<?php /**PATH C:\OSPanel\domains\sertLendos\resources\views/layouts/app.blade.php ENDPATH**/ ?>