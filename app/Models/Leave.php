<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\This;

class Leave extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function getall()
    {
        # code...
        return $this->with('users')->latest()->get();
    }
    public function getone()
    {
        # code...
        return $this->with('leaves')->select('*')->where('user_id', auth()->User()->id);
    }


}
