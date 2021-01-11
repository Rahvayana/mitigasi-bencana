<x-dashboard-layout>
    <section class="content-header">
      <h1>
        Galeri
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Galeri</a></li>
        <li class="active">Add Galeri</li>
      </ol>
    </section>
    <section class="content">
     <div class="row">
      <div class="col-md-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Data</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('storegaleri') }}" enctype="multipart/form-data">
                <div class="box-body">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Galeri</label>
                    <input name="namagaleri" type="text" class="form-control" id="namagaleri" placeholder="Masukkan Nama Galeri">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipe</label>
                    <select name="type" id="type" class="form-control" required>
                      <option value="">Pilih Tipe</option>
                      <option value="1">Gambar</option>
                      <option value="2">Video</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Bencana</label>
                    <select name="bencana" id="bencana" class="form-control" required>
                      <option value="">Pilih Tipe</option>
                      <option value="1">Banjir</option>
                      <option value="2">Kekeringan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gambar</label>
                    <input name="gambar" type="file" class="form-control" id="gambar" placeholder="Masukkan Gambar">
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
