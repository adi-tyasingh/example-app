<x-layouts.main pageName='Playlist - {{$playlistId}}'>
    @section('content')
    <x-song-list :songs="$songs">
    </x-song-list>
    @endsection
</x-layouts.main>