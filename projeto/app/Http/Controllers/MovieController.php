<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Genre;
use App\Playlist;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $movies = Movie::with('genre')->get();
        return view('filmes/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        return view('filmes/create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $movie = new Movie();

        $movie->titulo = $request->titulo;
        $movie->ano = $request->ano;
        $movie->atorprincipal = $request->atorprincipal;
        $movie->diretor = $request->diretor;
        $movie->sinopse = $request->sinopse;
        $movie->image = $request->image;
        $movie->video = $request->video;

        $movie->genre_id = $request->genre;

        $movie->save();
        

        return redirect('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        return view('filmes/edit', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $genres = Movie::find($movie->id);
        $movie->titulo = $request->titulo;
        $movie->ano = $request->ano;
        $movie->atorprincipal = $request->atorprincipal;
        $movie->diretor = $request->diretor;
        $movie->sinopse = $request->sinopse;
        $movie->genre_id = $request->genre;

        $movie->save();

        return redirect('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/movie');
    }

    public function display(Movie $movie)
    {
        $movies = Movie::with('genre')->get();
        $playlists = Playlist::all();
        return view('filmes/display', compact('movie'), compact('playlists'));
    }

}

