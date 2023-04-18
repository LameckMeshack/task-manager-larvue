<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $table = 'status';

    // Register a saving event that will be called before saving the model
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($status) {
    //         // Validate the name field to only allow the values 'Not Started', 'In Progress' and 'Completed'
    //         $allowedNames = ['Not Started', 'In Progress', 'Completed'];
    //         if (!in_array($status->name, $allowedNames)) {
    //             throw new \Exception('Invalid status name. Allowed values are: ' . implode(', ', $allowedNames));
    //         }
    //     });
    // }
}
