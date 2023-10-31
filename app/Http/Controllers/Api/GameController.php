<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameStartRequest;
use App\Models\Deck;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Will Start Game
    */
    public function startGame(GameStartRequest $request)
    {
        $activeGame = Game::where('status', 'active')->first();

        if ($activeGame) {
            // If there is an active game, players can join it
            $game = $activeGame;
        } else {
            // If there is no active game, create a new one
            $game = new Game();
            $game->start_time = now(); // Current time
            $game->end_time = now()->addMinutes(1); // 1 minute from now
            $game->status = 'active';

            $game->save();
        }

        return response()->json([
            'message' => 'Game is running',
            'game_id' => $game->id,
        ]);

    }
}
