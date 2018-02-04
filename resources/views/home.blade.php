@include('partials.head')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <br><br>
        <div class="box-header">
          <a href="{{ url('add') }}" class="btn btn-info"> Add</a>
        </div><br>
        <table class="table table-striped table-hoover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@include('partials.footer')
