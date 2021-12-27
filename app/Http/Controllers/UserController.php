<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Mail;
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userRegister(Request $request)
    {
          // dd($request);
        $token = md5(date('Y-m-d').microtime()); 
         
        $this->validate($request, [
            'registerPhoneNumber' => 'required',
            'registerEmail' => 'required|email|unique:users,email',
            'registerPassword' => 'required',
        ]);


        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
            ->verifications
            ->create($data['phone_number'], "sms");


    
        $input = $request->all();
        $user_id=User::insertGetId([
        'name'=>$request->registerFirstName?$request->registerFirstName.' '.$request->registerLastName:$request->registerCompanyName,
        'first_name'=>$request->registerFirstName??$request->registerCompanyName,
        'last_name'=>$request->registerLastName??NULL,
        'company_name'=>$request->registerCompanyName,
        'address'=>$request->registerAddress,
        'password'=>bcrypt($request->registerPassword),
        'siret_number' => $request->registerSiretNumber,
        'phone_number' => $request->registerPhoneNumber??NULL,
        'country' => $request->registerCountrySelect,
        'sms_code' => $request->registerFirstName,
        'email' => $request->registerEmail,
        'remember_token' => $token
        ]);
       

         $id=User::find($user_id);
        $role=DB::table('roles')->where('name','User')->first();
        $id->roles()->attach($role->id);
        
        $email = $request->registerEmail;
        $token=$token;
        $data = ['email'=>$email,'token'=>$token];


        Mail::send('emails.verify_mail',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'New Registration')->from("dhca@fabulousinstruments.com")->subject("New Registration Email Verification");
            });

        return redirect()->back()
                        ->with('success','Registration successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }


     public function email_Verification_opt(Request $request)
    {
        //dd($request);

        $email_opt = md5(date('Y-m-d').microtime());

         $this->validate($request, [
            'email' => 'required'
        ]);


        $email_chk=User::where('email',$request->email)->first();
        if(!empty($email_chk)){

         alert()->error('Email Must Be Unique'); 
        return redirect()->back();

        }


        $user_id=User::insertGetId([
            'email'=>$request->email,
         'email_opt' => substr($email_opt, 0,6),
        ]);
       
        
        $email = $request->email;
        $opt=substr($email_opt,0,6);
        $data = ['email'=>$email,'opt'=>$opt];
        Mail::send('emails.verify_opt',['data'=>$data],function($mail) use ($email){
                    $mail->to($email,'Email Opt Verfication')->from("systems@better1.com")->subject("New Registration Email Verification");
            });
        alert()->success("Your Email OPT is sended. Kindly check your email.");

        return redirect()->back();

    }


    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phone_number' => ['required', 'string'],
        ]);
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phone_number']));
        if ($verification->valid) {
            $user = tap(User::where('phone_number', $data['phone_number']))->update(['isVerified' => true]);
            /* Authenticate user */
            Auth::login($user->first());
            return redirect()->route('home')->with(['message' => 'Phone number verified']);
        }
        return back()->with(['phone_number' => $data['phone_number'], 'error' => 'Invalid verification code entered!']);
    }
}