<?php

namespace App\Http\Controllers;

use App\Models\ResourceRoute;
use Illuminate\Http\Request;

class ResourceController extends Controller
{

    public function index()
    {
        return response()->json(['status' => 200,'message' => 'Display a listing of the resource.']);
    }

    public function create()
    {
        return response()->json(['status' => 200,'message' => 'Show the form for creating a new resource.']);
    }

    public function store(Request $request)
    {
        ResourceRoute::create(['name'=> $request->name, 'desc' => $request->desc]);
        return response()->json(['status' => 200,'message' => 'successfully Store Data']);
    }

    public function show($id)
    {
        $data = ResourceRoute::where('id', $id)->first();
        return response()->json(['status' => 200,'message' => 'successfully Show Data','data' => $data]);
    }

    public function edit($id)
    {
        $data = ResourceRoute::where('id', $id)->first();
        return response()->json(['status' => 200,'message' => 'successfully Show Data','data' => $data]);
    }

    public function update(Request $request, $id)
    {
        ResourceRoute::where('id', $id)->update(['name'=> $request->name, 'desc' => $request->desc]);
        return response()->json(['status' => 200,'message' => 'successfully Update Data']);
    }

    public function destroy($id)
    {
        ResourceRoute::where('id', $id)->delete();
        return response()->json(['status' => 200,'message' => 'successfully destroy Data']);
    }
}
