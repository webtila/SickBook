<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exfamily extends Model
{
    use HasFactory;
    protected $fillable=['record_no','pat_name','dob','ctz_no','approved_in','mob_no','rel','rank','ex_staff_name','pension','book_expiry','user_id'];
    protected  $table='exfamilyrecords';

    public function user(){
        return $this->belongsTo(User::class);

    }
}
