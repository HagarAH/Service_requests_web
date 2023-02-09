<?php

namespace App\Http\Controllers\Admin\Disk;

use App\Http\Controllers\Controller;
use App\Models\Disk;

class ShowController extends Controller
{
    public function __invoke(Disk $disk)
    {
        return view('admin.disk.show', compact('disk'));
    }
}
