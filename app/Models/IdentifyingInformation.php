<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentifyingInformation extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function familyPlanningInformations()
    {
        return $this->hasOne(FamilyPlanningInformation::class);
    }

     public function familyInformations()
    {
        return $this->hasOne(FamilyInformation::class);
    }

     public function assesmentAndUploads()
    {
        return $this->hasOne(AssesmentAndUploads::class);
    }

}
