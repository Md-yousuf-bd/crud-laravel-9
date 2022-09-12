<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\StoreFormRequest;
use Illuminate\Support\Facades\Session;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }


    public function list()
    {
        $data = [
            "records" => Form::get(),
        ];
        return view('list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('from');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        $information = new form;
        $information->frist_name = $request->frist_name;
        $information->last_name = $request->last_name;
        $information->email = $request->email;
        $information->address = $request->address;
        $information->phone_number = $request->phone_number;
        $information->save();
        Session::flash('message', 'Store personal information!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            "data" => Form::where('id', $id)->get()->first(),
        ];
        return view('view-from', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            "data" => Form::where('id', $id)->get()->first(),
        ];
        return view('edit-from', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormRequest  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFormRequest $request, $id)
    {
        Form::where('id', $id)->update([
            'frist_name' => $request->validated()['frist_name'],
            'last_name' => $request->validated()['last_name'],
            'email' => $request->validated()['email'],
            'address' => $request->validated()['address'],
            'phone_number' => $request->validated()['phone_number'],
        ]);
        Session::flash('message', 'Update!');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form::where('id', $id)->delete();
        return redirect()->back();
    }
}
