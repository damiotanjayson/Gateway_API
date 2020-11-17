<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use App\Services\User2Service;




Class user2Controller extends Controller {
    use ApiResponser;
    public $user2Service;
    private $request;


    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }


    public function displayUser(){
        return $this->successResponse($this->user2Service->obtainUsers2()); 
    }
    
    public function addUser(Request $request){
        return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
    }

    public function updateUser(Request $request, $id){
        return $this->successResponse($this->user2Service->editUser2($request->all(),$id));
    }

    public function deleteUser($id){
        return $this->successResponse($this->user2Service->deleteUser2($id));
    }

    public function readUser($id){
        return $this->successResponse($this->user2Service->getUser2($id));
    }
}