<!-- HEADER TITLE -->
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="fa fa-desktop"></i>
					<a href="#">Master Web</a>
				</li>
				<li class="active">Berita Sekolah</li>
			</ul><!-- /.breadcrumb -->
			<div class="nav-search" id="nav-search">
			</div><!-- /.nav-search -->
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-8">

					<div class="clearfix">
						<h4 class="pink">
							Tambah Detail Jurusan
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					
					<?php if($edit){ ?>

						<form action="<?= base_url('mDetailJurusan/edit')?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" class="form-control" value="<?= $row->id_detailJurusan?>">
							<div class="form-group">
								<input type="hidden" name="id_jurusan" class="form-control" value="<?= $row->jurusan_id?>">
								<input type="text" name="jurusan" class="form-control" value="<?= $row->nama_jurusan?>" readonly>
							</div>
							<div class="form-group">
								<label class="pink">Tentang Jurusan</label>
								<textarea id="froala-editor" name="text1" rows="10"><?= $row->deskripsi_jurusan; ?></textarea>
								<?= form_error('berita','<small class="text-danger">','</small>')?>
							</div>
							<div class="form-group">
								<label class="pink">Kompetensi</label>
								<textarea id="froala-editor" name="text2" rows="10"><?= $row->kompetensi_jurusan; ?></textarea>
								<?= form_error('berita','<small class="text-danger">','</small>')?>
							</div>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Update
							</button>
						</form>

					<?php }else{ ?>

						<form action="<?= base_url('mDetailJurusan/add')?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" class="form-control">
							<div class="form-group">
								<select name="cmbGroup" id="cmbGroup" class="form-control" required data-parsley-error-message="Field ini harus diisi">
									<option value="">Pilih Jurusan</option>
									<?php
									foreach ($jurusan as $row) { ?>
										<option value='<?= $row->id_jurusan;?>' $cek>
											<?= $row->nama_jurusan; ?>
										</option>";
									<?php }
									?>
								</select>
							</div>
							<div class="form-group">
								<label class="pink">Tentang Jurusan</label>
								<textarea id="froala-editor" name="text1" rows="10"></textarea>
								<?= form_error('berita','<small class="text-danger">','</small>')?>
							</div>
							<div class="form-group">
								<label class="pink">Kompetensi</label>
								<textarea id="froala-editor" name="text2" rows="10"></textarea>
								<?= form_error('berita','<small class="text-danger">','</small>')?>
							</div>
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-upload" aria-hidden="true"></i>
								Tambah
							</button>
						</form>

					<?php } ?>
				</div>
			</div>
		</div>
	</div> 
</div> 

