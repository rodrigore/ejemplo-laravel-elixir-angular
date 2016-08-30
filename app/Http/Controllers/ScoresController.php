<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Http\Requests;
use App\Http\Requests\ScoreCreateRequest;
use \Validator;

class ScoresController extends Controller
{
    public function index()
    {
        return Score::all();
    }

    public function create()
    {
        return view('scores.create');
    }

    public function store(ScoreCreateRequest $request)
    {
        $request->persist();
		return 'bacan';
    }

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
}
