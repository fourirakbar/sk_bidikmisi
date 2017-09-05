@extends('layouts.adminlayouts')
@section('content')
<section class="content-header">
      <h1>
        Data Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/pencairan"> Data SK</a></li>
        <li class="active">Data Mahasiswa</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>

            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">NOMOR SK</th>
                  <td colspan="5">{{ $cari->nomor_sk }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">NAMA MAHASISWA</th>
                  <td colspan="5">{{ $cari->nama_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">NAMA DI REKENING</th>
                  <td colspan="5">{{ $cari->nama_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">NO REKENING</th>
                  <td colspan="5">{{ $cari->no_rek_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">BANK</th>
                  <td colspan="5">{{ $cari->bank_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">NIM</th>
                  <td colspan="5">{{ $cari->nim_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">PRODI</th>
                  <td colspan="5">{{ $cari->program_studi_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">SEMESTER</th>
                  <td colspan="5">{{ $cari->semester_mahasiswa }}</td>
                </tr>
                <tr>
                  <th style="width: 20%; text-align: left; vertical-align: middle;padding-left: 10px;">BIAYA HIDUP</th>
                  <td colspan="5">{{ $cari->biaya_hidup_mahasiswa }}</td>
                </tr>
              </thead>
            </table>


            <!-- /.box-header -->
            <div class="box-body">
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Cari NRP Mahasiswa</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                <div class="input-group col-md-6">
                    <form role="form" method="POST" action="{{ URL::to('carinrp') }}">
                        <input type="text" name="nrp" placeholder="Masukkan NRP Mahasiswa" autocomplete="off" class="  search-query form-control">
                        {{ csrf_field() }}
                        <input type="submit" value="Cari">
                    </form>
                            </div>
        

            </div>

      <!-- /.row -->
    </section>

@endsection
@section('javas')
<!-- DataTables -->
	<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	<script>
	  $(function () {
	    $('#example1').DataTable();
	  });
	</script>
@endsection
