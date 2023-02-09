<?php

namespace App\Http\Controllers\Admin\Cpu;

use App\Http\Controllers\Controller;
use App\Models\Cpu;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Cpu $cpu)
    {
        return view('admin.cpu.show', compact('cpu'));
    }
}
