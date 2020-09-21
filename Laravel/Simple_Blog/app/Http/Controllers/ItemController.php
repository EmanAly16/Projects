<?php

namespace App\Http\Controllers;
use App\Http\Controllers\items;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Models\item;


class ItemController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=item::all();
       return view('items.index',['items'=>$items]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:items',
            'body' => 'required',
            //'user_id'  => 'required'
        ]);
     
        $request['user_id']=auth()->user()->id;
        item::create($request->all());
       
        return redirect()->route('items.index');
    }
   

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $item=item::find($id);
        return view('items.show',['item'=>$item]);
    }
  
    
     /** Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=item::find($id);
        return view('items.edit',['item'=>$item]);
      
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
      $validatedData=$request->validate([
         'title'=>'required'
         ,'body'=>'required',
      ]);
      $request['user_id']=1;
      $item=item::find($id);
      $item->update($request->all());
      
      return redirect()->route('items.index');  
    }
   
   
      /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        item::find($id)->delete();
        return redirect()->route('items.index');
    }
}
