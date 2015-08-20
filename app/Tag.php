<?php
/**
 * Created by PhpStorm.
 * User: cosorio
 * Date: 05-08-15
 * Time: 10:52 PM
 */

namespace Agricola;

use Illuminate\Database\Eloquent\Model;


class Tag extends Model{

    protected $table = 'tags';

    public function getTodoAttribute(){
        return $this->name . '... ' . $this->description;
    }

} 