<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountCategory extends Model
{
    use HasFactory;

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
