<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use DB;
use Mail;


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
      
        $users = DB::table('users')
            ->join('role_users', 'role_users.user_id', '=', 'users.id')
            ->get();

       return view('admin.user_list',compact('users'));
    }

    public function admin_add_new_user()
    {
      return view('admin.admin_add_new_user');
    }

    public function admin_user_save(Request $request)
    {
        $token = md5(date('Y-m-d').microtime()); 

        $this->validate($request, [
            'registration_type' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
            'dob' => 'required',
            'image' => 'required',
            'term_condition' => 'required',
            'receive_information' => 'required',    
            
        ]);



        if ($request->hasFile('image')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('image')->getClientOriginalExtension();
                    $filename_original = $request->file('image')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('image')->move($destinationPath,$filename_original))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$filename_original;
                    

                }

        $input = $request->all();
        $user_id=User::insertGetId([
        'first_name'=>$request->fname,
        'last_name'=>$request->lname,
        'company_name'=>$request->company_name,
        'siret_number' => $request->siert_number,
        'address'=>$request->address,
        'password'=>bcrypt($request->password),
        'phone_number' => $request->phone,
        'email' => $request->email,
         'dob' => $request->dob,
         'registration_type' => $request->registration_type,
         'image'=>$thumbnail,
        'remember_token' => $token
        ]);
       

         $id=User::find($user_id);
        $role=DB::table('roles')->where('name','User')->first();
        $id->roles()->attach($role->id);
        $email = $request->email;
        $token=$token;
        $data = ['email'=>$email,'token'=>$token];
         Mail::send('emails.verify_mail',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'New Registration')->from("systems@better1.com")->subject("New Registration Email Verification");
            });

         toast('New User is Created Successfully','success');
        return redirect()->back();
    }


    public function admin_user_edit($id)
    {
        $edit=User::where('id',$id)->first();
        return view('admin.admin_user_edit',compact('edit'));
    }
    public function admin_user_update(Request $request)
    {

             $this->validate($request, [
                    'registration_type' => 'required',
                    'email' => 'required|email|exists:users,email',
                    'phone' => 'required',
                    'address' => 'required',
                    'password' => 'required',
                    'dob' => 'required',
                    'term_condition' => 'required',
                    'receive_information' => 'required',    
                    
                ]);



                if ($request->hasFile('image')) 
                            {

                            $destinationPath = public_path()."/images/images/";
                            $extension =  $request->file('image')->getClientOriginalExtension();
                            $filename_original = $request->file('image')->getClientOriginalName();
                            $fileName = time();
                            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                            if(!$request->file('image')->move($destinationPath,$filename_original))
                            {
                                throw new \Exception("Failed Upload");                    
                            }

                            $thumbnail = asset("/images/images/")."/".$filename_original;
                            

                        }

        $update=User::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->first_name=$request->fname;
            $update->last_name=$request->name;
            $update->company_name=$request->company_name;
            $update->company_name=$request->company_name;
            $update->address=$request->address;
            $update->password=bcrypt($request->passowrd);
            $update->phone_number=$request->phone;
            $update->email=$request->email;
            $update->dob=$request->dob;
            $update->siret_number=$request->siert_number;
            $update->registration_type=$request->registration_type;
            if ($request->hasFile('image')) {

                $update->image=$thumbnail;
            }
            $update->save();

        }
        alert()->success("User Data is Updated Successfully");
        return redirect()->route('user-list');
    }

    public function admin_user_delete($id)
    {
        $delete=User::where('id',$id)->delete();
        toast('User Is Deleted Successfully','success');
        return redirect()->back();
    }
}
