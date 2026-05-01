<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Validation\Rule;

class FilmController extends Controller
{
    public function getAllFilms() {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function createFilm(Request $request) {
        $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('films')->where('year', $request->year)->where('director', $request->director)
            ],
            'director' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:2100',
            'genre' => 'required|max:100',
            'description' => 'required'
        ], [
            'title.unique' => 'This movie already exists.'
        ]);

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
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    public function editFilm($id) {
        $film = Film::findOrFail($id);
        return view('films.update', compact('film'));
    }

    public function updateFilm(Request $request, $id) {
        $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('films')->ignore($id)->where('year', $request->year)->where('director', $request->director)
            ],
            'director' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:2100',
            'genre' => 'required|max:100',
            'description' => 'required'
        ], [
            'title.unique' => 'This movie already exists.'
        ]);

        $film = Film::findOrFail($id);
        $film->title = $request->title;
        $film->director = $request->director;
        $film->year = $request->year;
        $film->genre = $request->genre;
        $film->description = $request->description;
        
        $film->image = $request->image;
                
        $film->save();
        return redirect()->route('films.index');
    }

    public function deleteFilm($id) {
        $film = Film::findOrFail($id)->delete();
        return redirect()->route('films.index');
    }
}
