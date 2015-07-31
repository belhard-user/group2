<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BarController extends Controller
{
    public function index($id)
    {
        return $id;
    }
}
