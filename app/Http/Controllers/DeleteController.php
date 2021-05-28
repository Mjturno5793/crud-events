<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Redirect;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index ($id)
    {
        Events::find($id)->delete();

        return Redirect::route('home');

    }
}
