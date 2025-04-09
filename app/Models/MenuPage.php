<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPage extends Model
{
    use HasFactory;

    protected $fillable = ['menu_item_id', 'title', 'content'];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
