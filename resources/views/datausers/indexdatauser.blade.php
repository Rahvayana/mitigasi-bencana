<x-dashboard-layout>
    <section class="content-header">
        <h1>
        Data User
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ route('menus') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Data User</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-body">
                <table class="table table-bordered">
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
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
