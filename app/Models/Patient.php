<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table='patients';
    protected $fulleable=['id','name','last_name','gender','civil_status','addres','telephone'];

    public function Medical_Visit()
    {
        return $this->hasmany(Medical_Visit::class);
    }
}
