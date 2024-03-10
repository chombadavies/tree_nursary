<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use App\Models\ValueChain;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ValuechainsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page_title']="Categories";
    // $valuechains= ValueChain::all();
    // dd($valuechains);
        
        return view('backend.valuechains.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page_title']="Categories";
        $categories= Category::all();
        
        return view('backend.valuechains.create',$data)->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->all();

        if ($request->hasFile('image')) {

            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension

                // dd('image');
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $image= "";
            
        }
        if ($request->hasFile('details_image')) {

            $image_tmp = $request->file('details_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension

                // dd('image');
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $desc_image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$desc_image;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
               
            }
        } else {
            $desc_image ="";
            
        }


        $data=$request->all();
        $data['image']=$image;
        $data['details_image']=$desc_image;
       
        $status=ValueChain::create($data);
     
        if($status){
         
            return redirect()->route('valuechains.index')->with('success','Value Chain Added successfully');
        }else{
            return back()->with('error','failed try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)

    {

     
        $data['page_title']='Edit Value Chain';
        $categories=Category::all();
        $valuechain=ValueChain::findOrFail($id);
        // dd($valuechain);
        return view('backend.valuechains.edit',$data)->with(compact('categories','valuechain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $data =$request->all();
    
      $valuechain=ValueChain::findOrFail($id);
        if ($request->hasFile('image')) {

            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension

                // dd('image');
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $image= $valuechain->image;
            
        }
        if ($request->hasFile('details_image')) {

            $image_tmp = $request->file('details_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension

                // dd('image');
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $desc_image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$desc_image;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
               
            }
        } else {
            $desc_image =$valuechain->details_image;
            
        }


        $data=$request->all();
        $data['image']=$image;
        $data['details_image']=$desc_image;
       
        $status=$valuechain->fill($data)->save();
     
        if($status){
         
            return redirect()->route('valuechains.index')->with('success','Value Chain Updated successfully');
        }else{
            return back()->with('error','failed try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $valuechain=ValueChain::findOrFail($id);
        $valuechain->delete();
        return redirect()->route('valuechains.index')->with('success','valuechain Deleted successfully');
    }
    public function fetchValuechains(){
        $models=DB::table('value_chains')
        ->join('categories','value_chains.category_id','=','categories.id')
        ->select('value_chains.id','categories.name as category','value_chains.name','value_chains.introduction','value_chains.description','value_chains.image as image')
        ->get();

        return Datatables::of($models)
        ->rawColumns(['action','image','introduction','description'])
        ->editColumn('image',function($model){
         $name=$model->image;
         $path=asset('backend/uploads/'.$name);
        return '<img src="'.$path.'" width="70px;" height="70px;"  alt="category image" >';
        })
        ->editColumn('introduction',function($model){
         $text=$model->introduction;
         $introduction=Str::limit(strip_tags($text), $limit = 50, $end = '...');
          return $introduction;
        })
        ->editColumn('description',function($model){
            $text=$model->description;
            $description=Str::limit(strip_tags($text),$limit=50,$end='...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('valuechains.edit',$model->id);
                $delete_url = route('valuechains.destroy',$model->id);
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Value Chain</a></li>
        <li>
        <form action="' . $delete_url . '" method="post" id="delete-form-' . $model->id . '">
            ' . csrf_field() . '
            ' . method_field('DELETE') . '
            <a style="cursor:pointer;" href="#" class="delete-news-button" onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $model->id . '\').submit();">Delete Value Chain</a>
           
        </form>
    </li>
        </ul>
        </div> ';

            })
            ->make(true);
    }
}
