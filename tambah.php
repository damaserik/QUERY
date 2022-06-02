<!-- Main content --> 
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-outline card-dark">
					<div class="card-header">
						<h3 class="card-title">Form Tambah Penerimaan</h3>
					</div>
					<div class="card-body">
						<?php echo validation_errors();?>
						<?php echo form_open('gudang/penerimaan_t');?>
						<table width="100%">
							<tr>
								<td width="11%" valign="top"><label style="font-size: 11pt;">No Penerimaan</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">			
											<input class=" form-control form-control-sm" type='text' name='nota_terima' id="no_terima">
										</div>
									</div>
								</td>
								<td width="11%" valign="top"><label style="font-size: 11pt;">Tanggal Terima</label></td>
								<td colspan="3">
									<div class="col-md-3">
										<div class="form-group">
											<input class="form-control form-control-sm" type="date" name="tgl_terima"required="" value="<?php echo date('Y-m-d');?>">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">Leveransir</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<div class="input-group-prepend">								
											<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-crsup">Cari</button>
											<input class=" form-control form-control-sm" type='text' name='nota_terima' id="id_sup" readonly="">
											</div>
										</div>
									</div>
								</td>
								<td colspan="4">
									<div class="col-md-12">
										<div class="form-group">			
											<input list='supplier'class=" form-control form-control-sm" type='text' class='form-control form-control-sm' name='supp' id="nm_sup" readonly="">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">No Pembelian</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<div class="input-group-prepend">								
											<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-crnota">Cari</button>
											<input class=" form-control form-control-sm" type='text' class='form-control form-control-sm' name='nota_beli' id="no_beli" readonly="">
											<input type="text" name="id_pembelian" id="id_pembelian" hidden="">
											</div>
										</div>
									</div>	
								</td>
								<td valign="top"><label style="font-size: 11pt;">No Cek</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group" >
											<input class="form-control form-control-sm" type="text" name="no_cek" required="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Tanggal Cek</label></td>
								<td>
									<div class="col-md-8">
										<div class="form-group" >
											<input class="form-control form-control-sm" type="date" name="tgl_cek" required="" value="<?php echo date('Y-m-d');?>">
										</div>
									</div>	
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">Unit</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="unit" id="nm_unt" required="" readonly="">
										</div>
									</div>	
								</td>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Surat jalan</label></td>
								<td>							
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="suratjln_terima" required="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Tanggal Jalan</label></td>
								<td>
									<div class="col-md-8">
										<div class="form-group">
											<input class="form-control form-control-sm" type="date" name="tgljln_terima" required="" value="<?php echo date('Y-m-d');?>">
										</div>
									</div>	
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">Bagian</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="bagian" id="nm_bag" required="" readonly="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Jenis Barang</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group" >
											<input class="form-control form-control-sm" type="text" name="jns_brng" required="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Tanggal JT</label></td>
								<td>
									<div class="col-md-8">
										<div class="form-group" >
											<input class="form-control form-control-sm" type="date" name="tgljt_terima" required="" value="<?php echo date('Y-m-d');?>">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">Keterangan</label></td>
								<td colspan="5">
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="ket_terima" required="">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">PPN Terima</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="ppn_terima" required="">
										</div>
									</div>
								<td valign="top"><label style="font-size: 11pt;">Subtotal Trm</label></td>
								<td>							
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="subtotal_trm" required="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Total Hrg Trm</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="totalhrg_trm" required="">
										</div>
									</div>
								</td>
							</tr>
							<tr hidden="">
								<td valign="top"><label style="font-size: 11pt;">ID Unit</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="unit" id="id_unt" required="" readonly="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">ID Bagian</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="bagian" id="id_bag" required="" readonly="">
										</div>
									</div>
								</td>
							</tr>
						</table>
