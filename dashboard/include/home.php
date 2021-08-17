<h2>Selamat Datang, <?php $role == "Admin" ?  print($nama_admin) : print($nama); ?></h2>
<div class="panel-body">
    <center><img src="assets/img/user/<?php echo $hasil['gambar']; ?>" alt="#" style="width:200px;border:4px solid #ddd;" /></center>
</div>
<div class="panel-footer">
    <form method="POST" action="fungsi/edit/edit.php?gambar=user" enctype="multipart/form-data">
        <input type="file" accept="image/*" name="foto">
        <input type="hidden" value="<?php echo $hasil['gambar']; ?>" name="foto2">
        <input type="hidden" name="id" value="<?php echo $hasil['id_member']; ?>">
        <span class="pull-right">
            <button type="submit" class="btn btn-primary btn-sm" value="Tambah"><i class="fa fa-pencil"> Ganti Foto</i></button>
        </span>
    </form>
    <br />
    <br />
</div>