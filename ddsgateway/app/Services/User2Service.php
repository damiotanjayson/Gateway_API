<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User2Service{
    use ConsumesExternalService;

    public $baseUri;
    
    public function __construct(){
        $this->baseUri = config('services.users2.base_uri');
    }

    public function obtainUsers2(){
        return $this->performRequest('GET','/Display');
    }

    public function createUser2($data){
        return $this->performRequest('POST', '/Add',$data);
    }

    public function getUser2($id){
        return $this->performRequest('GET', "/View/{$id}");
    }

    public function editUser2($data, $id){
        return $this->performRequest('PUT',"/Update/{$id}", $data);
    }
    
    public function deleteUser2($id){
        return $this->performRequest('DELETE', "/Delete/{$id}");
    }
}