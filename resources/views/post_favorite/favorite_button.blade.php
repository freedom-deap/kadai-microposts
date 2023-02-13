@if (Auth::user()->is_favorite($micropost->id))
    {{-- お気に入りボタンのフォーム --}}
    <form method="POST" action="{{ route('user.unfavorite', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm normal-case">unfavorite</button>
    </form>
@else
    {{-- お気に入りボタンのフォーム --}}
    <form method="POST" action="{{ route('user.favorite', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-warning btn-sm normal-case">favorite</button>
    </form>
@endif