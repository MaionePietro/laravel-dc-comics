<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view('comics.index', compact(('comics')));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data['title'];
        $new_comic->src = $data['src'];
        $new_comic->type = $data['type'];
        $new_comic->cooking_time = $data['cooking_time'];
        $new_comic->weight = $data['weight'];
        $new_comic->description = $data['description'];

        $new_comic->save();

        // return redirect()->route('pastas.show', $new_pasta);
        return to_route('comics.show', $new_comic);
    }
}
