<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id','Work_location','description','remarks','Date','check_in','check_out','Total_Hours','IP'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getAll()
    {
        return $this->with('user')->latest()->get();
    }
    public function getone()
    {
        # code...
        return $this->with('user')->get('*')->where('user_id', auth()->User()->id);
    }
}
