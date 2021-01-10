<x-dashboard-layout>
    <section class="content-header">
        <h1>
        Laporan Pengaduan
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('menus') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Laporan Pengaduan</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">No</th>
                    <th style="width: 10px">Nama</th>
                    <th>Tanggal</th>
                    <th>Judul</th>
                    <th>Pengaduan</th>
                    <th>Tempat Kejadian</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($pengaduans as $pengaduan)
                  <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pengaduan->name}}</td>
                        {{-- <td>{{$pengaduan->created_at->format('Y-m-d')}}</td> --}}
                        <td>{{date('d-m-Y', strtotime($pengaduan->created_at))}}</td>
                        <td>{{$pengaduan->judul}}</td>
                        <td>{{$pengaduan->pengaduan}}</td>
                        <td>{{$pengaduan->tempat}}</td>
                        <td><img src="{{$pengaduan->foto}}" alt="" srcset="" width="50%"></td>
                        <td><a href="/detailpengaduans/{{$pengaduan->id}}"><button class="btn btn-success">Detail</button></a></td>
                      </tr>
                    @endforeach
                </table>
              </div><!-- /.box-body -->
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
</x-dashboard-layout>
