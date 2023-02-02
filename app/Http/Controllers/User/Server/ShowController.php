<?php

namespace App\Http\Controllers\User\Server;

use App\Http\Controllers\Controller;
use App\Models\Server;

class ShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke(Server $server)
    {
        return view('user.server.show', compact('server'));
    }
}
