<?php

namespace App\Http\Controllers\User\Server;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {


        $server = new Server();
        $server->cpu_id = $request->cpu_id;
        $server->ram_id = $request->ram_id;
        $server->disk_id = $request->disk_id;
        $server->system_id = $request->system_id;
        $server->reason = $request->reason;
        $server->description = $request->description;
        $server->kayit = $request->kayit;
        $server->ic_ag = $request->ag === 'ic_ag';
        $server->dis_ag = $request->ag === 'dis_ag';

        $user_id = Auth::id();

        $profile_id = Profile::where('user_id', $user_id)->first();;


        $server->profile_id = $profile_id->id;

        $server->save();


        return redirect()->route('server.index');

    }
}
