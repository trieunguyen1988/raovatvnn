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

    public function getAll()
    {
        $countries = $this->select(['country_id', 'country_name'])
            ->where('published', 1)
            ->where('delete_flg', 0)
            ->orderby('country_name', 'ASC')->paginate(10);
        return $countries;
    }

    public function getById($country_id)
    {
        if (!$country_id) {
            return false;
        }

        $country = $this->where('country_id', $country_id)
            ->where('delete_flg', 0);
        return $country;
    }
}
