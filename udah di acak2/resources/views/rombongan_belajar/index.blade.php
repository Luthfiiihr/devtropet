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
                        <h1>Dashboard Rombel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard Rombel</li>
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
                    <h1 class="my-4">Daftar Rombel</h1>
                    <a href="{{ route('rombongan_belajars.create') }}" class="btn btn-primary">Tambah Rombel</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Tahun Masuk</th>
                                <th>Dosen PA</th>
                                <th>Action:</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rombongan_belajar as $rombel)
                                <tr>
                                    <td>{{ $rombel->id }}</td>
                                    <td>{{ $rombel->kode }}</td>
                                    <td>{{ $rombel->thn_masuk }}</td>
                                    <td>{{ $rombel->dosen_pa }}</td>
                                    <td>
                                        <a href="{{ route('rombongan_belajars.show', $rombel->id) }}" class="btn btn-info btn-sm">Read</a>
                                        <a href="{{ route('rombongan_belajars.edit', $rombel->id) }}" class="btn btn-warning btn-sm">Update</a>
                                        <form action="{{ route('rombongan_belajars.destroy', $rombel->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this pasien?')">Delete</button>
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
