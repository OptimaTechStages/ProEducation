<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Parents::all();
        return view('pages.parents')->with('parents',$parents);
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
     //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addParent(Request $request, $id)
    {
        $eleve= Eleve::find($id);

        //create parent
        $parent=new Parents();
        $role=  $request->get('role');
        $parent->nom_parent =  $request->get('nom');
        $parent->tel_parent =  $request->get('tel');
        $parent->prof_parent =  $request->get('prof');
        $parent->email_parent =  $request->get('email');
        $parent->mdp_parent =  $request->get('password');
        if($role =="1"){
            $parent->role = "Père";
            $role="Père";
        }elseif($role =="2"){
            $parent->role = "Mère";
            $role="Mère";
        }else{
            echo ("please select adequate type of role !!");
            return redirect('/admin-addParent/'. $id);
        } 

        $parent->save();

        //change student's parent
        $id_parent= $parent->id_parent;
        //echo $id_parent;
         if($role =="Père"){
            $eleve->id_pere= $id_parent;
            $eleve->save();
        }elseif($role =="Mère"){
            $eleve->id_mere= $id_parent;
            $eleve->save();
        }else{
            echo ("please select adequate type of role !!");
        } 
        return redirect('/eleve/'. $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function redirectParent(Request $request, $id)
    {
        $eleve= Eleve::find($id);
        return view('pages.addParent')->with('eleve',$eleve);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get parent bu ID
        return Parents::find($id);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateParent(Request $request, $id)
    {
        $parent= Parents::find($id);

        $role= $request->get('role');
        if($role =="1"){
            $parent->role = "Père";
        }elseif($role =="2"){
            $parent->role = "Mère";
        }else{
            echo ("please select adequate type of role !!");
            return view('pages.updateParent')->with('parent',$parent);
        } 
        $parent->nom_parent =  $request->get('nom');
        $parent->tel_parent =  $request->get('tel');
        $parent->prof_parent =  $request->get('prof');
        $parent->email_parent =  $request->get('email');
        $parent->mdp_parent =  $request->get('password');

        $parent->save();
        return redirect("/parents");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRedirect(Request $request, $id)
    {
       $parent= Parents::find($id);
        return view('pages.updateParent')->with('parent',$parent);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prnt= Parents::find($id);
      /*  if($prnt->role =="Père"){
            $eleves = Eleve::where('id_pere', $id)->get();
            foreach ($eleves as $eleve) {
                 $eleve->id_pere=null;
                 $eleve->save();
            }
        }else{
            $eleves = Eleve::where('id_mere', $id)->get();
            foreach ($eleves as $eleve) {
                $eleve->id_mere=null;
                $eleve->save();
           }
        } */
        
        $prnt->delete();
        return redirect('/eleve');
    }
}
