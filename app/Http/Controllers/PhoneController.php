<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){

        $users = Phonebook::all();
        return view('phones/index', compact('users'));
    }

}
