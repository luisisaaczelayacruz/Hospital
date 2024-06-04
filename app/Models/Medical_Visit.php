<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_Visit extends Model
{
    protected $table='medical_visits';
    protected $fulleable= ['id','hour','date','adress'];

    public function Patients()

    {
        return $this->hasone(Patient::class);
    }
}
