<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    protected $primaryKey = 'country_id';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_name', 'published',
    ];

    public function getAll($recordOfPage = PER_PAGE){
        return $this->where('delete_flg', 0)
        ->where('published', 1)
        ->paginate($recordOfPage);
    }
}
