<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infamily extends Model
{
    use HasFactory;

    protected $fillable=['record_no','pat_name','dob','address','mob_no','ctz_no','comp_code','rank','ins_staff_name','rel','unit','approved_in','user_id'];

    protected $table="infamilyrecords";


    public function user(){
        return $this->belongsTo(User::class);
    }
}
