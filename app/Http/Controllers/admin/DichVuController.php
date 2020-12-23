<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DichVu;
use Session;
use App\Classes\Helper;

class DichVuController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.dichvu.';
        $this->viewnamespace='dichvu';
    }
    public function index()
    {
        $dvs = DichVu::all();
        return view($this->viewprefix.'index')->with('dvs', $dvs);
    }
    public function create()
    {
        return view($this->viewprefix.'create');
    }
    public function store(Request $request)
    {
        $dv = new DichVu();
        $this->validate($request, [
            'TenDV' => 'required',
            'MoTaDV' => 'required',
            'GiaDV' => 'required',
            'NoiDungDV' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $dv->TenDV = $request->TenDV;
        $dv->MoTaDV = $request->MoTaDV;
        $dv->GiaDV = $request->GiaDV;
        $dv->NoiDungDV = $request->NoiDungDV;
        if($dv->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('dichvu.index');  
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        $dv = DichVu::find($id);
        return view($this->viewprefix.'edit')->with('dv', $dv);
    }

    public function update(Request $request, $id)
    {
        $dv = DichVu::find($id);
        $this->validate($request, [
            'TenDV' => 'required',
            'MoTaDV' => 'required',
            'GiaDV' => 'required',
            'NoiDungDV' => 'required',
        ]);
        //$Category->image = Helper::imageUpload($request);
        $dv->TenDV = $request->TenDV;
        $dv->MoTaDV = $request->MoTaDV;
        $dv->GiaDV = $request->GiaDV;
        $dv->NoiDungDV = $request->NoiDungDV;
        if($dv->update())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('dichvu.index');
    }
    public function destroy($id)
    {
        $dv = DichVu::find($id);
        if($dv->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('dichvu.index');
    }
}
