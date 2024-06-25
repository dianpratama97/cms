<?php

namespace App\DataTables;

use Carbon\Carbon;
use App\Models\Alumni;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class AlumniDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', 'alumni.action')
            ->setRowId('id')
            ->addColumn('checkbox', function ($row) {
                $cek = '<div class="form-check">
                            <input class="form-check-input" type="checkbox" value=' . $row->id . ' name="id[]">
                          </div>';
                return $cek;
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Alumni $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->parameters(['serachDelay' => 1000])
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('No')->searchable(false)->orderable(false),
            Column::make('nama_lengkap'),
            Column::make('status_alumni'),
            Column::make('nama_lengkap'),
            Column::make('nis'),
            Column::make('kompetensi_keahlian'),
            Column::make('tahun_lulus'),
            Column::make('alamat'),
            Column::make('no_telp'),
            Column::make('email'),
            Column::computed('checkbox')->title('Pilih')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Alumni_' . date('YmdHis');
    }
}
