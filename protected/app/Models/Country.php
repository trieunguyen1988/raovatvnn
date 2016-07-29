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
            ->orderby('country_name', 'ASC')->get();
        return $countries;
    }

    public function getList(){
        $countries = $this->select(['country_id', 'country_name'])
            ->where('published', 1)
            ->where('delete_flg', 0)
            ->orderby('country_name', 'ASC')->paginate(PER_PAGE);
        return $countries;
    }

    public function getById($country_id)
    {
        if (!$country_id) {
            return false;
        }

        $country = $this->where('country_id', $country_id)
            ->where('delete_flg', 0)
            ->first();
        return $country;
    }

    public function deleteById($country_ids)
    {
        if (!$country_ids) {
            return false;
        }

        $country_ids = is_array($country_ids) ? $country_ids : array($country_ids);

        $updData = [
            'delete_flg' => 1,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        return $this->whereIn('country_id', $country_ids)->update($updData);
    }
}
