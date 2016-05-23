@include('admin.gestion.addMenu')
@include('admin.gestion.gestionMenu')
<script>
    var token = '{{ Session::token() }}';
    var urlMenu = '{{ route('edit.menu') }}';
</script>