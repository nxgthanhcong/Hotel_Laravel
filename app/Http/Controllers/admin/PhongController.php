<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phong;
use App\Models\LoaiPhong;
use Session;
use App\Classes\Helper;

class PhongController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.phong.';
        $this->viewnamespace='phong';
    }
    public function index()
    {
        $ps = Phong::all();
        return view($this->viewprefix.'index')->with('ps', $ps);
    }
    public function create()
    {
        $lps = LoaiPhong::all();
        return view($this->viewprefix.'create',compact('lps'));
    }
    public function store(Request $request)
    {
        $p = new Phong();
        $this->validate($request, [
            'TenPhong' => 'required',
            'LoaiPhong' => 'required',
            'GiaPhong' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $p->TenPhong = $request->TenPhong;
        $p->LoaiPhong = $request->LoaiPhong;
        $p->GiaPhong = $request->GiaPhong;
        if($p->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('phong.index'); 
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        $p = Phong::find($id);
        $lps = LoaiPhong::all();
        return view($this->viewprefix.'edit',compact('p', 'lps'));
    }
    public function update(Request $request, $id)
    {
        $p = Phong::find($id);
        $this->validate($request, [
            'TenPhong' => 'required',
            'LoaiPhong' => 'required',
            'GiaPhong' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $p->TenPhong = $request->TenPhong;
        $p->LoaiPhong = $request->LoaiPhong;
        $p->GiaPhong = $request->GiaPhong;
        if($p->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('phong.index'); 
    }
    public function destroy($id)
    {
        $p = Phong::find($id);
        if($p->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('phong.index');
    }
    public function listPhong()
    {
        $ps = Phong::all();
        return view('user.room.rooms',compact('ps'));
    }
}
