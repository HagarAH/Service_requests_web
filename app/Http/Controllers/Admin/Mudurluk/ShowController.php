<?php

namespace App\Http\Controllers\Admin\Mudurluk;

use App\Http\Controllers\Controller;
use App\Models\Mudurluk;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Mudurluk $mudurluk)
    {
        return view('admin.mudurluk.show', compact('mudurluk'));
    }
}
