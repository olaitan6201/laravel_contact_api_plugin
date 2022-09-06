<?php

namespace App\Http\Controllers;

use App\Services\GooglePeople;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function allContacts(GooglePeople $people)
    {
        $data = $people->all();

        return response()->json(compact('data'));
    }
}
