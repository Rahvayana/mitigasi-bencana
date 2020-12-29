<x-dashboard-layout>
    <section class="content-header">
      <h1>
        Kuis
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Kuis</a></li>
        <li class="active">Add Kuis</li>
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
              <form role="form" method="POST" action="{{ route('storekuis') }}" enctype="multipart/form-data">
                <div class="box-body">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Soal</label>
                    <input name="soal" type="text" class="form-control" id="soal" placeholder="Masukkan Soal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pilihan A</label>
                    <input name="pila" type="text" class="form-control" id="pila" placeholder="Masukkan Pilihan A">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pilihan B</label>
                    <input name="pilb" type="text" class="form-control" id="pilb" placeholder="Masukkan Pilihan B">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pilihan C</label>
                    <input name="pilc" type="text" class="form-control" id="pilc" placeholder="Masukkan Pilihan C">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pilihan D</label>
                    <input name="pild" type="text" class="form-control" id="pild" placeholder="Masukkan Pilihan D">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban</label>
                    <input name="jawaban" type="text" class="form-control" id="jawaban" placeholder="Masukkan Jawaban">
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
