<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta_title') | {{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_desc')">

    <link href="{{ asset('/css/css-dist/main.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
        integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('style')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>

                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner justify-content-center">
                            <div class="">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="/">
                                            {{config('app.name')}}
                                        </a>
                                        , Copyright &copy; {{date('Y')}}. All right reserved.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/scripts-init/app.js') }}"></script>
    @yield('script')
</body>

</html>
