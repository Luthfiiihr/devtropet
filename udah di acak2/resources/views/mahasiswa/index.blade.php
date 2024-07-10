@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Mahasiswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Daftar Mahasiswa</h1>
                    <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>IPK</th>
                                <th>ID Prodi</th>
                                <th>ID Rombel</th>
                                <th>Action:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td>{{ $mhs->id }}</td>
                                    <td>{{ $mhs->nim }}</td>
                                    <td>{{ $mhs->nama }}</td>
                                    <td>{{ $mhs->email }}</td>
                                    <td>{{ $mhs->tmp_lahir }}</td>
                                    <td>{{ $mhs->tgl_lahir }}</td>
                                    <td>{{ $mhs->ipk }}</td>
                                    <td>{{ $mhs->prodi_id }}</td>
                                    <td>{{ $mhs->rombel_id }}</td>
                                    <td>
                                        <a href="{{ route('mahasiswas.show', $mhs->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('mahasiswas.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('mahasiswas.destroy', $mhs->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this mhs?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
