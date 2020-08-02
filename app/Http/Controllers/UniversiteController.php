<?php

namespace App\Http\Controllers;

use App\Post;
use App\Universite;
use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with([
            'nom' => 'EPAC',
            'git_posts' => Post::on('git')->get(),
            'abm_posts' => Post::on('abm')->get(),
            'psa_posts' => Post::on('psa')->get(),
            'universites' => Universite::all()
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
     * @param  \App\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function show(Universite $universite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function edit(Universite $universite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universite $universite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Universite  $universite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universite $universite)
    {
        //
    }
}
