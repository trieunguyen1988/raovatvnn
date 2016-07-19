<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    protected $primaryKey = 'province_id';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_name', 'published',
    ];

    public function getAll()
    {
        $provinces = $this->select(['province_id', 'province_name'])
            ->where('published', 1)
            ->where('delete_flg', 0)
            ->orderby('province_name', 'ASC')->paginate(10);
        return $provinces;
    }

    public function getById($province_id)
    {
        if (!$province_id) {
            return false;
        }

        $province = $this->where('province_id', $province_id)
            ->where('delete_flg', 0);
        return $province;
    }
}
