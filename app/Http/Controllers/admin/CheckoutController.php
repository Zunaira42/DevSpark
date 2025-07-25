<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checkouts = Checkout::all();
        return view('admin/checkout.index', compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/checkout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:checkouts,email',
            'phone_num' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);
        Checkout::create($validated);
        Order::create([
            'user_id' => Auth::id(),
            'total_price' => $request->selected_total_price,
            'status' => 'pending',

        ]);

        return redirect()->route('checkouts.index')->with('success', 'Checkout created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkout = Checkout::findorfail($id);
        return view('admin.checkout.edit', compact('checkout'));
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
        $checkout = Checkout::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:checkouts,email,' . $checkout->id,
            'phone_num' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
        ]);

        $checkout->update($validated);

        return redirect()->route('checkouts.index')->with('success', 'Checkout updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
