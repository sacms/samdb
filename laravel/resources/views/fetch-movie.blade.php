<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie API Example</title>
</head>
<body>
    <h1>Movie API Example</h1>
    
    <form action="{{ route('fetch-movie') }}" method="POST">
        @csrf
        <label for="movieId">Movie ID (e.g., tt1630029):</label>
        <input type="text" id="movieId" name="movieId" required>
        <br>
        <label for="accessToken">Access Token:</label>
        <input type="text" id="accessToken" name="accessToken" required>
        <br>
        <button type="submit">Fetch Movie Data</button>
    </form>

    @if (isset($response))
        <h2>API Response:</h2>
        <pre>{{ htmlspecialchars($response) }}</pre>
    @endif
</body>
</html>
