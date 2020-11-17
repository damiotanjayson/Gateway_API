<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service{
    use ConsumesExternalService;

    public $baseUri;
    
    public function __construct(){
        $this->baseUri = config('services.users1.base_uri');
    }

    public function obtainUsers1(){
        return $this->performRequest('GET','/Display');
    }

    public function createUser1($data){
        return $this->performRequest('POST', '/Add',$data);
    }

    public function getUser1($id){
        return $this->performRequest('GET', "/View/{$id}");
    }

    public function editUser1($data, $id){
        return $this->performRequest('PUT',"/Update/{$id}", $data);
    }
    
    public function deleteUser1($id){
        return $this->performRequest('DELETE', "/Delete/{$id}");
    }


}