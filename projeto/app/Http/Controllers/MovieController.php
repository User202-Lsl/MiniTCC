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
        $movie->nota = $request->nota;
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
        $movie->image = $request->image;
        $movie->video = $request->video;
        $movie->nota = $request->nota;
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
        return view('filmes/display', compact('movie'), compact('playlists'));
    }

    public function nota1(Request $request, Movie $movie)
    {
        if($movie->nota != 0){
        $result = $movie->nota + 1;
        $result2 = $result / 2;
        $movie->nota = $result2;
        }else{
        $movie->nota = 1;
        }
        $movie->save();

        return redirect('/movie/'.$movie->id.'/display');
    }

    public function nota2(Request $request, Movie $movie)
    {
        if($movie->nota != 0){
        $result = $movie->nota + 2;
        $result2 = $result / 2;
        $movie->nota = $result2;
        }else{
        $movie->nota = 2;
        }
        $movie->save();

        return redirect('/movie/'.$movie->id.'/display');
    }

    public function nota3(Request $request, Movie $movie)
    {
        if($movie->nota != 0){
        $result = $movie->nota + 3;
        $result2 = $result / 2;
        $movie->nota = $result2;
        }else{
        $movie->nota = 3;
        }
        $movie->save();

        return redirect('/movie/'.$movie->id.'/display');
    }

    public function nota4(Request $request, Movie $movie)
    {
        if($movie->nota != 0){
        $result = $movie->nota + 4;
        $result2 = $result / 2;
        $movie->nota = $result2;
        }else{
        $movie->nota = 4;
        }
        $movie->save();

        return redirect('/movie/'.$movie->id.'/display');
    }

    public function nota5(Request $request, Movie $movie)
    {
        if($movie->nota != 0){
        $result = $movie->nota + 5;
        $result2 = $result / 2;
        $movie->nota = $result2;
        }else{
        $movie->nota = 5;
        }   
        $movie->save();

        return redirect('/movie/'.$movie->id.'/display');
    }

}

