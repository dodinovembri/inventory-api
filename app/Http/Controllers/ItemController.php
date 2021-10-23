<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ItemModel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new ItemModel();
        $insert->item_code = $request->item_code;
        $insert->item_name = $request->item_name;
        $insert->qty = $request->qty;
        $insert->created_at = date("Y-m-d H:i:s");
        $insert->save();

        return "Data inserted successfully";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = ItemModel::find($id);
        $update->item_code = $request->item_code;
        $update->item_name = $request->item_name;
        $update->qty = $request->qty;
        $update->updated_at = date("Y-m-d H:i:s");
        $update->save();

        return "Data updated successfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ItemModel::find($id);
        $delete->delete();

        return "Data deleted successfully";
    }
}
