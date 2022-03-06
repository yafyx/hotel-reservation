<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="flex">
        <x-jet-application-logo class="block h-12 w-auto" />
        <p class="flex items-end ml-2">
            @if (Auth::user()->role == 'isAdmin')
                Administrator
            @else
                Resepsionis
            @endif
        </p>
    </div>
    <div class="mt-6 text-2xl">
        Selamat datang {{ Auth::user()->name }}!
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    asdsa
</div>
