<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function getAllFilms() {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function createFilm(Request $request) {
        $film = new Film();
        $film->title = $request->title;
        $film->director = $request->director;
        $film->year = $request->year;
        $film->genre = $request->genre;
        $film->description = $request->description;
        $film->image = $request->image;
        $film->save();
        
        return redirect()->route('films.index');
    }

    public function getFilmByID($id) {
        $film = Film::find($id);
        return view('films.show', compact('film'));
    }

    public function editFilm($id) {
        $film = Film::find($id);
        return view('films.update', compact('film'));
    }

    public function updateFilm(Request $request, $id) {
        $film = Film::find($id);
        $film->title = $request->title;
        $film->director = $request->director;
        $film->year = $request->year;
        $film->genre = $request->genre;
        $film->description = $request->description;
        
        // Only update image if they provided a new one
        if ($request->image) {
            $film->image = $request->image;
        }
        
        $film->save();
        return redirect()->route('films.index');
    }

    public function deleteFilm($id) {
        $film = Film::find($id);
        if ($film) {
            $film->delete();
        }
        return redirect()->route('films.index');
    }
}
