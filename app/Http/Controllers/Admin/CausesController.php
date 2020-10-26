<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\cause;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

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
        $request->validate([
            'title' => ['required','min:3', 'max:255'],   
            'goal' => 'required',
            'description' => ['required','min:3', 'max:255'],
        ]);
        $file = $request->file('thumbnail');
        $image = $file->move('images/thumbnail/', time(). '-'. Str::limit(Str::slug($req->title), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension()); 
        cause::create([
            'title' => $request->title,
            'category' => $request->category,
            'thumbnail' => $image,
            'goal' => $request->goal,
            'fund_raished' => $request->fund_raished,
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
        $request->validate([
            'title' => ['required','min:5', 'max:255'],   
            'goal' => 'required',
            'description' => ['required','min:5', 'max:255'],
        ]);
        $cause = cause::findOrfail($id);
        if($request->hasFile('thumbnail')){
            if(file_exists($cause->thumbnail)){
                unlink($cause->thumbnail);
            }
            $file = $request->file('thumbnail');
            $image = $file->move('images/thumbnail/', time(). '-'. Str::limit(Str::slug($req->title), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension()); 
            cause::where(['id' => $id])->update([
                        'title' => $request->title,
                        'category' => $request->category,   
                        'goal' => $request->goal,
                        'fund_raished' => $request->fund_raished,
                        'thumbnail' => !empty($image) ? $image : $cause->thumbnail,
                        'description' => $request->description,
                        'date_end' => $request->date_end
                ]);
            return redirect('/causes')->with('status', 'New Causes Updated Successfully');

        }
        // if(!$request->file('thumbnail')){
        //     cause::where(['id' => $id])->update([
        //         'title' => $request->title,
        //         'category' => $request->category,   
        //         'goal' => $request->goal,
        //         'fund_raished' => $request->fund_raished,
        //         'description' => $request->description,
        //         'date_end' => $request->date_end
        //     ]);
        //     return redirect('/causes');
        // }else{
        //     cause::where(['id' => $id])->update([
        //         'title' => $request->title,
        //         'category' => $request->category,   
        //         'goal' => $request->goal,
        //         'fund_raished' => $request->fund_raished,
        //         'description' => $request->description,
        //         'date_end' => $request->date_end
        //     ]);

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
