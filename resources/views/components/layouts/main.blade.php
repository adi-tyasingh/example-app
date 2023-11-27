<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Cool Web App" }}</title>
    <link rel="stylesheet" href="{{ asset('css/layouts/main.css') }}">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="playlist-name">
            Playlist Name
            <div class="search-form">
                <form>
                    <input type="text" class="search-input" placeholder="Search song...">
                    <button type="submit" class="button">Search</button>
                </form>
            </div>
        </div>
        <div>
            <a href="#" class="button">Edit Playlist</a>
            <a href="#" class="button">New Playlist</a>
        </div>
    </header>

    <!-- Sidebar Section -->
    <aside>
        <h2>Saved Playlists</h2>
        <ul>
            <li>Playlist 1</li>
            <li>Playlist 2</li>
            <!-- Add more playlists as needed -->
        </ul>
    </aside>

    <!-- Main Content Section -->
    <main>
        <!-- Playlist Item -->
        <div class="playlist">
            <div class="playlist-details">
                <div class="playlist-name">Playlist 1</div>
                @yield('content') 
            </div>
        </div>

        <!-- Add more playlists as needed -->

    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>

</body>
</html>
