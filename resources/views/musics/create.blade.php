<h1>New Musics</h1>

<form method="POST" action="/musics">
    @csrf
    <input type="text" name="YouTube_link">
    <input type="text" name="music_name">
    <input type="text" name="composer_name">
    <input type="text" name="arranger_name">
    <input type="text" name="performer_name">
    <input type="text" name="channel_name">
    <button type="submit">登録する</button>
</form>

<a href="/musics">戻る</a>