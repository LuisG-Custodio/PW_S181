@if(session()->has('Confirmation'))
<script>
    Swal.fire(
        'All correct!',
        'Book {{session('Confirmation')}} succesfully registered',
        'success'
    )
</script>
@endif