<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_code';
    public $incrementing = false;           // PK string, bukan auto increment
    protected $keyType = 'string';

    protected $fillable = ['item_code', 'item', 'unit_price', 'company_id'];

    protected $casts = [
        'unit_price' => 'decimal:2',
    ];

    // Item dimiliki oleh satu company
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    // Item bisa muncul di banyak transaksi sales
    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class, 'item_code', 'item_code');
    }
}
