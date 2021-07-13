<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('pages.teachers')->with('teachers',$teachers);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher=new Teacher();
        $teacher->img =  $request->get('img');
        $teacher->nom =  $request->get('nom');
        $teacher->prenom =  $request->get('prenom');
        $teacher->sexe =  $request->get('date_naissance');
        $teacher->adresse =  $request->get('sexe');
        $teacher->date_naissance =  $request->get('email_teacher');
        $teacher->lieu_naissance =  $request->get('Nationalite');
        $teacher->nationalite =  $request->get('cnss');
        $teacher->email =  $request->get('cin');
        $teacher->phone1 =  $request->get('cimr');
        $teacher->phone2 =  $request->get('salaire_brut');
        $teacher->ancienne_ecole =  $request->get('salaire_net');
        $teacher->etudes =  $request->get('situation_familiale');
        $teacher->parcours_scolaire =  $request->get('nombre_enfants');
        $teacher->filiere =  $request->get('mutuelle');
        $teacher->save();
        
        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher=Teacher::find($id);
        return view('pages.TeacherInfo')->with('teacher',$teacher);
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
        $teacher= Teacher::find($id);
        $teacher->delete();
        return redirect('/teacher');
    }
}
