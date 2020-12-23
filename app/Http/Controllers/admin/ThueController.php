<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thue;
use Session;
use App\Classes\Helper;

class ThueController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.thue.';
        $this->viewnamespace='thue';
    }
    public function index()
    {
        $thues = Thue::all();
        return view('admin.book.index')->with('thues', $thues);
    }
    public function create()
    {
        $ps = Phong::all();
        $khs = KhachHang::all();
        return view('user.book.create',compact('ps','khs'));
    }
    public function store(Request $request)
    {
        $thue = new Thue();
        $this->validate($request, [
            //'MaKH' => 'required',
            'MaPhong' => 'required',
            'NgayDen' => 'required',
            'NgayDi' => 'required',
            'ThanhTien' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $thue->MaKHf = $request->MaKH;
        $thue->MaPhongf = $request->MaPhong;
        $thue->NgayDen = $request->NgayDen;
        $thue->NgayDi = $request->NgayDi;
        $thue->ThanhTien = $request->ThanhTien;
        if($thue->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return view('user.home');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $thue = Thue::find($id);
        $ps = Phong::all();
        $khs = KhachHang::all();
        return view('admin.book.edit',compact('thue', 'ps','khs'));
    }
    public function update(Request $request, $id)
    {
        $thue = Thue::find($id);
        $this->validate($request, [
            'MaKH' => 'required',
            'MaPhong' => 'required',
            'NgayDen' => 'required',
            'NgayDi' => 'required',
            'ThanhTien' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $thue->MaKH = $request->MaKH;
        $thue->MaPhong = $request->MaPhong;
        $thue->NgayDen = $request->NgayDen;
        $thue->NgayDi = $request->NgayDi;
        $thue->ThanhTien = $request->ThanhTien;
        if($thue->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('thue.index');
    }
    public function destroy($id)
    {
        $thue = Thue::find($id);
        if($thue->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('thue.index');
    }
}
