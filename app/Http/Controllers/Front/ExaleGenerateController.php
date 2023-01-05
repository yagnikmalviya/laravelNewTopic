<?php

namespace App\Http\Controllers\Front;

use App\Exports\XlsxExport;
use App\Http\Controllers\Controller;
use App\Imports\XlsxImport;
use App\Models\XlsxTable;
use Illuminate\Http\Request;
use DataTables;
use Exception;
use Maatwebsite\Excel\Facades\Excel;

class ExaleGenerateController extends Controller
{
    public function XlsxeView(Request $request){
        if ($request->ajax()) {
            $data = XlsxTable::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('xlsx.table');
    }

    public function xlsxInsert(Request $request){

        try {
            $data = new XlsxTable();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->city = $request->city;
            $data->district = $request->district;
            $data->taluka = $request->taluka;
            $data->address = $request->address;
            $data->save();

        return response()->json(['status' => 200,'message' => 'data saved']);

        } catch (Exception $e) {
            $message = $e->getMessage();
            $code = $e->getCode();
            $string = $e->__toString();
            return response()->json(['status' => 500,'message' => 'Something went wrong']);
        }
    }

    public function xlsxExport(){
        // dd(Excel::download(new XlsxExport, 'file.xlsx'));
        return Excel::download(new XlsxExport, 'file.xlsx');
    }

    public function xlsxImport(Request $request){
        if(!empty($request->file)){
            Excel::import(new XlsxImport,$request->file);
        }
        return back();
    }
}
