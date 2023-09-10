<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syswa</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- Bootstrap untuk DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js">

    <style>
        .dataTables_filter {
            margin-bottom: 30px;
            margin-top: 20px;
            justify-content: center;
        }

        h3 {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content-wrapper">
            <h3 style="text-align: center;">Data Siswa</h3>
            <section class="content">
                <div class="container-fluid">
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
                </div>
            </section>
        </div>
        <footer class="main-footer">

        </footer>
    </div>
</body>

</html>