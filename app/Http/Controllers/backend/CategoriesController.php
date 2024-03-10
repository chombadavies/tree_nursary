<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        // dd($categories);
        $data['page_title']="Categories";
        
        return view('backend.categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['page_title']=" Create Categories";
        
        return view('backend.categories.create',$data);
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
            $ImagePath= "";
            
        }


        $data=$request->all();
        $data['image']=$image;
       
      
    //    dd($data);
        $status=Category::create($data);
     
        if($status){
         
            return redirect()->route('categories.index')->with('success','Category Added successfully');
        }else{
            return back()->with('error','failed try again');
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
        $data['page_title']=" Edit Category";
        $category=Category::findOrFail($id);
        return view('backend.categories.edit',$data)->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data =$request->all();
      
       $category=Category::findOrFail($id);
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
            $image=$category->image;
            
        }
        $data=$request->all();
        $data['image']=$image;
       
      
    //    dd($data);
        $status=$category->fill($data)->save();
     
        if($status){
         
            return redirect()->route('categories.index')->with('success','Category Updated successfully');
        }else{
            return back()->with('error','failed try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $valuechain=Category::findOrFail($id);
        $valuechain->delete();
        return redirect()->route('categories.index')->with('success','Category Deleted successfully');
    }

    public function fetchCategories(){
        $models = DB::select('SELECT * FROM `categories`');
       
      
        return Datatables::of($models)
           ->rawColumns(['action','photo'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })
       
            ->addColumn('action', function ($model) {
                $edit_url = route('categories.edit',$model->id);
                $delete_url = route('categories.destroy',$model->id);
            
                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a  style="cursor:pointer;" class="reject-modal" data-title="Edit Category" data-url="' . $edit_url . '">Edit Material</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li>
        <form action="' . $delete_url . '" method="post" id="delete-form-' . $model->id . '">
            ' . csrf_field() . '
            ' . method_field('DELETE') . '
            <a style="cursor:pointer;" href="#" class="delete-news-button" onclick="event.preventDefault(); document.getElementById(\'delete-form-' . $model->id . '\').submit();">Delete Category</a>
           
        </form>
    </li>
        </ul>
        </div> ';

            })
            ->make(true);
    
        
    }
}
