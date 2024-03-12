<?php

namespace App\Http\Controllers;

use App\Services\OrderProductService;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class OrderProductController extends Controller
{ public function __construct(private readonly OrderProductService $orderProductService)
{

}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orderProducts = $this->orderProductService->paginate();

        return view('', compact('orderProducts'));
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
        $this->orderProductService->create($request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'subtotal_price' => 'required'
        ]));

        return route();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orderProduct = $this->orderProductService->firstById($id);
        return view('', compact('orderProduct'));
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
        $this->orderProductService->update($id, $request->validate([
            'order_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'subtotal_price' => 'required'
        ]));

        return route();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->orderProductService->deleteById($id);
        return route();
    }


    public function pdf()
    {
        Pdf::view('', [])->download('otchet');
    }
}
