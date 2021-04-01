<?php

namespace App\DataTables;

use App\Models\Programmation;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ProgrammeDataTable extends DataTable
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
            ->addColumn('edit', function ($entreprise) {
                return '<a href="' . route('entreprises.edit', $entreprise->id) . '" class="btn btn-xs btn-warning btn-block">Modifier</a>';
            })
            ->addColumn('destroy', function ($entreprise) {
                return '<a href="' . route('entreprises.destroy.alert', $entreprise->id) . '" class="btn btn-xs btn-danger btn-block">Supprimer</a>';
            })
            ->editColumn('entreprise_id', function ($entreprise) {
                return $entreprise->agence->name;
            })
            ->editColumn('zone_id', function ($entreprise) {
                return $entreprise->zone->title;
            })
            ->rawColumns(['edit', 'destroy']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Programmation $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Programmation $model)
    {
        return $model->with('zone', 'entreprise')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('programmes-table')
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
            Column::make('date_debut')->title('Date début'),
            Column::make('date_fin')->title('Date fin'),
            Column::make('entreprise_id')->title('Agence'),
            Column::make('zone_id')->title('Zone'),
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
        return 'Programme_' . date('YmdHis');
    }
}
