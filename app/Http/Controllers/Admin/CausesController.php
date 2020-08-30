<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\cause;
use Illuminate\Support\Facades\Crypt;
class CausesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->var = [
           'cause' => cause::all() 
        ];
        return view('pages.cause.index', $this->var);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.cause.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        cause::create([
            'title' => $request->title,
            'category' => $request->category,
            'thumbnail' => $request->file('thumbnail')->store('upload/cause', 'public'),
            'goal' => $request->goal,
            'description' => $request->description,
            'date_end' => $request->date_end
        ]);
        return redirect('/causes');
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
        $desc = Crypt::decrypt($id);
        return view('pages.cause.edit', [
            'cause' => cause::findOrfail($desc)
        ]);
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
        if(!$request->file('thumbnail')){
            cause::where(['id' => $id])->update([
                'title' => $request->title,
                'category' => $request->category,   
                'goal' => $request->goal,
                'description' => $request->description,
                'date_end' => $request->date_end
            ]);
            return redirect('/causes');
        }else{
            cause::where(['id' => $id])->update([
                'title' => $request->title,
                'category' => $request->category,   
                'goal' => $request->goal,
                'description' => $request->description,
                'date_end' => $request->date_end
            ]);
            return redirect('/causes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cause::destroy($id);
        return redirect('/causes');
    } 
}
