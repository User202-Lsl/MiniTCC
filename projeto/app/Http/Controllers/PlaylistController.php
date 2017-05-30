<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\Movie;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = Playlist::all();
        $playlists = Playlist::with('movie')->get();
        return view('playlists/index', compact('playlists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        return view('playlists/create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $playlist = new Playlist();
        $playlist->nome = $request->nome;
        $playlist->descricao = $request->descricao;

        $playlist->movie_id = $request->movie;
        $playlist->save();
        

        return redirect('playlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        return view('playlists/edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        $playlist->nome = $request->nome;
        $playlist->descricao = $request->descricao;

        $playlist->save();

        return redirect('/playlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
        return redirect('/playlist');
    }

    public function display(Playlist $playlist)
    {
        return view('playlists/display', compact('playlist'));
    }
}
