@foreach ($musics as $music)
    {{ $music->YouTube_link }}
    {{ $music->music_name }}
    {{ $music->composer_name }}
    {{ $music->arranger_name }}
    {{ $music->performer_name }}
    {{ $music->channel_name }}
    <a href="{{ route('musics.show', $music) }}">show</a>
    <a href="{{ route('musics.edit', $music) }}">edit</a>
@endforeach

<a href="{{ route('musics.create') }}">new</a>