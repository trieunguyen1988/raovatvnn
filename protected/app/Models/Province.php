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
        'country_id', 'province_name', 'published',
    ];

    public function getAll()
    {
        $provinces = $this->select(['province_id', 'province_name', 'country.country_name'])
            ->join('country', $this->table.'.country_id', '=', 'country.country_id')
            ->where($this->table.'.published', 1)
            ->where($this->table.'.delete_flg', 0)
            ->orderby($this->table.'.province_name', 'ASC')->paginate(10);
        return $provinces;
    }

    public function getById($province_id)
    {
        if (!$province_id) {
            return false;
        }

        $province = $this->where('province_id', $province_id)
            ->where('published', 1)
            ->where('delete_flg', 0)
            ->first();
        return $province;
    }

    public function updateById($provice_id, $params){
        $province = $this->getById($provice_id);

        if (!$province || empty($params)){
            return false;
        }

        foreach ($params as $field => $value){
            $province->$field = $value;
        }
        return $province->save();
    }

    public function deleteProvince($province_ids){
        if (!$province_ids){
            return false;
        }

        if (!is_array($province_ids)){
            $province_ids = array($province_ids);
        }

        $updData = [
            'delete_flg' => 1
        ];

        return $this->whereIn('province_id', $province_ids)->update($updData);
    }
}
