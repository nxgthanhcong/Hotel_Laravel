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
        //$this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.phong.';
        $this->viewnamespace='phong';
    }
    public function index()
    {
        $ps = Phong::all();
        
        return view($this->viewprefix.'index')->with('ps', $ps);
    }
    public function index2()
    {
        $lps = LoaiPhong::all();
        $ps = Phong::all();
        return view('user.room.rooms',compact('ps','lps'));
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
            'Mota' => 'required',
            'image' => 'required',
            'Songuoi' => 'required',
        ]);
        $p->Hinhanh = Helper::imageUpload($request);    
        $p->TenPhong = $request->TenPhong;
        $p->Mota = $request->Mota;
        $p->Songuoi = $request->Songuoi;
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
        if($request->hasFile('image')){
            $p->Hinhanh = Helper::imageUpload($request);
        }
        //$Category->image = Helper::imageUpload($request);
        
        $p->Mota = $request->Mota;
        $p->Songuoi = $request->Songuoi;
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
    
    public function loc($id){
        $ps = LoaiPhong::find($id)->phong;
        $lps = LoaiPhong::all();
        return view('user.room.rooms',compact('ps','lps'));
    }

    public function RoomDetail($MaPhong){
        $p = Phong::find($MaPhong);
        
        return view('user.room.roomdetail',compact('p'));
    }
}
