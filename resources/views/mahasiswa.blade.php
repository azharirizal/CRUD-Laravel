@extends('ui')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA MAHASISWA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="{{ url("tambahmahasiswa") }}" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>NAMA</th>
                  <th>KELAS</th>
                  <th>JURUSAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

              @php $no = 1; @endphp
              @foreach($mahasiswa as $m)

                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $m->nim }}</td>
                  <td>{{ $m->nama }}</td>
                  <td>{{ $m->kelas }}</td>
                  <td>{{ $m->jurusan }}</td>
                  <td>
                    <a href="{{ url("ubahmahasiswa/".$m->id) }}" class="btn btn-success" role="button" title="Ubah Data"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="{{ url("hapusmahasiswa/".$m->id) }}" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>

              @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#mahasiswa').DataTable();
  });
</script>
@endsection