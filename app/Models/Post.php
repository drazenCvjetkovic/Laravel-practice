<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    //ako smo dali modelu neki drugi naziv(npr.postsAdmin),a želimo ga koristiti kao model tablice posts
    //izričito ga deiniramo da se odnosi na tablicu post.

    //propety for soft delete
    protected $date = ['deleted_at'];

    protected $fillable = [
        'title',
        'content'
    ];

}
