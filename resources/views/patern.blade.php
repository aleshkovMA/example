<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark text-white border-bottom">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
            <span class="fs-4">Paste Task</span>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-white text-decoration-none" href="/newpaste">Создать пасту</a>
            <a class="me-3 py-2 text-white text-decoration-none" href="/auth">Авторизация</a>
            <a class="py-2 text-white text-decoration-none" href="/reg">Регистрация</a>
        </nav>
    </div>
<div class="container">@yield('main_content')</div>


</body>
</html>