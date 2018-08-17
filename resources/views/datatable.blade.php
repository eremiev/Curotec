@extends('layouts.app')

@section('content')
    <h2>Laravel - Curotec</h2>
<table class="table table-bordered" id="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
</table>
</div>
<script type="text/javascript">
    $(function() {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('api/display_data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' }
            ]
        });
    });
</script>
@endsection
