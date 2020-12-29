<x-dashboard-layout>
    <section class="content-header">
      <h1>
        SOP Bencana
        <small>Add SOP Bencana</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> SOP Bencana</a></li>
        <li class="active">Add SOP Bencana</li>
      </ol>
    </section>
    <section class="content">
     <div class="row">
      <div class="col-md-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah SOP Bencana</h3>
              </div><!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('storesop') }}" enctype="multipart/form-data">
                <div class="box-body">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama SOP Bencana</label>
                    <input name="namasopbencana" type="text" class="form-control" id="namasopbencana" placeholder="Masukkan Nama SOP Bencana">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan">
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
