<?php

namespace App\DataTables;

use App\Models\Poubelle;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PoubelleDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('edit', function ($poubelle) {
                return '<a href="' . route('poubelles.edit', $poubelle->id) . '" class="btn btn-xs btn-warning btn-block">Modifier</a>';
            })
            ->addColumn('destroy', function ($poubelle) {
                return '<a href="' . route('poubelles.destroy.alert', $poubelle->id) . '" class="btn btn-xs btn-danger btn-block">Supprimer</a>';
            })
            ->editColumn('public', function ($poubelle) {
                return $poubelle->public ? 'Publique' : 'Privée';
            })
            ->editColumn('zone_id', function ($poubelle) {
                return $poubelle->zone->title;
            })
            ->rawColumns(['public', 'edit', 'destroy']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Poubelle $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Poubelle $model)
    {
        return $model->with('zone')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('poubelledatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->lengthMenu()
                    ->language('//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('numero')->title('Numéro'),
            Column::make('public')->title('Type')->addClass('text-center'),
            Column::make('latitude')->title('Latitude'),
            Column::make('longitude')->title('Longitude'),
            Column::make('zone_id')->title('zone'),
            Column::computed('edit')
                ->title('')
                ->width(60)
                ->addClass('text-center'),
            Column::computed('destroy')
                ->title('')
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Poubelle_' . date('YmdHis');
    }
}
