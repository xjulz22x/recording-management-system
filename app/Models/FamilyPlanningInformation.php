<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyPlanningInformation extends Model
{
    use HasFactory;

     protected $guarded = [];

     public function identifyingPlanning()
    {
        return $this->belongsTo(IdentifyingInformation::class);
    }
     
}
