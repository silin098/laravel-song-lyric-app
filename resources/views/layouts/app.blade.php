<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
<x-header/>

<div class="container">
    {{$slot}}
</div>

<x-footer/>
</body>
</html>
