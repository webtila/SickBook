<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExService extends Model
{
    use HasFactory;
    protected $fillable=['record_no','rank','pat_name','pension','ctz_no','dob','mob_no','approved_in','book_expiry','user_id'];
    protected $table="exservicerecords";
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
