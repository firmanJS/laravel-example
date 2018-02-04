@include('partials.head')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <br><br>
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="box-footer">
          <button type="submit" class="btn btn-success"> Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('partials.footer')
