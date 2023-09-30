<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class Itemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(request $request)
    {
        $request->validate([
                'item_name' => 'required',
                'item_description' => 'required|string',
                'item_price' => 'required|integer',
                'item_stock' => 'required|integer'
                ]);

        $item = new Item([
            'item_name' =>  $request->get('item_name'),
            'item_desc' => $request->get('item_description'),
            'item_price' => $request->get('item_price'),
            'item_stock' => $request->get('item_stock')
        ]);
        $item ->save ();
        return redirect('/product')->with('success', 'Product Item has been added');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $items = Item::find($id);
        return view('items.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

