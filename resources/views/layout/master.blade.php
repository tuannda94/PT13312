<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT13312 - @yield('title')</title>
</head>
<body>
    <style>
        div {
            border: 1px solid;
        }
    </style>

    <div>
        <div class="header">Header</div>
        <div class="navbar">
            <ul>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
            </ul>
        </div>
        <div class="container">
            <div class="content">
                <div>@yield('table_name') table</div>
                <div>
                    @yield('table')
                </div>
            </div>
        </div>
        <div class="footer">Footer</div>
        @yield('custom')
    </div>

</body>
</html>
