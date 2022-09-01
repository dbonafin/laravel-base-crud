<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check the validations for the form
        $request->validate($this->getValidations());
        // Get all the infos from the form
        $form_data = $request->all();
        // Create a new comic
        $new_comic = new Comic();
        // Fill it with the form-infos
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        // $data = [
        //     'comic' => $comic
        // ];

        // Short version of this ^^ 
        // And replacing ($id) like argument of the show function

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Check the validations for the form
        $request->validate($this->getValidations());
        // Get all the infos from the form
        $form_data = $request->all();
        // Save the changes in the edited comic
        $comic_edited = Comic::findOrFail($id);
        $comic_edited->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic_edited->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_deleted = Comic::findOrFail($id);
        $comic_deleted->delete();

        return redirect()->route('comics.index');
    }

    public function getValidations() {
        return [
            'title' => 'required | max: 50',
            'type' => 'required | max: 20',
            'series' => 'required | max: 50',
            'price' => 'required | max: 999.99',
            'description' => 'required | max: 20000',
            'thumb' => 'required | max: 20000',
            'sale_date' => 'required'
        ];
    }
}
