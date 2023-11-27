<x-layouts.main pageName='All Songs'>
    @section('content')
    <x-song-list :songs="$songs">
    </x-song-list>
    @endsection
</x-layouts.main>
