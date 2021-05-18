<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try{ace.settings.loadState('main-container')}catch(e){}
	</script>

	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try{ace.settings.loadState('sidebar')}catch(e){}
		</script>

		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<button class="btn btn-success">
					<i class="ace-icon fa fa-signal"></i>
				</button>

				<button class="btn btn-info">
					<i class="ace-icon fa fa-pencil"></i>
				</button>

				<button class="btn btn-warning">
					<i class="ace-icon fa fa-users"></i>
				</button>

				<button class="btn btn-danger">
					<i class="ace-icon fa fa-cogs"></i>
				</button>
			</div>

			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>

				<span class="btn btn-info"></span>

				<span class="btn btn-warning"></span>

				<span class="btn btn-danger"></span>
			</div>
		</div><!-- /.sidebar-shortcuts -->

		<ul class="nav nav-list">
			<li class="active">
				<a href="<?= base_url('admin')?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-building"></i>
					<span class="menu-text"> Sekolah </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="">
						<a href="<?= base_url('mVisiMisi')?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Visi dan Misi
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?= base_url('mJurusan')?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Jurusan
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?= base_url('mDetailJurusan')?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Kopetensi Jurusan
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li class="">
				<a href="<?= base_url('mBerita')?>">
					<i class="menu-icon fa fa-newspaper-o"></i>
					<span class="menu-text">
						Berita
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>

			<li class="">
				<a href="<?= base_url('mProfil')?>">
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text">
						Management Admin
					</span>
					<b class="arrow fa fa-angle-right"></b>
				</a>
			</li>

			<li class="">
				<a href="<?= base_url('mPPDB')?>"  class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text"> PPDB </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">
					<li class="">
						<a href="<?= base_url('mPPDB')?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Daftar Siswa Baru
						</a>
						<b class="arrow"></b>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> LAPORAN </span>
					<b class="arrow fa fa-angle-down"></b>
				</a>
				<b class="arrow"></b>
				<ul class="submenu">

			<li class="">
				<a href="<?php echo site_url('laporan');?>">
					<i class="menu-icon fa fa-caret-right"></i>
						Laporan
				</a>
					<b class="arrow"></b>
			</li>

          	<li class="">
            	<a href="#">
                <i class="menu-icon fa fa-caret-right"></i>
                Sub Menu 2.2
            	</a>
            	<b class="arrow"></b>
        </li>
    </ul>
</li>


		</ul><!-- /.nav-list -->
	</div>