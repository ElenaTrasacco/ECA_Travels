<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Travel extends Model
{
    use Searchable;
    public function toSearchableArray()
    {
        return 
        [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category, 
        ];   
    }

    use HasFactory;
    protected $fillable = ['title','price','description','time','user_id', 'category_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }
    public static function toBeRevisedCount()
    {
        return Travel::where('is_accepted',null)->count();
    } 
}
