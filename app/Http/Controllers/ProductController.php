<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Assumez que vous récupérez tous les produits depuis la base de données
        $products = Product::all();

        return view('products.index',['products'=>$products]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // ProductController.php

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.index', ['product' => $product->id])->with('info', 'Le produit a bien été créé');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Assumez que vous récupérez le produit correspondant à l'ID depuis la base de données
        $product = Product::find($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('info', 'Le produit a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return back()->with('info', 'Le produit a bien été supprimé dans la base de données.');
    }
}
