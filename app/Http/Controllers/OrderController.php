<?php

namespace App\Http\Controllers;

use App\Order;
use App\Type;
use App\Brand;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\SearchOrderRequest;
use App\Http\Requests\StatuschangeOrderRequest;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $order = Order::orderBy('created_at', 'desc')->get();
      $statuses = Status::orderBy('order', 'asc')->get();
      return view('order.index')->with(compact('order','statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $types = Type::orderBy('name', 'asc')->pluck('name', 'id');
      $brands = Brand::orderBy('name', 'asc')->pluck('name', 'id');
      $status = Status::orderBy('order', 'asc')->pluck('name', 'id');
      $uniqid = uniqid();
      return view('order.create')->with(compact('types', 'brands', 'uniqid','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest  $request)
    {
      Order::create($request->all());
      return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($uniqid)
    {
      $order = Order::where('uniqid', '=', $uniqid)->firstOrFail();
      return view('order.show')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($uniqid)
    {
      $types = Type::orderBy('name', 'asc')->pluck('name', 'id');
      $brands = Brand::orderBy('name', 'asc')->pluck('name', 'id');
      $order = Order::where('uniqid', '=', $uniqid)->firstOrFail();
      $status = Status::orderBy('order', 'asc')->pluck('name', 'id');
      return view('order.edit')->with(compact('types', 'brands', 'order','status'));  //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($id, CreateOrderRequest $request)
    {

      $order = Order::findOrFail($id);
      $order->update($request->all());
      return redirect('order/'.$order->uniqid);
    }


    //-----------------------Added by my
    // wyświetla wyszukiwane zgłoszenie w request sprawdza czy jest takie zgłozenie
    public function search(SearchOrderRequest $request)
    {

      //$order = Order::findOrFail($request->input('uniqid'));

      return redirect('order/'.$request->input('uniqid'));
    }

    //generuje PDF zgłoszenia zamówienia o podanym uniqid
    public function pdfDownload($uniqid)
    {
      //zrobić wyjątek
      $order = Order::where('uniqid', '=', $uniqid)->firstOrFail();
      $pdf = PDF::loadView('order.showpdf',compact('order'));
      return $pdf->stream($uniqid.'.pdf');
    }

    //zmienia status zamówenia
    public function statusChange($uniqid,$status_id)
    {
      //return $order.'----'.$status;
      $order = Order::where('uniqid', '=',$uniqid)->firstOrFail();
      $order->status_id = $status_id;
      $order->save();
      return back()->withErrors(['Zmieniono status']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
