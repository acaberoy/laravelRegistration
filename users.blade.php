<!DOCTYPE html>
<html>
<head>
    <title>Registered Users</title>
</head>
<body>
    <h1>Registered Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->email }} ({{ $user->name }})</li>
        @endforeach
    </ul>
    <a href="/">Back to Registration</a>
</body>
</html>
