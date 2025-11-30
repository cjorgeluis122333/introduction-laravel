<?php

namespace App\Models\relation;

use App\Models\user\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'total_page', 'description', 'author_id', 'student_id'];

//    public function author(): BelongsTo
//    {
//        return $this->belongsTo(Author::class);
//    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