<!-- 						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">No Penerimaan</label>			
									<input class=" form-control form-control-sm" type='text' name='nota_terima' id="no_terima">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Tanggal Terima</label>
									<input class="form-control form-control-sm" type="date" name="tgl_terima"required="" value="<?php echo date('Y-m-d');?>">
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Leveransir</label>
									<div class="input-group-prepend">								
									<input list='supplier'class=" form-control form-control-sm" type='text' class='form-control form-control-sm' name='supp' id="nm_sup">
									<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-crsup">Cari</button>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">No Pembelian</label>
									<div class="input-group-prepend">								
									<input list='supplier'class=" form-control form-control-sm" type='text' class='form-control form-control-sm' name='nota_beli' id="no_beli">
									<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-crnota">Cari</button>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Unit</label>
									<input class="form-control form-control-sm" type="text" name="unit" id="nm_unt"required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Bagian</label>
									<input class="form-control form-control-sm" type="text" name="bagian" id="nm_bag" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">Jenis Brg</label>
									<input class="form-control form-control-sm" type="text" name="jns_brng" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">Tgl JT</label>
									<input class="form-control form-control-sm" type="date" name="tgljt_terima" required="" value="<?php echo date('Y-m-d');?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">ID Cek</label>
									<input class="form-control form-control-sm" type="text" name="id_cek" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">No Cek</label>
									<input class="form-control form-control-sm" type="text" name="no_cek" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">Tgl Cek</label>
									<input class="form-control form-control-sm" type="date" name="tgl_cek" required="" value="<?php echo date('Y-m-d');?>">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Surat Jalan</label>
									<input class="form-control form-control-sm" type="text" name="suratjln_terima" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Tgl Jalan</label>
									<input class="form-control form-control-sm" type="date" name="tgljln_terima" required="" value="<?php echo date('Y-m-d');?>">
								</div>
							</div>	
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Keterangan</label>
									<input class="form-control form-control-sm" type="text" name="ket_terima" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">ID Leveransir</label>			
									<input class=" form-control form-control-sm" type='text' name='nota_terima' id="id_sup" readonly="">
								</div>
							</div> 
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">ID Unit</label>
									<input class="form-control form-control-sm" type="text" name="unit" id="id_unt" required="" readonly="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">ID Bagian</label>
									<input class="form-control form-control-sm" type="text" name="bagian" id="id_bag" required="" readonly="">
								</div>
							</div>
						</div> -->
						<br>
						<div id="insert-pesbaru"></div>
						<div class="row">
							<div class="col-md-11">
								<div class="form-group">
									<input type="button" class="btn btn-success btn-sm" value="Tambah Form" id="tambah-terimabaru">
									<input type="button" class="btn btn-warning btn-sm" value="Reset Form" id="reset-terimabaru">
								</div>
							</div>
						</div> 
						<hr> 
						<table width="100%">
							<tr>
								<td width="11%" valign="top"><label style="font-size: 11pt;">ID dtl Beli</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<div class="input-group-prepend">								
												<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-crdetail">Cari</button>
												<input class="form-control form-control-sm" type="text" name="id_dtl_pembelian" id="id_dtl_beli" required="">
											</div>
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Tgl dtl Trm</label></td>			
								<td colspan="3">
									<div class="col-md-3">
										<div class="form-group" >
											<input class="form-control form-control-sm" type="date" name="tgl_dttrm" required="" value="<?php echo date('Y-m-d');?>">
										</div>
									</div>		
								</td>
							</tr>
							<tr>
								<td valign="top"><label style="font-size: 11pt;">ID barang</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="id_barang" id="id_brng" required="">
										</div>
									</div>	
								</td>
								<td valign="top"><label style="font-size: 11pt;">Nama barang</label></td>
								<td>							
									<div class="col-md-12">
										<div class="form-group">
											<input class="form-control form-control-sm" type="text" name="id_barang" id="nm_brng" required="">
										</div>
									</div>
								</td>
								<td valign="top"><label style="font-size: 11pt;">Group</label></td>
								<td>
									<div class="col-md-12">
										<div class="form-group" >
											<input class="form-control form-control-sm" type="text" name="id_group" id="nm_grup" required="">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>3</td>
								<td>3</td>
								<td>3</td>
								<td>3</td>
								<td>3</td>
							</tr>
							<tr>
								<td>4</td>
								<td>4</td>
								<td>4</td>
								<td>4</td>
								<td>4</td>
								<td>4</td>
							</tr>
							<tr>
								<td>5</td>
								<td>5</td>
								<td>5</td>
								<td>5</td>
								<td>5</td>
								<td>5</td>
							</tr>
						</table>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">ID dtl Beli</label>
									<div class="input-group-prepend">								
									<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-crdetail">Cari</button>
									<input class="form-control form-control-sm" type="text" name="id_dtl_pembelian" id="id_dtl_beli" required="">
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">PPN Terima</label>
									<input class="form-control form-control-sm" type="text" name="ppn_terima" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Subtotal Trm</label>
									<input class="form-control form-control-sm" type="text" name="subtotal_trm" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Total Hrg Trm</label>
									<input class="form-control form-control-sm" type="text" name="totalhrg_trm" required="">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">ID Group</label>
									<input class="form-control form-control-sm" type="text" name="id_group" id="id_grup" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">Nama Group</label>
									<input class="form-control form-control-sm" type="text" name="id_group" id="nm_grup" required="">
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">ID barang</label>
									<input class="form-control form-control-sm" type="text" name="id_barang" id="id_brng" required="">
								</div>
							</div>	
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Nama barang</label>
									<input class="form-control form-control-sm" type="text" name="id_barang" id="nm_brng" required="">
								</div>
							</div>							
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">Tgl dtl Trm</label>
									<input class="form-control form-control-sm" type="date" name="tgl_dttrm" required="" value="<?php echo date('Y-m-d');?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Jml 1 Trm</label>
									<input class="form-control form-control-sm" type="text" name="jml1" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Jml 2 Trm</label>
									<input class="form-control form-control-sm" type="text" name="jml2" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Sat 1 Trm</label>
									<input class="form-control form-control-sm" type="text" name="sat1" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">Sat 2 Trm</label>
									<input class="form-control form-control-sm" type="text" name="sat2" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">PPN dtl Trm</label>
									<input class="form-control form-control-sm" type="text" name="ppn_trm" id="ppn_dtl" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Subtotal dtl Trm</label>
									<input class="form-control form-control-sm" type="text" name="sub_trm" id="subttl_dtl" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Tot Hrg Trm</label>
									<input class="form-control form-control-sm" type="text" name="tot_hrg_trm" id="tothrg_dtl" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group" >
									<label style="font-size: 11pt;">ID Jns Brng Akt</label>
									<input class="form-control form-control-sm" type="text" name="id_jbrngakt" id="id_jbakt" required="">
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label style="font-size: 11pt;">Input dtl Trm</label>
									<input class="form-control form-control-sm" type="text" name="input_dtl_trm" required="">
								</div>
							</div>
						</div> 
						<br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group float-right"> 
									<input type="submit" class="btn btn-primary btn-sm toaster" value="Simpan">
								</div>
							</div>
						</div>
						<?php echo form_close() ?> 
						<input type="hidden" id="jmlpesbaru" value="1"> 
					</div><?php echo $this->uri->segment(3);?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- modal  -->

