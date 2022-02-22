<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag as DocBlockTag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tags = Tag::all();
        $products = Product::all();

        return view('app.tag.index', ['tags' => $tags, 'products' => $products]);
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
        $rules = [
            'name' => 'required|min:3|max:50|unique:tag',
        ];

        $request->validate($rules);

        Tag::create($request->all());
        return redirect()->route('app.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(tag $tag)
    {
        //
        return view('app.tag.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tag $tag)
    {
        //
        $rules = [
            'name' => 'required|min:3|max:50|unique:tag',
        ];

        $request->validate($rules);

        $tag->update($request->all());
        return redirect()->route('app.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(tag $tag)
    {
        //
        ProductTag::where('tag_id', $tag->id)->delete();
        $tag->delete();
        return redirect()->route('app.tag.index');
    }
}
