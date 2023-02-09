<?php

namespace App\Http\Controllers\Admin\Daire;

use App\Http\Controllers\Controller;
use App\Models\Daire;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Daire $daire)
    {
        return view('admin.daire.show', compact('daire'));
    }
}
