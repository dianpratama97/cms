<?php

namespace App\DataTables;


use App\Models\NilaiMagang;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MagangDataTable extends DataTable
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
            ->addColumn('action', 'magang.action')
            ->setRowId('id')
            ->addColumn('status', function ($row) {
                if ($row->status == 0) {
                    $status = '<span class="badge text-bg-danger">BELUM UPLOAD</span>';
                } else {
                    $status = '<span class="badge text-bg-success">NILAI DI UPLOAD</span>';
                }
                return $status;
            })
            ->addColumn('action', function ($row) {
                $data = ' <button type="button" data-id=' . $row->id . ' data-jenis="show" class="btn btn-xs action btn-info"><i class="ti ti-eye"></i></button>';
                return $data;
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(NilaiMagang $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('magang-table')
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
            Column::make('name'),
            Column::make('nisn'),
            Column::make('jurusan'),
            Column::make('status'),
            Column::computed('action')
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
        return 'Magang_' . date('YmdHis');
    }
}
