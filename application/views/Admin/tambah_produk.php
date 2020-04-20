<title>Tambah Produk</title>
<h1 style="margin-top: 25px; margin-left: 350px;"> Form Tambah Produk</h1>
<div class="content">
    <form>
        <div class="form-group">
            <label for="nama_prd">Nama Produk</label>
            <input type="email" class="form-control" id="nama_prd" aria-describedby="emailHelp" placeholder="Nama Produk">
        </div>
        <div class="form-group">
            <label for="jml_produk">Jumlah Produk</label>
            <input type="text" class="form-control" id="jml_prouk" placeholder="Jumlah Produk">
        </div>
        <div class="form-group">
        <label for="jml_produk">Jenis Produk</label>
            <select class="form-control">
                <option selected>Jenis Produk</option>
                <option>Mod</option>
                <option>Pod</option>
                <option>Liquid</option>
            </select>
        </div>
        <div class="form-group">
        <label for="jml_produk">Gambar Produk</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
