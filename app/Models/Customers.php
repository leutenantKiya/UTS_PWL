<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['customer_id', 'first_name', 'last_name', 'email'];
    public $timestamps = true;

    public function sales()
    {
        return $this->hasMany(Sales::class, 'customer_id', 'customer_id');
    }
}