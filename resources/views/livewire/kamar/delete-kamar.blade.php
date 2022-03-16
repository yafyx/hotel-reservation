<div class="p-6">
    <div class="font-gray-700 text-md mb-4 text-red-600">{{ $confirmationTitle }}
        <br>
        <span class="text-xl font-semibold">
            {{ $tipeKamar }}?
        </span>
    </div>
    <div class="py-2">
        <div class="font-bold">{{ $confirmationDescription }}</div>
        <div class="space-x-2 flex justify-end mt-4">
            <button
                class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800"
                wire:click.self="cancel">
                Cancel
            </button>
            <button
                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                wire:click="confirm">
                Confirm
            </button>
        </div>

    </div>
</div>
