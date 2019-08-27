<div class="text-left">
    <form method="POST" action="/generate/challenge">
        @csrf
        <label for="game">What game are you playing?</label>
        <select class="form-control" name="game_id" id="game">
            @foreach($games as $game)
                <option value="{{ $game->id }}">{{ $game->title }}</option>
            @endforeach
        </select>
        <br>
        <input type="checkbox" name="choose_character"> Am I choosing your character?
        <br>
        <label for="bonus_rules">How many bonus rules? (there is a limit of 4)</label>
        <select class="form-control" name="bonus_rules" id="bonus_rules">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <br>
        <div class="text-right">
            <input class="btn btn-primary borderlands-btn" type="submit" value="Generate me a challenge!">
        </div>
    </form>
</div>
