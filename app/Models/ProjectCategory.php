<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'category_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}



