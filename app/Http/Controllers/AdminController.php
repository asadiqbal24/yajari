<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


class AdminController extends Controller
{
    public function admin_home()
    {
        return view('admin.adminhome');
    }
    public function category_list()
    {
        $category=Category::get();
      return view('admin.category_list',compact('category'));  
    }

    public function admin_add_new_category()
    {
     return view('admin.admin_add_new_category');  
    }

    public function admin_category_save(Request $request)
    {
        $new=new Category();
        $new->name=$request->category_name;
        $new->save();
        alert()->success('Category Inserted Successfully');
        return redirect()->route('category-list');
    }


    public function admin_category_edit($id)
    {
       
       $edit= Category::where('id',$id)->first();
       return view('admin.admin_category_edit',compact('edit'));
    }

    public function admin_category_update(Request $request)
    {
      
       $update= Category::where('id',$request->id)->first();
       if (!empty($update)) {
           $update->name=$request->category_name;
           $update->save();
       }
       toast('Category Is Updated Successfully','success');
       return redirect()->route('category-list');


    }

    public function admin_category_delete($id)
    {
        $delete = Category::where('id',$id)->delete();
        toast('Category Is Deleted Successfully','success');
        return redirect()->back();

    }
    public function sub_category_list()
    {
        $sub_category = SubCategory::with('subcategory')->get();
       return view('admin.sub_category_list',compact('sub_category'));
    }

    public function add_new_subcategory()
    {
        $category=Category::get();
     return view('admin.add_new_subcategory',compact('category'));  
    }
    public function admin_subcategory_save(Request $request)
    {

       $new= new SubCategory();
       $new->subcategory_name=$request->subcategory_name;
       $new->category_id=$request->category_id;
       $new->save();
       alert()->success("SubCategory is Inserted Successfully");
       return redirect()->route('sub-category-list');
    }

    public function admin_subcategory_edit($id)
    {
        $category=Category::get();
       $edit = SubCategory::where('id',$id)->first();
       return view('admin.admin_subcategory_edit',compact('edit','category'));
    }

    public function admin_subcategory_update(Request $request)
    {
       $update = SubCategory::where('id',$request->id)->first();
       if (!empty($update)) {
       $update->subcategory_name=$request->subcategory_name;
       $update->category_id=$request->category_id;
       $update->save();

       }
       toast('Subcategory is Updated Successfully','success');
       return redirect()->route('sub-category-list');
    }

    public function admin_subcategory_delete($id)
    {
        $delete=SubCategory::where('id',$id)->delete();
        toast('Subcategory is Deleted Successfully','success');
        return redirect()->back();
    }
    public function user_list()
    {
       return view('admin.user_list');
    }

    public function admin_add_new_user()
    {
      return view('admin.admin_add_new_user');
    }
}
