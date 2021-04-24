<?php

namespace App\Http\Controllers;

use App\Classes\Marker;
use App\Models\Cashier;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
        error_log($mark);

        return response([
            'message' => 'Success',
            'score' => $mark,
            'supermarket_food' => $cashier->supermarket_food,
        ], 200);
    }

    public function recognize(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = 'ai-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $path = './images/' . $imageName;
        $process = json_decode(shell_exec("py ./AI/inference.py --image " . $path));
        File::delete($path);



        $food = Food::where(['system_name' => $process[0]->system_name])
            ->orWhere(['system_name' => $process[1]->system_name])
            ->get();

        $mark = Marker::getFoodMark($food->first());

        $user = User::find(Auth::id());
        $user->net_points += $mark;
        $user->save();

        return response([
            "food" => $food,
            "mark" => $mark,
        ], 200);
    }
}
