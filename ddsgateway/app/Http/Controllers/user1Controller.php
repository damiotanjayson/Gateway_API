<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use App\Services\User1Service;




Class user1Controller extends Controller {
    use ApiResponser;
    public $user1Service;
    private $request;


    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }


    public function displayUser(){
        return $this->successResponse($this->user1Service->obtainUsers1()); 
    }
    
    public function addUser(Request $request){
        return $this->successResponse($this->user1Service->createUser1($request->all(),Response::HTTP_CREATED));
    }

    public function updateUser(Request $request, $id){
        return $this->successResponse($this->user1Service->editUser1($request->all(),$id));
    }

    public function deleteUser($id){
        return $this->successResponse($this->user1Service->deleteUser1($id));
    }

    public function readUser($id){
        return $this->successResponse($this->user1Service->getUser1($id));
    }
}