<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Parents;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('pages.students')->with('eleves',$eleves);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pere=new Parents();
        $pere->role= "père";
        $pere->nom_parent=  $request->get('nom_pere');
        $pere->tel_parent =  $request->get('tel_pere');
        $pere->prof_parent =  $request->get('prof_pere');
        $pere->email_parent =  $request->get('email_pere');
        $pere->mdp_parent =  $request->get('mdp_pere');
        $pere->save();

        $id_pere=$pere->id_parent;

        $mere=new Parents();
        $mere->role= "mère";
        $mere->nom_parent=  $request->get('nom_mere');
        $mere->tel_parent =  $request->get('tel_mere');
        $mere->prof_parent =  $request->get('prof_mere');
        $mere->email_parent =  $request->get('email_mere');
        $mere->mdp_parent =  $request->get('mdp_mere');
        $mere->save();

        $id_mere=$mere->id_parent;

        $eleve=new Eleve();
        $eleve->img =  $request->get('img');
        $eleve->nom =  $request->get('nom');
        $eleve->prenom =  $request->get('prenom');
        $eleve->sexe =  $request->get('sexe');
        $eleve->adresse =  $request->get('adresse');
        $eleve->date_naissance =  $request->get('date_naissance');
        $eleve->lieu_naissance =  $request->get('lieu_naissance');
        $eleve->nationalite =  $request->get('nationalite');
        $eleve->email =  $request->get('email');
        $eleve->phone1 =  $request->get('phone1');
        $eleve->phone2 =  $request->get('phone2');
        $eleve->ancienne_ecole =  $request->get('ancienne_ecole');
        $eleve->etudes =  $request->get('etudes');
        $eleve->parcours_scolaire =  $request->get('parcours_scolaire');
        $eleve->filiere =  $request->get('filiere');
        $eleve->specialite =  $request->get('specialite');
        $eleve->niveau =  $request->get('niveau');
        $eleve->classe =  $request->get('classe');
        $eleve->sous_groupe =  $request->get('sous_groupe');
        $eleve->mdp =  $request->get('mdp');
        $eleve->id_pere =  $id_pere;
        $eleve->id_mere =  $id_mere;
        $eleve->save();
        
        return redirect('/eleve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eleve=Eleve::find($id);
        $pere=Parents::find($eleve->id_pere);
        $mere=Parents::find($eleve->id_mere);
        return view('pages.StudentInfo')->with('params',[$eleve, $pere, $mere]);
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
    public function updatePerso(Request $request, $id)
    {
        $eleve=Eleve::find($id);
        $eleve->img =  $request->get('img');
        $eleve->prenom =  $request->get('prenom');
        $eleve->nom =  $request->get('nom');
        $eleve->sexe =  $request->get('sexe');
        $eleve->date_naissance =  $request->get('date_naissance');
        $eleve->lieu_naissance =  $request->get('lieu_naissance');
        $eleve->nationalite =  $request->get('nationalite');

        $eleve->save();
        return redirect()->back();
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateContact(Request $request, $id)
    {
        $eleve=Eleve::find($id);
        $eleve->email =  $request->get('email');
        $eleve->phone1 =  $request->get('phone1');
        $eleve->phone2 =  $request->get('phone2');

       // echo $request->get('email');
        $eleve->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateFormation(Request $request, $id)
    {
        $eleve=Eleve::find($id);
        $eleve->parcours_scolaire =  $request->get('parcours_scolaire');
        $eleve->filiere =  $request->get('filiere');
        $eleve->specialite =  $request->get('specialite');
        $eleve->niveau =  $request->get('niveau');
        $eleve->classe =  $request->get('classe');
        $eleve->sous_groupe =  $request->get('sous_groupe');

        $eleve->save();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAncEcole(Request $request, $id)
    {
        $eleve=Eleve::find($id);
        $eleve->ancienne_ecole =  $request->get('ancienne_ecole');
        $eleve->etudes =  $request->get('etudes');

        $eleve->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eleve= Eleve::find($id);
        $id_pere= $eleve->id_pere;
        $id_mere= $eleve->id_mere;
        $pere= Parents::find($id_pere);
        $mere= Parents::find($id_mere);
        $eleve->delete();
        $pere->delete();
        $mere->delete();
        return redirect('/eleve');
    }
}

