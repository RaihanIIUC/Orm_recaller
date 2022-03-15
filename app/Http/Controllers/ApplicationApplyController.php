<?php

namespace App\Http\Controllers;

use App\Models\ApplicationApply;
use {{ namespacedRequests }}

class ApplicationApplyController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \{{ namespacedStoreRequest }}  $request
     * @return \Illuminate\Http\Response
     */
    public function store({{ storeRequest }} $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicationApply  $applicationApply
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationApply $applicationApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicationApply  $applicationApply
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationApply $applicationApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \{{ namespacedUpdateRequest }}  $request
     * @param  \App\Models\ApplicationApply  $applicationApply
     * @return \Illuminate\Http\Response
     */
    public function update({{ updateRequest }} $request, ApplicationApply $applicationApply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationApply  $applicationApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationApply $applicationApply)
    {
        //
    }
}
