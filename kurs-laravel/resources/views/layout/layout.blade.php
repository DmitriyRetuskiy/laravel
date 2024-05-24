<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">--}}
{{--    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">--}}
{{--    <link rel="manifest" href="assets/img/favicons/manifest.json">--}}
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('assets/js/config.js')}}"></script>
    <script src="{{asset('vendors/simplebar/simplebar.min.js')}}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('vendors/simplebar/simplebar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/theme-rtl.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('assets/css/user-rtl.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset('assets/css/user.css')}}" rel="stylesheet" id="user-style-default">

    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>

<main class="main" id="top">
    <div class="container" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
                <div class="d-flex align-items-center"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span>
                </div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                    <li class="nav-item dropdown"><a class="nav-link" href="snt.html" role="button" id="dashboards">СНТ</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Обо мне</a>
                        <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                            <div class="bg-white dark__bg-1000 rounded-3 py-2">
                                <a class="dropdown-item link-600 fw-medium" href="profile.html">Мои данные</a>
                                <a class="dropdown-item link-600 fw-medium" href="contacts.html">Контакты</a>
                                <a class="dropdown-item link-600 fw-medium" href="car.html">Транспорт</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" href="billing.html" role="button" id="billig">Расчеты</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="tickets.html" role="button" id="tickets">Обращения</a></li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-xl">
                            <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />

                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                            <a class="dropdown-item" href="../pages/user/settings.html">Настройки</a>
                            <a class="dropdown-item" href="../pages/authentication/card/logout.html">Выйти</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="content">
            <div class="card mt-3">
                <div class="card-header border-bottom border-200">
                    <h6 class="mb-0">Здравствуйте</h6>
                </div>
                <div class="card-body">
                    <div class="row gx-3">
                        <div class="col-xxl-4 col-md-6">
                            <div class="hover-bg-100 py-x1 text-center rounded-3 position-relative">
                                <div class="icon-item icon-item-xl shadow-none mx-auto mt-x1 bg-primary-subtle"><span class="text-primary" data-feather="hexagon"></span></div>
                                <h5 class="mt-3 mb-2"><a class="text-900 hover-primary stretched-link" href="snt.html">СНТ</a></h5>
                                <h6 class="w-75 mx-auto text-600 mb-x1">Все актуальные данные о СНТ и документы</h6>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="hover-bg-100 py-x1 text-center rounded-3 position-relative">
                                <div class="icon-item icon-item-xl shadow-none mx-auto mt-x1 bg-primary-subtle"><span class="text-primary" data-feather="user-check"></span></div>
                                <h5 class="mt-3 mb-2"><a class="text-900 hover-primary stretched-link" href="profile.html">Обо мне</a></h5>
                                <h6 class="w-75 mx-auto text-600 mb-x1">Обновляйте данные о себе, своем участке и транспорте</h6>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="hover-bg-100 py-x1 text-center rounded-3 position-relative">
                                <div class="icon-item icon-item-xl shadow-none mx-auto mt-x1 bg-info-subtle"><span class="text-info" data-feather="file-text"></span></div>
                                <h5 class="mt-3 mb-2"><a class="text-900 hover-primary stretched-link" href="billig.html">Расчеты</a></h5>
                                <h6 class="w-75 mx-auto text-600 mb-x1">Следите за начислениями и расчетами с товариществом</h6>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="hover-bg-100 py-x1 text-center rounded-3 position-relative">
                                <div class="icon-item icon-item-xl shadow-none mx-auto mt-x1 bg-info-subtle"><span class="text-info" data-feather="alert-circle"></span></div>
                                <h5 class="mt-3 mb-2"><a class="text-900 hover-primary stretched-link" href="tickets.html">Обращения</a></h5>
                                <h6 class="w-75 mx-auto text-600 mb-x1">Переписка с председателем, правлением и сотрудниками</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2023 &copy; <a href="https://themewagon.com">Themewagon</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v3.18.0</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>
</main>

<!-- ===============================================-->
<!--    into footer   -->
<!-- ===============================================-->

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="{{asset('vendors/popper/popper.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/anchorjs/anchor.min.js')}}"></script>
<script src="{{asset('vendors/is/is.min.js')}}"></script>

<!-- ===============================================-->
<!--    для иконок перенести в файл на будущее      -->
<!-- ===============================================-->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
<script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
<script src="{{asset('vendors/list.js/list.min.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>


</body>

</html>
