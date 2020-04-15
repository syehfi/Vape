<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/admin.css">

<style>

</style>


<div class="nav-top">
    <ul class="nav-sub">
    <h3 style="color: white;">Admin Dashboard</h3>
    </ul>
</div>

<div class="nav-col">
    <br>
    <p>Selamat Datang, User</p> <br>
    <nav class="navigation d-flex w-100 justify-content-between">
        <ul class="mainmenu">
            <li><a href="#home">Dashboard</a></li>
            <li><a href="<?= base_url(); ?>tambah">Tambah Produk</a></li>
            <li><a href="">List Produk</a>
            <ul class="submenu">
                <li><a href="">Mod</a></li>
                <li><a href="">Pod</a></li>
                <li><a href="">Liquid</a></li>
            </ul>
            </li>
            <li><a href="<?= base_url(); ?>home">Logout</a>
        </ul>
    </nav>
</div>