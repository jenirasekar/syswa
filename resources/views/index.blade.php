@extends('layouts')

@section('header')
<h3>Data Siswa</h3>
@endsection

@section('content')
<table class="table table-bordered table-striped table-primary" id="siswa">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Berat badan</th>
            <th>Tinggi badan</th>
            <th>Aksi</th>
        </tr>
    </thead>
</table>

<script>
    $(function() {
        $('#siswa').DataTable({
            processing: true,
            serverSide: true,
            info: false,
            ajax: {
                url: "{{ route('siswa.dt') }}",
                dataSrc: ''
            },
            columns: [{
                    // data: 'id_siswa'
                },
                {
                    data: 'nis'
                },
                {
                    data: 'nama'
                },
                {
                    data: 'jenis_kelamin'
                },
                {
                    data: 'alamat'
                },
                {
                    data: 'berat_badan'
                },
                {
                    data: 'tinggi_badan'
                },
                {
                    
                }
            ],
            select: true,
            pagingType: 'full_numbers',
            dom: 'Bfrtip',
            columnDefs: [{
                targets: -1,
                data: null,
                // defaultContent: "<button class='btn btn-primary'>Click!</button>",
            }],
        });
    });
</script>
@endsection