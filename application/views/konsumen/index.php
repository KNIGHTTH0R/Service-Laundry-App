<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

			<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> <span class="glyphicon glyphicon-user"></span> Show Data Barang </h3>
					 </div>
					 <div class="panel-body">

                         <a id="tam_dat" class="btn btn-info btn-sm" href="<?=base_url();?>konsumen/tambah">
                            <span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

					 	<table border="1" class="table table-bordered">
					 		<tr>
					 			<th id="tengah">Kode Konsumen</th>
					 			<th id="tengah">Nama Konsumen</th>
					 			<th id="tengah">Alamat Konsumen</th>
					 			<th id="tengah">Telp Konsumen</th>
					 			<th id="tengah">Actions</th>
					 		</tr>

					 		<?php
					 		    foreach($s_konsumen as $konsumen):
					 		?>

					 		<tr>
					 			<td id="tengah"><?= $konsumen->kodekonsumen; ?></td>
					 			<td id="tengah"><?= $konsumen->nmkonsumen; ?></td>
					 			<td id="tengah"><?= $konsumen->almtkonsumen; ?></td>
					 			<td id="tengah"><?= $konsumen->telpkonsumen; ?></td>
					 			<td id="tengah">

<a href="<?=base_url();?>konsumen/edit_konsumen/<?=$konsumen->kodekonsumen;?>"><span class="glyphicon glyphicon-edit"></a>
<a onclick="return confirm('Are You Sure?')" href="<?=base_url();?>konsumen/hapus_konsumen/<?=$konsumen->kodekonsumen;?>">
<span class="glyphicon glyphicon-trash"></a>
					 			</td>
					 		</tr>

					 		<?php endforeach;?>

					 	</table>
					 	
					 </div>
				</div>

			</div> <!-- end content -->
                
<?php $this->load->view('template/footer'); ?>