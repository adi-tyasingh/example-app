<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify-like Playlist</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: 250px 1fr;
            grid-template-rows: auto 1fr auto;
            grid-template-areas:
                "header header"
                "sidebar main"
                "footer footer";
            min-height: 100vh;
        }

        header {
            grid-area: header;
            background-color: #1DB954;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        aside {
            grid-area: sidebar;
            background-color: #040404;
            color: #fff;
            padding: 20px;
        }

        main {
            grid-area: main;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        footer {
            grid-area: footer;
            background-color: #040404;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .playlist {
            border: 1px solid #2C2C2C;
            border-radius: 10px;
            overflow: hidden;
            background-color: #121212;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            cursor: pointer;
            position: relative;
        }

        .playlist:hover {
            transform: translateY(-5px);
        }

        .playlist-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .playlist-details {
            padding: 15px;
        }

        .playlist-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .playlist-songs {
            color: #b3b3b3;
        }

        .search-form {
            margin-left: 20px;
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .button {
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #1DB954;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #169947;
        }

        .song {
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
        }

        .song:not(:last-child) {
            margin-bottom: 10px;
        }

        .song-title {
            font-weight: bold;
            font-size: 16px;
        }

        .song-details {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            color: #b3b3b3;
        }
    </style>
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
                <div class="playlist-songs">
                    <!-- Sample Songs -->
                    <div class="song">
                        <div class="song-title">Stairway to Heaven</div>
                        <div class="song-details">
                            <span>Artist: Led Zeppelin</span>
                            <span>Album: Sample Album</span>
                            <span>Duration: 8:05</span>
                        </div>
                    </div>

                    <div class="song">
                        <div class="song-title">Hotel California</div>
                        <div class="song-details">
                            <span>Artist: Eagles</span>
                            <span>Album: Hotel California</span>
                            <span>Duration: 6:31</span>
                        </div>
                    </div>

                    <div class="song">
                        <div class="song-title">Dear Mr. Fantasy</div>
                        <div class="song-details">
                            <span>Artist: Traffic</span>
                            <span>Album: Sample Album</span>
                            <span>Duration: 5:34</span>
                        </div>
                    </div>

                    <div class="song">
                        <div class="song-title">California Dreamin'</div>
                        <div class="song-details">
                            <span>Artist: The Mamas and the Papas</span>
                            <span>Album: Sample Album</span>
                            <span>Duration: 2:40</span>
                        </div>
                    </div>
                    <!-- End Sample Songs -->
                </div>
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