<!-- ========================================= MODAL CARI LEVERANSIR =====================================================  -->
	<div class="modal fade" id="modal-crsup">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title">Cari Supplier</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	        <div class="modal-body">
	        	<table id="carisup" class="table table-sm table-bordered table-hover dataTable" role="grid">
	        		<thead>
	        			<tr>
		        			<th>ID Supplier</th>
		        			<th>Nama Supplier</th>
	        			</tr>
	        		</thead>	 
	        		<tbody>
	        		<?php foreach ($get_sup as $a) { ?>
	        			<tr id="pilih_sup"
							id_csup ="<?php echo $a->id_supplier?>"
							nm_csup ="<?php echo $a->nm_supplier?>"
	        			>
	        				<td><?php echo $a->id_supplier?></td>
	        				<td><?php echo $a->nm_supplier?></td>
	        			</tr>
		        	<?php } ?>
	        		</tbody>
	        	</table>
	        </div>
	        <div class="modal-footer justify-content-between" style="font-size: 11pt;">
	          <b><i>* Pilih supplier dengan cara klik pada kolom data</i></b>
	        </div>
	      </div>
	    </div>
	 </div>
 <!-- ==================================================================================================================== -->
 <!-- ============================================== MODAL CARI DATA PEMBELIAN =========================================== -->
