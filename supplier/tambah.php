<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Daftar Supplier</h1>
    </div>
    <div class="col-4">
        <a href="?m=supplier&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
</div>
<div class="col">
<form action="?m=supplier&s=simpan" method="post">
    <div class="mb-2">
        <label for="">Nama Supplier</label>
        <input type="text" name="nama" class="form-control" autofocus>
    </div>
    <div class="mb-2">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Kontak</label>
        <input type="number" name="kontak" class="form-control">
    </div>
    <div class="mb-2">
        <input type="reset" class="btn btn-warning">
        <input type="submit" name="simpan" class="btn btn-primary">
        </div>
         </form>
      </div>
    </div>
</section>