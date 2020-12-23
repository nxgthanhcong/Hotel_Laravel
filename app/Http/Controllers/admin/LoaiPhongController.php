<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoaiPhong;
use Session;
use App\Classes\Helper;

class LoaiPhongController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.loaiphong.';
        $this->viewnamespace='loaiphong';
    }
    public function index()
    {
        $lps = LoaiPhong::all();
        return view($this->viewprefix.'index')->with('lps', $lps);
    }
    public function create()
    {
        return view($this->viewprefix.'create');
    }
    public function store(Request $request)
    {
        $lp = new LoaiPhong();
        $this->validate($request, [
            'TenLoai' => 'required',
            'Mota' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $lp->TenLoai = $request->TenLoai;
        $lp->Mota = $request->Mota;
        if($lp->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaiphong.index'); 
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        $lp = LoaiPhong::find($id);
        return view($this->viewprefix.'edit')->with('lp', $lp);
    }
    public function update(Request $request, $id)
    {
        $lp = LoaiPhong::find($id);
        $this->validate($request, [
            'TenLoai' => 'required',
            'Mota' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $lp->TenLoai = $request->TenLoai;
        $lp->Mota = $request->Mota;
        if($lp->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaiphong.index');
    }
    public function destroy($id)
    {
        $lp = LoaiPhong::find($id);
        if($lp->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaiphong.index');
    }
}
