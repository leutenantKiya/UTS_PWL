<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_code';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['item_code', 'item', 'unit_price', 'company_id'];
    public $timestamps = true;

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id', 'company_id');
    }

    public function sales()
    {
        return $this->hasMany(Sales::class, 'item_code', 'item_code');
    }
}