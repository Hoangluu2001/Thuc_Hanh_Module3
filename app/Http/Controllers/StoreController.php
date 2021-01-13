<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $stores = Store::all();

        $stores =Store::paginate(5);
        return view('Stores.list', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();


        return view('Stores.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Store();
        $store->code       = $request->input('code');
        $store->name       = $request->input('name');
        $store->phone      = $request->input('phone');
        $store->email      = $request->input('email');
        $store->address    = $request->input('address');
        $store->manager    = $request->input('manager');
        $store->status     = $request->input('status');
        $store->save();

        return redirect()->route('stores.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store ,$id)
    {
        $store = Store::findOrFail($id);


        return view('Stores.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store ,$id)
    {
        $store = Store::findOrFail($id);
        $store->code     = $request->input('code');
        $store->name     = $request->input('name');
        $store->phone    = $request->input('phone');
        $store->email      = $request->input('email');
        $store->address  = $request->input('address');
        $store->manager  = $request->input('manager');
        $store->status  = $request->input('status');
        $store->save();


        return redirect()->route('stores.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store,$id)
    {
        $store= Store::find($id);

        $store->delete();
        return redirect()->route('stores.list');
    }


    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($request->has('name')){
            return redirect()->route('stores.list');
        }
        $stores =DB::table('stores')->where('name', 'like', '%'  . $keyword . '%')->paginate(5);
        return view('Stores.list', compact( 'stores'));
    }


}
