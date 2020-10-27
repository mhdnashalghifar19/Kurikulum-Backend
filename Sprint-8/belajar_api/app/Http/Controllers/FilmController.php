<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();

        if (!$films) {
            return $this->sendResponse('Error', 'Gagal Mengambil Data', null, 500);
        }
            return $this->sendResponse('Success', 'Data Berhasil Diambil', $films, 200);
    }

    public function store(Request $request, Film $films)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response($validator->errors());
        }

        $films->title = $request->title;
        $films->description = $request->description;
        $films->author = $request->author;
        $films->publisher = $request->publisher;
        $films->year = $request->year;
        
        try {
            $films->save();
            
            $films = Film::all();
            return $this->sendResponse('Success', 'Data Berhasil Ditambah', $films, 200);
        } catch (\Throwable $th) {
            return $this->sendResponse('Error', 'Data Gagal Ditambah', null, 500);
        }
    }

    public function show($id)
    {
        $film = Film::find($id);

        if (!$film) {
            return $this->sendResponse('Error', 'Gagal Mengambil Data', null, 500);
        }
            return $this->sendResponse('Success', 'Data Berhasil Diambil', $film, 200);
    }

    public function destroy($id)
    {
        $film = Film::find($id);

        if ($film) {
            $film->delete();
            return $this->sendResponse('Success', 'Data Berhasil Dihapus', null, 200);
        }
            return $this->sendResponse('Error', 'Data Gagal Dihapus', null, 400);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'year' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response($validator->errors());
        }
        
        $film = Film::find($id);

        if (!$film) {
            return $this->sendResponse('Error', 'Id tidak di temukan', null, 500);
        }

        $film->title = $request->title;
        $film->description = $request->description;
        $film->author = $request->author;
        $film->publisher = $request->publisher;
        $film->year = $request->year;
        
        try {
            $film->save();
    
            $films = Film::all();
            return $this->sendResponse('Success', 'Data Berhasil Diupdate', $films, 200);
        } catch (\Throwable $th) {
            return $this->sendResponse('Error', 'Data Gagal Diupdate', null, 500);
        }
    }
}
