<x-dashboard-layout>
    <section class="content-header">
        <h1>
        Detail Pengaduan
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('menus') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Detail Pengaduan</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-body">
                <table class="table table-bordered">
                 <tr>
                     <td>Nama:</td>
                     <td>{{$pengaduan->name}}</td>
                 </tr>
                 <tr>
                     <td>Tanggal:</td>
                     <td>{{date('d-m-Y', strtotime($pengaduan->created_at))}}</td>
                 </tr>
                 <tr>
                     <td>Judul:</td>
                     <td>{{$pengaduan->judul}}</td>
                 </tr>
                 <tr>
                     <td>Tempat:</td>
                     <td>{{$pengaduan->tempat}}</td>
                 </tr>
                 <tr>
                     <td>Foto:</td>
                     <td><img src="{{$pengaduan->foto}}" alt="" srcset="" width="30%"></td>
                 </tr>
                </table>
              </div><!-- /.box-body -->
              </div>
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
</x-dashboard-layout>
