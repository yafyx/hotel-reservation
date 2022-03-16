<script>
    @foreach (session('toasts', collect())->toArray() as $toast)
        var options = {
        title: '{{ $toast['title'] }}',
        message: '{{ $toast['message'] }}',
        messageColor: '{{ $toast['messageColor'] }}',
        messageSize: '{{ $toast['messageSize'] }}',
        titleLineHeight: '{{ $toast['titleLineHeight'] }}',
        messageLineHeight: '{{ $toast['messageLineHeight'] }}',
        position: '{{ $toast['position'] }}',
        titleSize: '{{ $toast['titleSize'] }}',
        titleColor: '{{ $toast['titleColor'] }}',
        closeOnClick: '{{ $toast['closeOnClick'] }}',
    
        };
    
        var type = '{{ $toast['type'] }}';
    
        show(type, options);
    @endforeach

    window.addEventListener('successDelete', event => {
        iziToast.success({
            title: 'Berhasil',
            message: 'Berhasil menghapus data',
            position: 'topRight',
        });
    });
    window.addEventListener('successEdit', event => {
        iziToast.success({
            title: 'Berhasil',
            message: 'Berhasil mengubah data',
            position: 'topRight',
        });
    });
    window.addEventListener('successAdd', event => {
        iziToast.success({
            title: 'Berhasil',
            message: 'Berhasil menambah data',
            position: 'topRight',
        });
    });
</script>

{{ session()->forget('toasts') }}
