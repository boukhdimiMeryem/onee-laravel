<?php

namespace App\Http\Controllers;

use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Models\Norme;
use Illuminate\Support\Facades\Validator;
class NormeController extends Controller
{
    /**                                                                 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $normes=Norme::all();
        return view('datatable',compact('normes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ic' => 'bail|required|string|max:255',
            'titre' => 'bail|required|string',
            'code_nm' => 'bail|required|string|max:255',
            'version_nm' => 'bail|required',
            'origine' => 'bail|required|string|max:255',
            'version_originale' => 'bail|required|string|max:255',
        ]);
        
        
        $normes=new Norme();
        $normes->ic = $request->ic;
        $normes-> code_nm= $request->code_nm;
        $normes-> version_nm= $request->version_nm;
        $normes->titre = $request->titre;
        $normes->origine = $request->origine;
        $normes->version_originale = $request->version_originale;

        // dd($normes);
        $normes->push();

        return redirect('/dashboard');
          


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $ic)
    {
        $norme = Norme::where('ic',$ic)->first();
        return view('show',['norme'=>$norme]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        
        $norme = Norme::where('id',$id)->first();
        return view('edit',['norme'=>$norme]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Norme $norme,Request $request)
    {
        $result=Validator::make( $request->all(), [
            'ic' => 'bail|required|string|max:255',
            'titre' => 'bail|required|string',
            'code_nm' => 'bail|required|string|max:255',
            'version_nm' => 'bail|required',
            'origine' => 'bail|required|string|max:255',
            'version_originale' => 'bail|required|string|max:255'
        ]);
        // dd($result->errors());
        

        $norme->update([
            "ic"=>$request->ic,
            "titre"=>$request->titre,
            "code_nm"=>$request->code_nm,
            "version_nm"=>$request->version_nm,
            "origine"=>$request->origine,
            "version_originale"=>$request->version_originale
        ]);
        // $norme = Norme::where('id',$norme->id)->first();
        // $norme->ic = $request->ic;
        // $norme-> code_nm= $request->code_nm;
        // $norme-> version_nm= '5';
        // $norme->titre = $request->titre;
        // $norme->origine = $request->origine;
        // $norme->version_originale = $request->version_originale;

        // $norme->save();
        return redirect('/dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // $norme = Norme::where('ic',$ic)->first();
        $norme=Norme :: findOrFail($id);
        $norme->delete();
        // return view('datatable',compact('normes'));
        return redirect('/dashboard');
      
    }

    public function search(){
        $search_ic=$_GET['ic_query'];
        $codeNM_result=$_GET['codeNM_query'];
        $normes=Norme::where('ic','LIKE','%'.$search_ic.'%')->where('code_nm','LIKE','%'.$codeNM_result.'%')->get();
        return view ('search',compact('normes'));


    }

    

    
}
