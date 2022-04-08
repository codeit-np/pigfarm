<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCategory extends Model
{
    use HasFactory;
    public function account_category()
    {
        return $this -> belongsTo(AccountCategory::class);
    }
}
