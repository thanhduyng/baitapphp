<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_user;
use App\model_PhongBan;
use App\model_ChucDanh;
use Illuminate\Support\Facades\DB;


class userController extends Controller
{
    public function hienthi()
    {
        $users = model_user::all()->toArray();

        return view('list_user')->with('users', $users);
    }

    public function them()
    {
        $users = model_user::all()->toArray();
        // $cd = model_ChucDanh::all()->toArray();
        // $pb = model_PhongBan::all()->toArray();
        $cd = DB::table("chuc_danh")->pluck('tenChucDanh','id');
        $pb = DB::table("phong_ban")->pluck('tenPhongBan','id');
        // $pb = DB::table("phong_ban")
        // ->pluck("tenPhongBan","id");
        // var_dump($cd);
        // var_dump($pb);
        return view('them_user', compact(['users', 'cd','pb']));
    }

    public function save(Request $rq)
    {
        $users = new model_user();
        $users->name = $rq->name;
        $users->email = $rq->email;
        $users->password = $rq->password;
        $users->chucdanhid = $rq->tenChucDanh;
        $users->phongbanid = $rq->tenPhongBan;
        $users->save();
        return redirect()->Route('user');
    }

    public function sua($id)
    {
        $users = model_user::find($id)->toArray();
        $cd = model_ChucDanh::all()->toArray();
        $pb = model_PhongBan::all()->toArray();
        // dd($pb);
        return view('sua_user', compact(['users', 'cd','pb']));
    }

    public function update(Request $rq)
    {   
        $users = model_user::find($rq->id);
        $users->chucdanhid = $rq->chucdanhid;
        $users->phongbanid = $rq->phongbanid;
        $users->save();
        return redirect()->Route('user');
    }

    public function xoa($id)
    {
        model_user::find($id)->delete();
        return redirect()->Route('user');
    }
}
