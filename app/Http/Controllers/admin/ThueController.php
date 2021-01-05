<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Thue;
use App\Models\KhachHang;
use App\Models\Phong;
use Session;
use App\Classes\Helper;
use DB;
use App\Quotation;

class ThueController extends Controller
{
    public function __construct()
    {
        //$this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.thue.';
        $this->viewnamespace='thue';
    }
    public function index()
    {
        $thues = Thue::all();
        return view('admin.book.index',compact('thues'));
    }
    public function create()
    {
        $ps = Phong::all();
        $khs = KhachHang::all();
        return view('user.book.create',compact('ps','khs'));
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
            {
                $thue = new Thue();
                $this->validate($request, [
                    'MaPhong' => 'required',
                    'NgayDen' => 'required',
                    'NgayDi' => 'required',
                    'ThanhTien' => 'required',
                ]);
                //$Category->image = Helper::imageUpload($request);
                $thue->MaKHf = $kh->MaKH;
                $thue->MaPhongf = $request->MaPhong;
                $thue->NgayDen = $request->NgayDen;
                $thue->NgayDi = $request->NgayDi;
                $thue->ThanhTien = $request->ThanhTien;
                if($thue->save())
                    Session::flash('message', 'successfully!');
                    else
                    Session::flash('message', 'fail!');
            }
        else
            Session::flash('message', 'fail!');
        return back();
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
        
        // $this->validate($request, [
        //     'MaKH' => 'required',
        //     'MaPhong' => 'required',
        //     'NgayDen' => 'required',
        //     'NgayDi' => 'required',
        //     'ThanhTien' => 'required',
        // ]);
        //$Category->image = Helper::imageUpload($request);
        $thue->MaKHf = $request->MaKH;
        $thue->MaPhongf = $request->MaPhong;
        $thue->NgayDen = $request->NgayDen;
        $thue->NgayDi = $request->NgayDi;
        $thue->ThanhTien = $request->ThanhTien;
        //return view('test')->with('a',$thue->MaPhongf);
        if($thue->update())
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

    public function search(Request $request)
    {
        $this->validate($request, [
            'input_value' => 'required',
        ]);
        $kh = KhachHang::where('sdt','=',$request->input_value)->firstOrFail();
        // $output = DB::table('thue')
        // ->join('khachhang', function ($join) {
        //     $join->on('thue.MaKHf', '=', 'khachhang.MaKH')->where('khachhang.Sdt','LIKE', '$sdt');
        // }) ->get();
        if(!empty($kh))
        {
            $thue = Thue::where('MaKHf','=',$kh->MaKH)->firstOrFail();
            $phong = Phong::where('MaPhong','=',$thue->MaPhongf)->firstOrFail();
            Session::flash('ok', $kh->MaKH);
            Session::flash('message2', 'Tim thay thong tin');
            $dem = $phong->LoaiPhong;
            return redirect()->route('thue.create')
            ->with('sdt',$kh->Sdt)
            ->with('name',$kh->TenKH)
            ->with('diachi',$kh->DiaChi)
            ->with('gia',$thue->ThanhTien)
            ->with('phong',$dem)
            ->with('ngayden',$thue->NgayDen)
            ->with('ngaydi',$thue->NgayDi)
            ;
        }else{
            Session::flash('message2', 'Khong Tim thay thong tin');
            return redirect()->route('thue.create');
        }
        
    }
}
