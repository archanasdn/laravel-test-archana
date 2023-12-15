<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // Specify the table associated with the model
    protected $table = 'roles';

    // Define the fillable fields
    protected $fillable = ['name', 'description'];

    // Relationships
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}