<div class="modal fade" id="modal-crnota">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cari Data Pembelian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<table id="carinota" class="table table-sm table-bordered table-hover dataTable" role="grid">
        		<thead>
        			<tr>
	        			<th>Nota Pembelian</th>
	        			<th>Nama Unit</th>
	        			<th>ID Bagian</th>
	        			<th>Nama Bagian</th>
        			</tr>
        		</thead>	 
        		<tbody>
        		<?php foreach ($get_notabeli as $a) { ?>
        			<tr id="pilih_nota"
						nota_cbeli ="<?php echo $a->nota_beli?>"
						id_cpembelian ="<?php echo $a->id_pembelian?>"
						id_cunit ="<?php echo $a->id_unit?>"
						nm_cunit ="<?php echo $a->nm_unit?>"
						id_cbagian ="<?php echo $a->id_bagian?>"
						nm_cbagian ="<?php echo $a->nm_bagian?>"
        			>
        				<td><?php echo $a->nota_beli?></td>
        				<td><b>[<?php echo $a->id_unit?>]</b> <?php echo $a->nm_unit?></td>
        				<td><?php echo $a->id_bagian?></td>
        				<td><?php echo $a->nm_bagian?></td>
        			</tr>
	        	<?php } ?>
        		</tbody>
        	</table>
        </div>
        <div class="modal-footer justify-content-between" style="font-size: 11pt;">
          <b><i>* Pilih nota pembelian dengan cara klik pada kolom data</i></b>
        </div>
      </div>
    </div>
 </div>
 <!-- ==================================================================================================================== -->

 <!-- ============================================== MODAL CARI DETAIL PEMBELIAN =========================================== -->
<div class="modal fade" id="modal-crdetail">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cari Detail Pembelian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<table id="caridetail" class="table table-sm table-bordered table-hover dataTable" role="grid">
        		<thead>
        			<tr>
	        			<th>Nota Dtl Beli</th>
	        			<th>Nama Barang</th>
	        			<th>Nama Group</th>
	        			<th>Barang Akt</th>
	        			<th>PPN</th>
	        			<th>Sub Total</th>
	        			<th>Total Hrg</th>
        			</tr>
        		</thead>	 
        		<tbody>
        		<?php foreach ($get_dtlbeli as $a) { ?>
        			<tr id="pilih_detail"
						cid_dtl_pembelian ="<?php echo $a->id_dtl_pembelian?>"
						cid_barang ="<?php echo $a->id_barang?>"
						cnm_barang ="<?php echo $a->nm_barang?>"
						cid_group ="<?php echo $a->id_group?>"
						cnm_group ="<?php echo $a->nm_group?>"
						cid_jnsbrngakt ="<?php echo $a->id_jnsbrngakt?>"
						cppn_dtl_beli ="<?php echo $a->ppn_dtl_beli?>"
						ctotal_dtl_beli ="<?php echo $a->total_dtl_beli?>"
						ctotalhrg_dtl_beli ="<?php echo $a->totalhrg_dtl_beli?>"
        			>
        				<td><?php echo $a->nota_dtl_beli?></td>
        				<td><b>[<?php echo $a->id_barang?>]</b> <?php echo $a->nm_barang?></td>
        				<td><?php echo $a->nm_group?></td>
        				<td><b>[<?php echo $a->id_jnsbrngakt?>]</b> <?php echo $a->nm_jnsbrngakt?> </td>
        				<td><?php echo $a->ppn_dtl_beli?></td>
        				<td><?php echo $a->total_dtl_beli?></td>
        				<td><?php echo $a->totalhrg_dtl_beli?></td>
        			</tr>
	        	<?php } ?>
        		</tbody>
        	</table>
        </div>
        <div class="modal-footer justify-content-between" style="font-size: 11pt;">
          <b><i>* Pilih detail pembelian dengan cara klik pada kolom data</i></b>
        </div>
      </div>
    </div>
 </div>
 <!-- ==================================================================================================================== -->
