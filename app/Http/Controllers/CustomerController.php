<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Type;
use App\Brand;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $customers = Customer::orderBy('surname', 'asc')->get();
      return view('customer.index')->with('customers',$customers);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCustomerRequest $request)
    {
      Customer::create($request->all());
      return redirect('customer');
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
        //
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
        //
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

    /** -------------------------By me
     *
     *     show all customer's orders
     */
    public function customerOrsers($id)
    {
      $order = Order::where('customer_id', '=', $id)->orderBy('created_at', 'desc')->get();
      $statuses = Status::orderBy('order', 'asc')->get();
      $types = Type::orderBy('name', 'asc')->get();

      return view('order.index')->with(compact('order','statuses','types'));
    }


}
