<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'purchase_number';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['purchase_number', 'date_of_purchase', 'customer_id', 'item_code'];
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'customer_id');
    }

    public function item()
    {
        return $this->belongsTo(Items::class, 'item_code', 'item_code');
    }
}