<!--  /.modal  -->

<script type="text/javascript">
	/*          =============================== MODAL CARI LEVERANSIR =====================================*/
		$(document).ready(function(){
			// tabel no permintaan
			$(function () {
				$("#carisup").DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});
			// get datatabel no permintaan 
			$(document).on('click', '#pilih_sup', function (e) {
				document.getElementById("id_sup").value 	= $(this).attr('id_csup');
				document.getElementById("nm_sup").value 	= $(this).attr('nm_csup');
				$('#modal-crsup').modal('hide');
			});
		});
	/*          =============================== END =====================================*/
	
	/*          ================================= MODAL CARI NOTA ========================================*/
		$(document).ready(function(){
			// tabel no permintaan
			$(function () {
				$("#carinota").DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});
			// get datatabel no permintaan 
			$(document).on('click', '#pilih_nota', function (e) {
				document.getElementById("no_beli").value 		= $(this).attr('nota_cbeli');
				document.getElementById("id_pembelian").value 	= $(this).attr('id_cpembelian');
				document.getElementById("id_unt").value 		= $(this).attr('id_cunit');
				document.getElementById("nm_unt").value 		= $(this).attr('nm_cunit');
				document.getElementById("id_bag").value 		= $(this).attr('id_cbagian');
				document.getElementById("nm_bag").value 		= $(this).attr('nm_cbagian');
				$('#modal-crnota').modal('hide');
			});
		});


	/*          =============================== END =====================================*/

		/*          ================================= MODAL CARI DETAIL ========================================*/
		$(document).ready(function(){
			// tabel no permintaan
			$(function () {
				$("#caridetail").DataTable({
				  "deferRender" : true,
				  "processing"  : true,
				  "order"       : [],
				});
			});
			// get datatabel no permintaan 
			$(document).on('click', '#pilih_detail', function (e) {
				document.getElementById("id_dtl_beli").value 	= $(this).attr('cid_dtl_pembelian');
				document.getElementById("id_brng").value 		= $(this).attr('cid_barang');
				document.getElementById("nm_brng").value 		= $(this).attr('cnm_barang');
				document.getElementById("id_grup").value 		= $(this).attr('cid_group');
				document.getElementById("nm_grup").value 		= $(this).attr('cnm_group');
				document.getElementById("id_jbakt").value 		= $(this).attr('cid_jnsbrngakt');
				document.getElementById("ppn_dtl").value 		= $(this).attr('cppn_dtl_beli');
				document.getElementById("subttl_dtl").value 	= $(this).attr('ctotal_dtl_beli');
				document.getElementById("tothrg_dtl").value 	= $(this).attr('ctotalhrg_dtl_beli');
				$('#modal-crdetail').modal('hide');
			});
		});


	/*          =============================== END =====================================*/
</script>
<!--  <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
       $('#unitit').change(function(){
           var id = $(this).val();
           $.ajax({
               url : "<?php echo base_url();?>index.php/gudang/get_bagian",
               method : "POST",
               data : {unit: id},
               async : true,
               dataType : 'json',
               success: function(data){
                   var html = '';
                   var i;
                   for(i=0; i<data.length; i++){
                       html += '<option value="'+data[i].id_bagian+'">'+data[i].nm_bagian+'</option>';
                   }
                   $('.bag').html(html);                     
               }
           });
       });
   });