<?php

namespace App\DataTables\Backend;

use App\Models\Country;
use Yajra\Datatables\Services\DataTable;

class CountryDatatable extends DataTable
{
    // protected $printPreview  = 'path.to.print.preview.view';

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'path.to.action.view')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $countries = Country::select(['country_id', 'country_name']);

        return $this->applyScopes($countries);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->ajax('')
                    ->addAction(['width' => '80px'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            ['data' => 'country_id', 'name' => 'country_id', 'title' => 'Country ID'],
            ['data' => 'country_name', 'name' => 'country_name', 'title' => 'Tên quốc gia'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'country';
    }
}
