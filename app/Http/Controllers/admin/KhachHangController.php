<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KhachHang;
use Session;
use App\Classes\Helper;

class KhachHangController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.khachhang.';
        $this->viewnamespace='khachhang';
    }
    public function index()
    {
        $khs = KhachHang::all();
        return view($this->viewprefix.'index')->with('khs', $khs);
    }
    public function create()
    {
        return view($this->viewprefix.'create');
    }
    public function store(Request $request)
    {
        $kh = new KhachHang();
        $this->validate($request, [
            'TenKH' => 'required',
            'DiaChi' => 'required',
            'Sdt' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $kh->TenKH = $request->TenKH;
        $kh->DiaChi = $request->DiaChi;
        $kh->Sdt = $request->Sdt;
        if($kh->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('khachhang.index');  
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        $kh = KhachHang::find($id);
        return view($this->viewprefix.'edit')->with('kh', $kh);
    }
    public function update(Request $request, $id)
    {
        $kh = KhachHang::find($id);
        $this->validate($request, [
            'TenKH' => 'required',
            'DiaChi' => 'required',
            'Sdt' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $kh->TenKH = $request->TenKH;
        $kh->DiaChi = $request->DiaChi;
        $kh->Sdt = $request->Sdt;
        if($kh->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('khachhang.index');
    }
    public function destroy($id)
    {
        $kh = KhachHang::find($id);
        if($kh->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('khachhang.index');
    }
}
