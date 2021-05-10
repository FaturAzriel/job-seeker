<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = [
            'title' => 'Job List',
            'jobs' => Vacancy::orderBy('created_at', 'desc')->get()
        ];

        return view('admin.vacancy.index', $view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = [
            'title' => 'Create | Job List',
            'institute' => Institute::all(),
            'vacancies' => Vacancy::all()
        ];

        return view('admin.vacancy.create', $view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vacancy::firstOrCreate([
            'institute_id' => $request->institute,
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'salary' => $request->salary,
            'qualification' => $request->qualification,
            'year' => $request->year,
        ]);

        return redirect()->route('admin.vacancy.index')->with('alert-success', 'Data has been Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacancy $vacancy)
    {
        $view = [
            'title' => 'Create | Job List',
            'data' => $vacancy
        ];

        return view('admin.vacancy.show', $view);
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
