<?php

namespace App\Models;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['path'];
    public function travel():BelongsTo{
        return $this->belongsTo(Travel::class);
    }
    public static function getUrlByFilePath($filePath, $w=null, $h=null)
    {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
        $path=dirname($filePath);
        $fileName=baseName($filePath);
        $file="{$path}/crop_{$w}x{$h}_{$fileName}";
        return Storage::url($file);
    }
    public function getUrl($w=null, $h=null)
    {
        return self::getUrlByFilePath($this->path, $w, $h);    
    }

    protected function casts(): array{
        return [
            'labels' => 'array',
        ];
    }
}
