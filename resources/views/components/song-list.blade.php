<div class="playlist-songs">
                    <!-- Sample Songs -->
                    @foreach ($songs as $song)
                    <div class="song">
                        <div class="song-title">{{ $song->title }}</div>
                        <div class="song-details">
                            <span>{{ $song->artist }}</span>
                            <span>Album: Sample Album</span>
                            <span>Duration: {{ $song->duration }}</span>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Sample Songs -->
</div>