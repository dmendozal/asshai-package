<?php


namespace Firstparcial\Asshai\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];
    protected $table = "groups";
    protected $fillable = ['name','description'];
    protected $primaryKey = 'id';
}
