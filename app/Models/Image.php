<?php

namespace App\Models;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['path'];
    public function travel():BelongsTo{
        return $this->belongsTo(Travel::class);
    }
}
