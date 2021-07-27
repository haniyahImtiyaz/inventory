<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    //message with toastr
    @if(session()->has('success'))

        toastr.success('{{ session('success') }}', 'SUCCESS!');

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'FAILED!');

    @endif
</script>
