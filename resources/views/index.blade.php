@extends('layouts')

@section('header')
<h3 style="text-align: center;">Data Siswa</h3>
@endsection

@section('content')
<table class="table table-bordered" id="siswa">
    <thead>
        <tr class="table table-primary">
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
                    data: 'id_siswa'
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
                    data: 'no_telp'
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
                    
                },  
            ],
            select: true,
            dom: 'Bfrti',
            columnDefs: [{
                targets: -1,
                data: null,
                defaultContent: "<button class='btn btn-primary'>Klik</button>",
            }],
        });
    });
</script>
@endsection