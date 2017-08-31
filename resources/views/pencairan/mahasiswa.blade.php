@extends('layouts.adminlayouts')
@section('content')
<section class="content-header">
      <h1>
        Data Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          @if ($message = Session::get('success')) 
              <div class="alert alert-success">
                <p>{{ $message }}</p>
              </div>
          @elseif ($message = Session::get('gagal'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
              </div>
            @endif
          <div class="box">
            <div class="box-header">
              
            </div>


            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th style="text-align: center; vertical-align: middle; ">No</th>
                        <th style="text-align: center; vertical-align: middle; ">NIM</th>
                        <th style="text-align: center; vertical-align: middle; ">Nama Mahasiswa</th>
                        <th style="text-align: center; vertical-align: middle; ">Program Studi</th>
                        <th style="text-align: center; vertical-align: middle; ">SMT</th>
                        <th style="text-align: center; vertical-align: middle; ">No Rekening</th>
                        <th style="text-align: center; vertical-align: middle; ">Bank</th>
                        <th style="text-align: center; vertical-align: middle; ">Status MHS</th>
                        <th style="text-align: center; vertical-align: middle; ">Biaya Hidup</th>
                        <th style="text-align: center; vertical-align: middle; ">Nomor SK</th>
                </tr>
                </thead>
                <tbody>
                	<?php
                		$indexNo = 1;
                	?>

                @foreach ($data as $key)
                	<tr>
                		<td style="text-align: center; vertical-align: middle; ">{{ $indexNo++ }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->nim_mahasiswa }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->nama_mahasiswa }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->program_studi_mahasiswa }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->semester_mahasiswa }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->no_rek_mahasiswa }}</td>
                    <td style="text-align: center; vertical-align: middle; ">{{ $key->bank_mahasiswa }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->status_mahasiswa }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->biaya_hidup_mahasiswa }}</td>
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
