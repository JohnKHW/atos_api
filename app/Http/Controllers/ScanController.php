<?php

namespace App\Http\Controllers;

use App\Classes\Marker;
use App\Models\Cashier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Process;

class ScanController extends Controller
{
    public function qrcode($uuid)
    {
        $cashier = Cashier::where([
            ['token', $uuid],
            ['active', false]
        ])->first();
        if ($cashier == null) {
            return response([
                'message' => 'Invalid QrCode',
            ], 404);
        }

        $cashier->active = true;
        $cashier->save();

        $mark = Marker::getCashierMark($cashier);
        $user = User::find(Auth::id());
        $user->net_points += $mark;
        $user->save();

        return response([
            'message' => 'Success',
            'score' => $mark,
            'supermarket_food' => $cashier->supermarket_food,
        ], 200);
    }

    public function recognize(Request $request)
    {
        error_log('OK');
        error_log($request);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = 'ai-' . time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        $path = './images/' . $imageName;
        $process = shell_exec("py ./AI/inference.py --image " . $path);

        return json_decode($process);
    }
}
