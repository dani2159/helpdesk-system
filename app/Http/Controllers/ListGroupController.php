<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ListGroup;
use App\Models\SettingFonnte;

class ListGroupController extends Controller
{
    public function index(){

        $data = ListGroup::all();

        return view('list-group.index', compact('data'));
    }
}
