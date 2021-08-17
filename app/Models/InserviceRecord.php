<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InserviceRecord extends Model
{
    use HasFactory;
    protected $fillable=['record_no','rank','pat_name','comp_code','dob','address','mob_no','unit','approved_in','user_id'];
   //view or base table not found error solution
    protected $table='inservicerecords';
    public function user(){
        return $this->belongsTo(User::class);
    }
}
