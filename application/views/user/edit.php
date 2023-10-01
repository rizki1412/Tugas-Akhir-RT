<!-- Begin Page Content --> 
<div class="container-fluid"> 
    <div class="row"> 
        <div class="col-lg-9"> 
            <?= form_open_multipart('user/edit'); ?> 
            <div class="form-group row"> 
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly> 
                </div> 
            </div> 
            <div class="form-group row"> 
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label> 
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['name']; ?>"><?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?> 
                </div> 
            </div> 
            <div class="form-group row"> 
                <div class="col-sm-2">Gambar</div> 
                <div class="col-sm-10"> 
                    <div class="row"> 
                        <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail" > 
                    </div> 
                    <div class="col-sm-9">
                         <div class="custom-file"> 
                             <label class="form-label" for="image">Pilih file</label> 
                             <input type="file" class="form-control" id="image" name="image"> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="form-group row justify-content-end"> 
                <div class="col-sm-10"> 
                    <button type="submit" class="btn btn-primary">Ubah</button> 
                    <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button> 
                </div> 
            </div> 
        </form> 
    </div>
 </div> 
</div> 
<!-- /.container-fluid --> 
</div> 
<!-- End of Main Content -->
                