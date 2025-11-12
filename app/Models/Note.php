<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Link to table notes(Just necessary if do no respect the name ruell)
    protected $table = 'notes';
    //Field of the table can you have manipulated from the model. Y this case all lest (ID) so it is auto generate
    protected $fillable = ['title', 'description', 'done', 'author'];
    //IS the reverse of ($fillable) and is not necessary define if you define ($fillable)
    protected $guarded = ['id', 'created_at', 'updated_at'];
    //Is used for mapper date
    protected $casts = ['done' => 'boolean'];
    //Are the field you not show in the json. Example: the field PASSWORD
    protected $hidden = ['created_at', 'updated_at'];
}
