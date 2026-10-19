<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companies extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['company_id', 'company_name', 'headquarters_phone_number'];
    public $timestamps = true;

    public function items()
    {
        return $this->hasMany(Items::class, 'company_id', 'company_id');
    }
}