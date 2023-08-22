<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentAndUploads extends Model
{
    use HasFactory;

      protected $guarded = [];

     public function identifyingAssesment()
    {
        return $this->belongsTo(IdentifyingInformation::class);
    }

}
