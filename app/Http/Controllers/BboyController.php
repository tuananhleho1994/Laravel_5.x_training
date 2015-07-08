<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BboyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        echo "<h2>This is action Index. controller Bboy. Using RestfulController</h2>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        echo "<h2>This is action Create. controller Bboy. Using RestfulController</h2>";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        echo "<h2>This is action Store. controller Bboy. Using RestfulController</h2>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        echo "<h2>This is action Show. controller Bboy. Parameter: $id. Using RestfulController</h2>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        echo "<h2>This is action Edit. controller Bboy. Parameter: $id. Using RestfulController</h2>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        echo "<h2>This is action Update. controller Bboy. Parameter: $id. Using RestfulController</h2>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        echo "<h2>This is action Destroy. controller Bboy. Parameter: $id. Using RestfulController</h2>";
    }
}
