<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class generatetag extends Model
{
    protected $table = 'generatetag';

    protected $fillable = [
        'company_id',
        'department_id',
        'category_id',
        'models_id', // Ubah dari model_id jadi models_id
        'counter',
        'purchase_date',
    ];
}
