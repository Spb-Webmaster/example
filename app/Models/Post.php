<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $img
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'img'
    ];

    public static function createPost($post)
    {
        return (new self())->create([
            'title' => $post['title'],
            'content' => $post['content'] ?? null,
            'img' => $post['img'] ?? null,
        ]);
    }


}
