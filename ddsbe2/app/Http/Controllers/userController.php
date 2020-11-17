<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;



Class UserController extends Controller {
    use ApiResponser;

    private $request;
    private $val = [
        'username' => 'max:20',
        'password' => 'max:20',
    ];

    public function __construct(Request $request){
        $this->request = $request;
    }


    public function displayUser(){
        $users = User::all();

        return $this->successResponse($users);
    }
    
    public function addUser(Request $request){
        
        $rules = [
            'username' => 'required|max:20',
            'password' => 'required|max:20',
        ];
        
        $this->validate($request,$rules);

        $users = User::create($request->all());

        return $this->successResponse($users, Response::HTTP_CREATED);
    }

    public function updateUser(Request $request, $id){
        $users = User::find($id);

        $this->validate($request,$this->val);
        
        if($request->input('password') == null){
            $users->username = $request->input('username');
            $request->input = $users->password;
        }else if($request->input('username') == null ){
            $users->password = $request->input('password');
            $request->username = $users->username;
        }else{
            $users->username = $request->input('username');
            $users->password = $request->input('password');
        }
        $users->save();

        return $this->successResponse('User Updated Successfully',Response::HTTP_OK);
    }

    public function deleteUser($id){
        $users = User::find($id);
        
        $users->delete();
        return $this->successResponse('User Deleted Successfully',Response::HTTP_OK);
    }

    public function readUser($id){
        $users = User::find($id);
 
        if(!$users == null){
            return $this->successResponse($users, Response::HTTP_FOUND);
        }else{
            return $this->successResponse('No users found', Response::HTTP_NOT_FOUND);
        }
    }
    

    //login
    public function loginView(){
        return view('login');
    }

    public function dash(){
        return view('dash');
    }

    public function checkUser(){
        $users = User::all();
        $user = $_GET['user'];
        $pass = $_GET['pass'];

        for($i = 0; $i < count($users);$i++){
            if($users[$i]->username == $user and $users[$i]->password == $pass){
                return redirect()->route('dash');
            }
        }
        return 'No users found or Wrong Credentials';
        
        
    }

}