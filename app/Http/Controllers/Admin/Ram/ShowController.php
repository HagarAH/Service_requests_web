<?php

namespace App\Http\Controllers\Admin\Ram;

use App\Http\Controllers\Controller;
use App\Models\Ram;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Ram $ram)
    {
        return view('admin.ram.show', compact('ram'));
    }
}
