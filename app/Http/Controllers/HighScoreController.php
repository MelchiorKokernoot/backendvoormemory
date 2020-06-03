<?php

namespace App\Http\Controllers;

use App\Game;
use App\HighScore;
use App\Http\Requests\UpdateHighscoreRequest;
use App\User;

class HighScoreController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param \App\HighScore $highScore
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function show(Game $game)
    {
        return HighScore::query()->where('game_id', $game->id)->orderBy('score', 'DESC')->get();
    }

    public function myscores(User $user)
    {
        return $user->highscores()->orderBy('score', 'DESC')->get();
    }

    public function update(UpdateHighscoreRequest $request)
    {
        return User::find($request->get('user_id'))->highscores()->attach(Game::find($request->get('game_id')), ['score' => $request->get('score')]);
    }

}
