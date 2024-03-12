<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(private readonly OrderService $orderService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = $this->orderService->paginate();

        return view('', compact('orders'));
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
        $this->orderService->create($request->validate([
            'user_id' => 'required|integer',
            'administrator_id' => 'required|integer',
            'total_price' => 'required|numeric',
            'address' => 'required',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'date' => 'required',
            'status' => 'required',
            'order_date' => 'required'
        ]));

        return route();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = $this->orderService->firstById($id);
        return view('', compact('order'));
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
        $this->orderService->update($id, $request->validate([
            'user_id' => 'required|integer',
            'administrator_id' => 'required|integer',
            'total_price' => 'required|numeric',
            'address' => 'required',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'date' => 'required',
            'status' => 'required',
            'order_date' => 'required'
        ]));

        return route();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->orderService->deleteById($id);
        return route();
    }
}
