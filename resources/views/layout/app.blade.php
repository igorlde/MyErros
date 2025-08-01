<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyErros')</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <h2>@yield('title')</h2>
</head>
<body>
    <h2>@yield('title')</h2>
    @yield('content')
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    @yield('scripts')

</body>
</html>