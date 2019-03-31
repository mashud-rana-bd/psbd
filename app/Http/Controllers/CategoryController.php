<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;

use App\Category;


class CategoryController extends Controller
{
    //
    public function addCategory(Request $request){
    	if($request->isMethod('post')){
            

            $data = $request->all();
            $destination_path=public_path()."/category_images/".$data['category_name'];
            if (! File::exists($destination_path)) {
                File::makeDirectory($destination_path,0777,true);
            }
            $image_array=$data["file"];
            $array_length = count($image_array);
            $category = new Category;
            
            $new_named_array=array();
            for($i=0; $i< $array_length; $i++)
            {
                $image_ext = $image_array[$i]->getClientOriginalExtension();
                $new_image_name= $i.".".$image_ext;
                $image_array[$i]->move($destination_path,$new_image_name);
                array_push($new_named_array,$new_image_name);
            }
            $imploded_new_named_Array= implode(" ",$new_named_array);
            //echo "<pre>"; print_r($array_length); die;
    		//echo "<pre>"; print_r($data); die;
            // if(empty($data['status'])){
            //     $status='0';
            // }else{
            //     $status='1';
            // }
    		
             $category->name = $data['category_name'];
            
            //$category->parent_id = $data['parent_id'];
    		 $category->description = $data['description'];
             $category->url = $data['url'];
             $category->image = $imploded_new_named_Array;
            //$category->status = $status;
    		 $category->save();
    		return redirect('/admin/view-category')->with('flash_message_success', 'Category has been added successfully');
    	}
        // $levels = Category::where(['parent_id'=>0])->get();
    	return view('admin.categories.add_category');
    }

    public function viewCategory(Request $request){
       
    	$categories = Category::get();
    	return view('admin.categories.view_category')->with(compact('categories'));
    }

    public function editCategory(Request $request, $id = null){
        $previous_folder=Category::where(['id'=>$id])->pluck('name')->first();
        File::deleteDirectory(public_path()."/category_images/".$previous_folder);

        if($request -> isMethod('post')){
            $data = $request->all();
            $destination_path=public_path()."/category_images/".$data['category_name'];
            if (! File::exists($destination_path)) {
                File::makeDirectory($destination_path,0777,true);
            }
            $image_array=$data["file"];
            $array_length = count($image_array);
            $category = new Category;
            $new_named_array=array();
            for($i=0; $i< $array_length; $i++)
            {
                $image_ext = $image_array[$i]->getClientOriginalExtension();
                $new_image_name= $i.".".$image_ext;
                $image_array[$i]->move($destination_path,$new_image_name);
                array_push($new_named_array,$new_image_name);
            }
            $imploded_new_named_Array= implode(" ",$new_named_array);
            //echo "<pre>"; print_r($data); die;
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],'description'=>$data['description'],'url'=>$data['url'],'image'=>$imploded_new_named_Array]);
            return redirect('/admin/view-category')->with('flash_message_success', 'Category has been updated successfully');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
    	return view('admin.categories.edit_category')->with(compact('categoryDetails'));
        
    }
    public function deleteCategory($id = null){
        if(!empty($id)){
            
            $value=Category::where(['id'=>$id])->get();
            $folder=Category::where(['id'=>$id])->pluck('name')->first();

            Category::where(['id'=>$id])->delete();
            File::deleteDirectory(public_path()."/category_images/".$folder);
            return redirect()->back()->with('flash_message_success', 'Category has been deleted successfully');
        }
        
        
    }
}
