<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return UserCollection
     */
    public function index()
    {
        return new UserCollection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserRequest  $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|Response
     */
    public function store(UserRequest $request)
    {
        User::create($request->validated());
        return response('ok', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
