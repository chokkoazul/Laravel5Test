<?php namespace Agricola;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

    public function getAgeAttribute(){

//        $this->edadad = \Carbon\Carbon::parse($this->fecha_nacimiento)->age;
        return \Carbon\Carbon::parse($this->fecha_nacimiento)->age;
    }



}
