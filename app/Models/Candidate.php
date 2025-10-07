<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
  
    protected $fillable = [
        'num_candidat',
        'id_national',
        'id_wilaya',
        'id_corp',
        'sexe',
        'id_serie',
        'id_exam',
        'id_commune',
        'username',
        'password',
        'birth-certificate-number',
        'birth-certificate-type',
        'gender',

        'last-name',
        'first-name',
        'last-name-latin',
         'first-name-latin',
        'birth-date',
        'id_birth_commune',

        'children-count',
        'id_birth-wilaya',
        'father-first-name',
         'mother-first-name',
        'mother-last-name',
        'marital-status',

         'personal-address',
        'id_residence-baladiya',
        'phone-number',
         'email',
        'military-status',

         'military-status',
        'document-reference',
        'document-issue-date',
         'certificate-name',
        'military-status',
       
         'certificate-number',
        'certificate-date',
        'document-issue-date',
         'certificate-name',

    ];

    public function wilaya()
    {
        return $this->belongsTo(wilaya::class,'id_wilaya','id_wilaya');
    } 
public function commune()
    {
        return $this->belongsTo(commune::class,'id_commune','id_commune');
    }
}
