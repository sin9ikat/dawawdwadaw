<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $productService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->paginate();

        return view('', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->productService->create($request->validate([
            'name' => 'required',
            'image' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]));

        return route();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = $this->productService->firstById($id);
        return view('', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->productService->update($id, $request->validate([
            'name' => 'required',
            'image' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]));

        return route();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->productService->deleteById($id);
        return route();
    }
}
