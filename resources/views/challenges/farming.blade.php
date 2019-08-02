{{-- need needs_to_be_weapon and game_id --}}
<div class="text-left">
    <form method="POST" action="/farm">
        @csrf
        <label for="game">What game are you playing?</label>
        <select class="form-control" name="game_id" id="game">
            @foreach($games as $game)
                <option value="{{ $game->id }}">{{ $game->title }}</option>
            @endforeach
        </select>
        <br>
        <input type="checkbox" name="needs_to_be_weapon"> Does the item need to be a weapon?
        <br>
        <div class="text-right">
            <input class="btn btn-primary borderlands-btn" type="submit" value="Get me a legendary!">
        </div>
    </form>
</div>
