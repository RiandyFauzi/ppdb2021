<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB</title>
</head>
<body>
    <h3>PPDB ONLINE</h3>
    <ul>
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('siswa.create') }}">Form</a>
        </li>
        <li>
            <a href="{{ route('siswa.index') }}">List</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>