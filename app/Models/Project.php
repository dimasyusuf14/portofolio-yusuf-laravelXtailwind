<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function projectCategories()
    {
        return $this->hasMany(ProjectCategory::class, 'project_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_category');
    }

    // app/Models/Project.php

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
