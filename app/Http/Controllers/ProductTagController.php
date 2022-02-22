<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use App\Models\ProductTag;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        //
        $product_tag = ProductTag::where('product_id', $product->id)->pluck('tag_id')->toArray();

        $tags = Tag::whereNotIn('id', $product_tag)->get();

        return view('app.product_tag.create', ['tags' => $tags, 'product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        //
        $rules = [
            'tag_id' => 'exists:tag,id',
        ];

        $request->validate($rules);

        $product_tag = new ProductTag();
        $product_tag->tag_id = $request->get('tag_id');
        $product_tag->product_id = $product->id;
        $product_tag->save();

        return redirect()->route('app.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductTag  $productTag
     * @return \Illuminate\Http\Response
     */
    public function show(ProductTag $productTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductTag  $productTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductTag $productTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductTag  $productTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductTag $productTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductTag  $productTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product, Tag $tag)
    {
        //
        ProductTag::where(['product_id' => $product->id, 'tag_id' => $request->tag_id])->delete();
        return redirect()->route('app.product.show', ['product' => $product]);

    }
}
