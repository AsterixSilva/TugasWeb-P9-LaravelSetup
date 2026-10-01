<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Halo, {{ $nama }}!</h1>

    <p>Mata Kuliah: {{ $matakuliah }}</p>
    <p>Semester: {{ $semester }}</p>

    <hr>

    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/contact">Contact</a>
</body>
</html>