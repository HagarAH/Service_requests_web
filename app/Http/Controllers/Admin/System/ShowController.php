<?php

namespace App\Http\Controllers\Admin\System;

use App\Http\Controllers\Controller;
use App\Models\System;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(System $system)
    {
        return view('admin.system.show', compact('system'));
    }
}
