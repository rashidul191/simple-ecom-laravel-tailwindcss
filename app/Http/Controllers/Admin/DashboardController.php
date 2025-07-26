<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lib\Card;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    private function Card($title, $value)
    {
        return [
            'title' => $title,
            'value' => $value,
        ];
    }

    public function index()
    {
        $cards = [];

        $cards = array_merge($cards, [
            // Card::make('Total User', User::count()),

            // [
            //     'title' => 'Total User',
            //     'value' => User::count(),
            // ],
            // [
            //     'title' => 'Total Order',
            //     'value' => User::count(),
            // ],

           Card::make('Total User', User::count()),

        ]);

        // dd($cards);

        return view('admin.dashboard', compact('cards'));
    }
}
