<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Order;
use JavaScript;

use Illuminate\Http\Request;


class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuItems=Menu::latest()->filter(request(['search']))->get();
       
        $menuItems=JavaScript::put(['products'=> $menuItems]);
       

        return view('cart');
    }
     public function menus()
    {
        $menuItems=Menu::latest()->filter(request(['search']))->get();
       
        
       

        return view('menus.index')->With('menuItems',$menuItems);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'createdBy'=>'required',
        ]);
        $menu['status']='Available';
         if($request->hasFile('photo')){
            $menu['photo']=$request->file('photo')->store('menus','public');
        }
        Menu::create($menu);
        return redirect('/menus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $item=Menu::find($id);
        return view('menus.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Menu::find($id);
        return view('menus.edit')->with('item', $item);
    }

        /**
     * upon completion this is where the pese pay api is going to be implemented
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $menu=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'createdBy'=>'required',
        ]);

        $menu['status']='Available';
          if($request->hasFile('photo')){
            $menu['photo']=$request->file('photo')->store('menus','public');
        }
        Menu::find($id)->update($menu);
        return redirect('/menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Menu::find($id)->delete();
       return back();
    }
}
