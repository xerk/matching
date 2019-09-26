<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $user = User::find($id);
        $user->aprrove = true;
        $user->save();

        $data = [
                'message'    => __('advanced.Successfully Approve')." {$user->name}",
                'alert-type' => 'success',
            ];
        return back()->with($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function refuse($id)
    {
        $user = User::find($id);
        $user->aprrove = false;
        $user->save();

        $data = [
                'message'    => ('advanced.Successfully Refuse')." {$user->name}",
                'alert-type' => 'success',
            ];
        return back()->with($data);
    }
}
