<?php
/**
 * Created by PhpStorm.
 * User: cosorio
 * Date: 05-08-15
 * Time: 09:27 PM
 */

namespace Agricola\Http\Controllers;

use Agricola\Tag;
use Agricola\User;
use Agricola\UserProfile;

class UsersController extends Controller {

    public function getAgrega(){
        $tag = new Tag;

        $tag->name = 'tag prueba';
        $tag->description = 'desc tag prueba';

        $tag->save();

        echo 'agregado';
    }

    public function getTaag(){
        $result = Tag::all();

        //dd($result->nombre_completo);
        //dd($result->getNombreCompletoAttribute());
        foreach($result as $row){
            echo $row->name.'<br>';
        }
        //dd($result->toArray());

    }

    public function getCris2(){
        $users = User::select('USERS.id as userId','first_name','user_profiles.fecha_nacimiento')
            //->with('profile')
            ->where('first_name','=','Adelia')
            ->orderBy('first_name','ASC')
            ->join('user_profiles','users.id','=','user_profiles.user_id')
            ->get();

        //dd($result->nombre_completo);
        //dd($result->getNombreCompletoAttribute());
        dd($users->toArray());
    }

    public function getCris(){
        $users = User::select('id','first_name')
            ->with('profile')
            ->where('first_name','<>','Cloyd')
            ->orderBy('first_name','ASC')
            ->get();

        //dd($result->nombre_completo);
        //dd($result->getNombreCompletoAttribute());
        dd($users->toArray());
    }

    public function getAge(){
        $result = UserProfile::first();

        $result->getAgeAttribute();
        dd($result);

        //dd($result->getNombreCompletoAttribute());


    }


    public function getOrm(){
        $result = User::first();

        //dd($result->nombre_completo);
        //dd($result->getNombreCompletoAttribute());
        dd($result->profile->age);


    }

    public function getTag(){
        $result = Tag::first();

        dd($result->todo);
    }

    public function getIndex(){
        $result = \DB::table('users')
            ->select(
                'users.*',
                'user_profiles.id as profi',
                'user_profiles.fecha_nacimiento as fecha_nacimiento'
            )
            //->where('first_name','=','Cristian')
            ->orderBy('first_name','ASC')
            ->leftjoin('user_profiles','users.id','=','user_profiles.user_id')
            ->get();

        foreach($result as $row){
            $row->completo = $row->first_name." ".$row->last_name;
            $row->edad = \Carbon\Carbon::parse($row->fecha_nacimiento)->age;
        }

        dd($result);

        return $result;
    }

} 