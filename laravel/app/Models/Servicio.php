<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $guarded = [];

    protected $fillable = ['titulo', 'category_id', 'image', 'descripcion'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
