<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function items()
    {
        return $this->belongsToMany(MasterItem::class, 'category_items', 'master_category_id', 'master_item_id');
    }
}
