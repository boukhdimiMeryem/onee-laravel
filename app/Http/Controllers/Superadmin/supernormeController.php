<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\supernorme;
use Illuminate\Http\Request;

class supernormeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $supernorme = supernorme::where('IC', 'LIKE', "%$keyword%")
                ->orWhere('Code_NM', 'LIKE', "%$keyword%")
                ->orWhere('Version_ NM', 'LIKE', "%$keyword%")
                ->orWhere('Titre', 'LIKE', "%$keyword%")
                ->orWhere('Origine', 'LIKE', "%$keyword%")
                ->orWhere('Version_Originale', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $supernorme = supernorme::latest()->paginate($perPage);
        }

        return view('superadmin.supernorme.index', compact('supernorme'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('superadmin.supernorme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        supernorme::create($requestData);

        return redirect('superadmin/supernorme')->with('flash_message', 'supernorme added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $supernorme = supernorme::findOrFail($id);

        return view('superadmin.supernorme.show', compact('supernorme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $supernorme = supernorme::findOrFail($id);

        return view('superadmin.supernorme.edit', compact('supernorme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $supernorme = supernorme::findOrFail($id);
        $supernorme->update($requestData);

        return redirect('superadmin/supernorme')->with('flash_message', 'supernorme updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        supernorme::destroy($id);

        return redirect('superadmin/supernorme')->with('flash_message', 'supernorme deleted!');
    }
}
