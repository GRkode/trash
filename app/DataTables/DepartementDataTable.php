<?php

namespace App\DataTables;

use App\Models\Departement;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class DepartementDataTable extends DataTable
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
            ->addColumn('show', function ($departement) {
                return '<a href="' . route('commune.show', $departement->id) . '" class="btn btn-success btn-block">Voir</a>';
            })
            ->rawColumns(['show']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Departement $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Departement $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('departement-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
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
            Column::make('id')->title('N°'),
            Column::make('title')->title('Nom du département'),
            Column::computed('show')
                ->title('Afficher commune')
                ->width(100)
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
        return 'Departement_' . date('YmdHis');
    }
}
