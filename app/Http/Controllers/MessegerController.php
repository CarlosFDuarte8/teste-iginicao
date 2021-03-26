<?php

namespace App\Http\Controllers;

use App\Models\Messeger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessegerController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\Messeger  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $messegens = Messeger::where('user_id', Auth::user()->id)->paginate(15);
        return view('messegens.index', compact('messegens'));
    }

}