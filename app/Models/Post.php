<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{

  // use HasFactory;

  //一括代入が無効されているため$fillableで設定した値のみ一括代入できる。
  protected $fillable = [
    'content',
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
