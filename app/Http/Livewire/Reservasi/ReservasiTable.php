<?php

namespace App\Http\Livewire\Reservasi;

use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\Rules\Rule;

final class ReservasiTable extends PowerGridComponent
{
    use ActionButton;

    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'delete',
            ]
        );
    }

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = false;

    public string $primaryKey = 'reservasis.id', $primaryKeyName = 'reservasis.id';
    public string $sortField = 'reservasis.id';


    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showSearchInput()
            ->showExportOption('download', ['excel', 'csv']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return  \Illuminate\Database\Eloquent\Builder<\App\Models\User>|null
     */
    public function datasource(): ?Builder
    {
        return Reservasi::query()
            ->join('kamars', function ($kamars) {
                $kamars->on('reservasis.id_kamar', '=', 'kamars.id');
            })
            ->join('tamus', function ($tamu) {
                $tamu->on('reservasis.id_tamu', '=', 'tamus.id');
            })
            ->select('reservasis.*', 'kamars.tipe_kamar', 'tamus.nama');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [
            'GetTamu' => [
                'nama'
            ],
            'GetKamar' => [
                'tipe_kamar'
            ]
        ];
    }


    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('id_tamu')
            ->addColumn('nama_tamu', function (Reservasi $reservasi) {
                return $reservasi->GetTamu->nama;
            })

            ->addColumn('id_kamar', function (Reservasi $reservasi) {
                return $reservasi->id_kamar;
            })
            ->addColumn('tipe_kamar', function (Reservasi $reservasi) {
                return $reservasi->GetKamar->tipe_kamar;
            })

            ->addColumn('tgl', function (Reservasi $reservasi) {
                return Carbon::parse($reservasi->tgl)->format('H:i d/m/Y');
            })
            ->addColumn('no_kamar')
            ->addColumn('tgl_checkin', function (Reservasi $reservasi) {
                return Carbon::parse($reservasi->tgl_checkin)->format('H:i d/m/Y');
            })
            ->addColumn('tgl_checkout', function (Reservasi $reservasi) {
                return Carbon::parse($reservasi->tgl_checkout)->format('H:i d/m/Y');
            })
            ->addColumn('status', function (Reservasi $reservasi) {
                return ($reservasi->status ? 'Check-In' : 'Check-Out');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        $canEdit = true; //User has edit permission

        return [
            Column::add()
                ->title('Nama tamu')
                ->field('nama_tamu')
                ->makeInputText('tamus.nama')
                ->searchable()
                ->sortable(),

            Column::add()
                ->title('Tipe kamar')
                ->field('tipe_kamar')
                ->makeInputSelect(Kamar::with('Reservasi')->get(), 'tipe_kamar', 'id_kamar')
                ->searchable()
                ->sortable(),

            Column::add()
                ->title('Tgl Booking')
                ->field('tgl')
                ->editOnClick($canEdit)
                ->makeInputDatePicker()
                ->searchable()
                ->sortable(),
            Column::add()
                ->title('Check-in')
                ->field('tgl_checkin')
                ->editOnClick($canEdit)
                ->makeInputDatePicker()
                ->searchable()
                ->sortable(),

            Column::add()
                ->title('Check-out')
                ->field('tgl_checkout')
                ->editOnClick($canEdit)
                ->makeInputDatePicker()
                ->searchable()
                ->sortable(),

            Column::add()
                ->title('Status')
                ->field('status')
                ->makeBooleanFilter('reservasis.status', 'Check-In', 'Check-Out')
                ->searchable()
                ->sortable(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Reservasi Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */


    public function actions(): array
    {
        return [
            // Button::add('edit')
            //     ->caption('Edit')
            //     ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
            //     ->route('reservasi.edit', ['reservasi' => 'id']),

            Button::add('destroy')
                ->caption('Delete')
                // ->class('text-red-500 px-3 py-2 m-1 text-sm shadow-md rounded')
                ->class('bg-red-500 hover:bg-gradient-to-br shadow-lg shadow-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-red-500 text-center mr-2 mb-2')
                // ->emit('delete', ['reservasi' => 'id'])
                ->openModal('reservasi.delete-reservasi', [
                    'reservasiId'                  => 'id',
                    'confirmationTitle'       => 'Delete Reservasi',
                    'confirmationDescription' => 'Are you sure you want to delete this data?',
                ]),
        ];
    }

    // public function delete(Reservasi $reservasi)
    // {
    //     $reservasi->delete();
    //     $this->showUpdateMessages = true;
    // }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Reservasi Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\RuleActions>
     */


    public function actionRules(): array
    {
        return [

            //Hide button edit for ID 1
            // Rule::button('edit')
            //     ->when(fn ($reservasi) => $reservasi->id === 1)
            //     ->hide(),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

    /**
     * PowerGrid Reservasi Update.
     *
     * @param array<string,string> $data
     */


    public function update(array $data): bool
    {
        if ($data['field'] == 'tgl' && $data['value'] != '') {
            $data['field'] = 'tgl';
            $data['value'] =  Carbon::createFromFormat('H:i d/m/Y', $data['value']);
        }
        if ($data['field'] == 'tgl_checkin' && $data['value'] != '') {
            $data['field'] = 'tgl_checkin';
            $data['value'] =  Carbon::createFromFormat('H:i d/m/Y', $data['value']);
        }
        if ($data['field'] == 'tgl_checkout' && $data['value'] != '') {
            $data['field'] = 'tgl_checkout';
            $data['value'] =  Carbon::createFromFormat('H:i d/m/Y', $data['value']);
        }
        // try {
        //     $updated = Reservasi::query()
        //         ->find($data['id'])
        //         ->update([
        //             $data['field'] => $data['value']
        //         ]);
        // } catch (QueryException $exception) {
        //     $updated = false;
        // }

        $updated = Reservasi::query()
            ->with('GetTamu')
            ->update([
                $data['field'] => $data['value']
            ]);
        return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
}
