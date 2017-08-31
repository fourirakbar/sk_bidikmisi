@extends('layouts.adminlayouts')
@section('content')
<section class="content-header">
      <h1>
        Data SK
      </h1>
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data SK</li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="export/permintaan" class="btn btn-primary pull-right">Cari NRP Mahasiswa</a>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        <th style="text-align: center; vertical-align: middle; ">No</th>
                        <th style="text-align: center; vertical-align: middle; ">Tanggal Pengajuan</th>
                        <th style="text-align: center; vertical-align: middle; ">Periode / Tahun</th>
                        <th style="text-align: center; vertical-align: middle; ">Nomor SK</th>
                        <th style="text-align: center; vertical-align: middle; ">Jenis</th>
                        <th style="text-align: center; vertical-align: middle; ">MHS</th>
                        <th style="text-align: center; vertical-align: middle; ">Status Pencairan</th>
                        <th style="text-align: center; vertical-align: middle; ">Status</th>
                        <th style="text-align: center; vertical-align: middle; "></th>
                        <th style="text-align: center; vertical-align: middle; "></th>
                </tr>
                </thead>
                <tbody>
                	<?php
                		$indexNo = 1;
                	?>

                @foreach ($data as $key)
                	<tr>
                		<td style="text-align: center; vertical-align: middle; ">{{ $indexNo++ }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->tanggal_pengajuan_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->tahun_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->nomor_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->jenis_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->mahasiswa_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->status_pencairan_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">{{ $key->status_sk }}</td>
                		<td style="text-align: center; vertical-align: middle; ">
                			<input type="hidden" name="method" value="DELETE">
                        	<a class="btn btn-block btn-primary" href=""><b class="material-icons">Edit SK</b>
                		</td>
                		<td style="text-align: center; vertical-align: middle; ">
                			<input type="hidden" name="method" value="DELETE">
                        	<a class="btn btn-block btn-primary" href=""><b class="material-icons">Detail</b>
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
