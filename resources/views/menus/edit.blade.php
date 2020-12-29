<x-dashboard-layout>
    <section class="content-header">
      <h1>
        Data Bencana
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Data Bencana</a></li>
        <li class="active">Edit Data Bencana</li>
      </ol>
    </section>
    <section class="content">
     <div class="row">
      <div class="col-md-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Edit Data Bencana</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('update',$databencana->id) }}">
                <div class="box-body">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bencana</label>
                    <input name="namabencana" type="text" class="form-control" id="namabencana" value="{{$databencana->namabencana}}" placeholder="Masukkan Nama Bencana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Korban Bencana</label>
                    <input name="korbanbencana" type="text" class="form-control" id="korbanbencana" value="{{$databencana->korbanbencana}}" placeholder="Masukkan Korban Bencana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kerugian Bencana</label>
                    <input name="kerugianbencana" type="text" class="form-control" id="kerugianbencana" value="{{$databencana->kerugianbencana}}" placeholder="Masukkan Kerugian Bencana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lokasi</label>
                    <input name="lokasi" type="text" class="form-control" id="lokasi" value="{{$databencana->lokasi}}" placeholder="Masukkan Lokasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control" id="tanggal" value="{{$databencana->tanggal}}"  placeholder="Masukkan Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Durasi Bencana</label>
                    <input name="durasibencana" type="text" class="form-control" id="durasibencana" value="{{$databencana->durasibencana}}" placeholder="Masukkan Durasi Bencana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan</label>
                    <input name="kecamatan" type="text" class="form-control" id="kecamatan" value="{{$databencana->kecamatan}}"  placeholder="Masukkan Kecamatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Cara Mitigasi</label>
                    <input name="caramitigasi" type="text" class="form-control" id="caramitigasi" value="{{$databencana->caramitigasi}}"  placeholder="Masukkan Cara Mitigasi">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div><!-- /.box -->
         </div>
     </div>
    </section>
  </x-dashboard-layout>
