<?php

namespace App\Http\Controllers;
use App\Models\item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = item::all();
        //dd($items);
        return view('home', compact('items'));
    }

    public function show(item $items)
    {
        return view('home',compact('items'));
    } 

    public function delete(Request $request)
    {
        dd($request);
        $request->delete();

        return redirect()->route("home")
                        ->with('Success','Product deleted successfully');
    }
}
