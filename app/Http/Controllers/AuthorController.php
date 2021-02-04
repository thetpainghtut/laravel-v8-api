<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Author::all();
        return AuthorResource::collection(Author::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request)

        // validation


        // upload file


        // data save
        $author = new Author;
        $author->name = $request->name;
        $author->gender = $request->gender;
        $author->photo = $request->photo;
        $author->bio = $request->bio;
        $author->dob = $request->dob;
        $author->dod = $request->dod;
        $author->nationality = $request->nationality;
        $author->save();

        // return
        // return $author;
        return new AuthorResource($author);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        // dd($request)

        // validation

        // upload file

        // data update
        $author->name = $request->name;
        $author->gender = $request->gender;
        $author->photo = $request->photo;
        $author->bio = $request->bio;
        $author->dob = $request->dob;
        $author->dod = $request->dod;
        $author->nationality = $request->nationality;
        $author->save();

        // return
        return new AuthorResource($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        
        // return
        return new AuthorResource($author);
    }
}
