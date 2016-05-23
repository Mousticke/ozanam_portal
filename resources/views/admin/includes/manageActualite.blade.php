@include('admin.gestion.addActualite')
@include('admin.gestion.gestionActualite')
<script>
    var token = '{{ Session::token() }}';
    var urlEdit = '{{ route('edit.admin') }}';
</script>

