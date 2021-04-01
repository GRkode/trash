<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function create()
    {

        $agences = Agence::get();
        return view('backend.messages.form', compact('agences'));
    }
}
