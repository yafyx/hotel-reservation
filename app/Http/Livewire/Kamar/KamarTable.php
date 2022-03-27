<?php

namespace App\Http\Livewire\Kamar;

use App\Models\Kamar;
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

final class KamarTable extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

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
        return Kamar::query();
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
        return [];
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
            ->addColumn('tipe_kamar')
            ->addColumn('deskripsi_kamar')
            ->addColumn('fasilitas', function ($fasilitas) {
                return implode(', ', json_decode($fasilitas->fasilitas));
            })
            ->addColumn('gambar', function ($kamar) {
                $images = json_decode($kamar->gambar);
                $html = '';
                foreach ($images as $image) {
                    $html .= '<img src="' . asset('storage/' . $image) . '" width="100" height="100">';
                }
                return $html;
            })
            ->addColumn('jumlah_kamar');
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    public function header(): array
    {
        return [
            Button::add('create')
                ->caption(__('Tambah kamar'))
                ->class('block cursor-pointer text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br shadow-lg shadow-lime-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center')
                ->openModal('kamar.create-kamar', []),
        ];
    }

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('ID')
                ->field('id')
                ->hidden()
                ->makeInputRange(),


            Column::add()
                ->title('TIPE KAMAR')
                ->field('tipe_kamar')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('Deskripsi KAMAR')
                ->field('deskripsi_kamar')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('FASILITAS')
                ->field('fasilitas')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('GAMBAR')
                ->field('gambar')
                ->sortable()
                ->searchable(),

            Column::add()
                ->title('JUMLAH KAMAR')
                ->field('jumlah_kamar')
                ->sortable()
                ->searchable()
                ->makeInputText(),
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
     * PowerGrid Kamar Action Buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */


    public function actions(): array
    {
        return [
            Button::add('edit')
                ->caption(__('Edit'))
                ->class('text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br shadow-lg shadow-blue-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center')
                ->openModal('kamar.edit-kamar', [
                    'kamarId' => 'id',
                    'tipeKamar' => 'tipe_kamar',
                    'deskripsiKamar' => 'deskripsi_kamar',
                    'fasilitasKamar' => 'fasilitas',
                    'gambar' => 'gambar',
                    'jumlahKamar' => 'jumlah_kamar',
                ]),

            Button::add('destroy')
                ->caption('Delete')
                ->class('text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br shadow-lg shadow-red-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center')
                ->openModal('kamar.delete-kamar', [
                    'kamarId' => 'id',
                    'tipeKamar' => 'tipe_kamar',
                    'fasilitasKamar' => 'fasilitas',
                    'gambar' => 'gambar',
                    'jumlahKamar' => 'jumlah_kamar',
                    'confirmationTitle'       => 'Hapus data kamar',
                    'confirmationDescription' => 'Apakah kamu yakin ingin menghapus data kamar ini?',
                ]),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Kamar Action Rules.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Rules\RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [
           
           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($kamar) => $kamar->id === 1)
                ->hide(),
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable the method below to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

    /**
     * PowerGrid Kamar Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Kamar::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
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
    */
}
