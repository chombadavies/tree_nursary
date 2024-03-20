<?php

namespace App\Http\Controllers\backend;

use App\Models\Material;
use App\Models\ValueChain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title']='Dissemination Materials';
        $manuals=Material::all();
        // dd($manuals);
        return view('backend.materials.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $valuechains= ValueChain::all();
        $data['page_title']= 'Dissemination Materials';
     
        
        return view('backend.materials.create',$data)->with(compact('valuechains'));
    }


    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'pdf.*' => 'required|file|mimes:pdf|max:5120000', // 5120 KB = 5 MB
            'valuechain_id' => 'required|integer', // Example additional validation
        ]);
    
        $files = $request->file('pdf');
    
        if ($files) {
            foreach ($files as $pdf) {
                // Process each file...
                $file_name = $pdf->getClientOriginalName();
                $extension = $pdf->getClientOriginalExtension();
                $file = $file_name . '.' . $extension;
    
                $name = pathinfo($file, PATHINFO_FILENAME);  
                $filePath = 'backend/manuals/'.$name;
                $pdf->move(public_path('backend/manuals'), $name);
    
                $material = new Material();
                $material->title = $name;
                $material->value_chain_id = $request->valuechain_id;
                $material->pdf = $filePath;
                $material->save();
            }
    
            return redirect()->back()->with('success', 'PDF uploaded successfully');
        } else {
            // If no files were uploaded
            return redirect()->back()->withErrors('No PDF files were uploaded.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $valuechain=ValueChain::findOrFail($id);
        $valuechain->delete();
        return redirect()->route('valuechains.index')->with('success','Pest Deleted successfully');
    }
}
