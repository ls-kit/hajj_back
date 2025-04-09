<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon', 'slug'];

    public function pages()
    {
        return $this->hasMany(MenuPage::class);
    }
}
