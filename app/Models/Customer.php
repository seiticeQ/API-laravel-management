<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'group_id'
    ];

    public function groups(){
        return $this->belongsTo(CustomerGroup::class, 'group_id');
    }
}
