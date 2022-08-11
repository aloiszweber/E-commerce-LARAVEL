<?php

namespace App\Http\Controllers;

use App\Models\Eshop;
use Illuminate\Http\Request;

class EshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eshops = Eshop::all();

        return view('welcome', [
            'eshops' => $eshops
        ]);
    }



    public function about()
    {
        return view('about');

    }

    public function contact()
    {
        return view('contact');
    }

    public function createaccount()
    {
        return view('createaccount');
    }

    public function basket()
    {
        $eshops = Eshop::all();

        return view('basket', [
            'eshops' => $eshops
        ]);
    }

    public function products()
    {

        $eshops = Eshop::all();

        return view('products', [
            'eshops' => $eshops
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\eshop  $eshop
     * @return \Illuminate\Http\Response
     */
    public function show(eshop $eshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\eshop  $eshop
     * @return \Illuminate\Http\Response
     */
    public function edit(eshop $eshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\eshop  $eshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eshop $eshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\eshop  $eshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(eshop $eshop)
    {
        //
    }
}
