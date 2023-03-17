<form action="{{ route('petugas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <strong>Username</strong>
            <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <strong>Password</strong>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <strong>Nik</strong>
            <input type="number" name="nik" class="form-control" placeholder="Nik">
        </div>
        <div class="form-group">
            <strong>No Telepon</strong>
            <input type="number" name="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="form-group">
            <strong>Role</strong>
            <select name="role" id="role" class="form-control" required>Role
                <option value="admin">Admin</option>
                <option value="Ppetugas">Petugas</option>
                <option value="masyarakat">Masyarakat</option>
            </select>
        </div>
        <br>
        <button class="btn btn-primary data-submit mr-1">Submit</button>
    </div>
</form>
