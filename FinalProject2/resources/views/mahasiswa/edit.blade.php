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
                        <h1>Edit Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Mahasiswa</li>
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
                    <h3 class="card-title">Edit Mahasiswa</h3>

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
                    <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nim">nim:</label>
                            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="text" name="email" value="{{ $mahasiswa->email }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir:</label>
                            <input type="text" name="tmp_lahir" value="{{ $mahasiswa->tmp_lahir }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir:</label>
                            <input type="date" name="tgl_lahir" value="{{ $mahasiswa->tgl_lahir }}"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ipk">IPK:</label>
                            <input type="double" name="ipk" value="{{ $mahasiswa->ipk }}"class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="prodi_id">ID Prodi:</label>
                            <input type="prodi_id" name="prodi_id" value="{{ $mahasiswa->prodi_id }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="rombel_id">ID Rombel:</label>
                            <textarea name="rombel_id" class="form-control">{{ $mahasiswa->rombel_id }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

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