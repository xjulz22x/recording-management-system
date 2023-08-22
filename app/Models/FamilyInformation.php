<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyInformation extends Model
{
    use HasFactory;

     protected $guarded = [];

     public function identifyingFamily()
    {
        return $this->belongsTo(IdentifyingInformation::class);
    }
     

}
