<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}</h1>

    <p>Email: {{ $user->email }}</p>

    <!-- Add more profile information here -->

    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
