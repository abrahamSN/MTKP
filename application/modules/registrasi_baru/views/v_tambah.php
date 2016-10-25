<div class="row-fluid">
				<div class="span12">&nbsp;</div>
</div>


<div class="row-fluid">
<form id="bb" class="form-horizontal form-validate" method="POST" action="#" novalidate="novalidate">


				<div class="span12">
					<div class="box box-color box-bordered">
						<div class="box-title">
							<h3>
								<i class="icon-user"></i>
								Registrasi Baru
							</h3>
						</div>
						<div class="box-content nopadding">
							<ul class="tabs tabs-inline tabs-top">
								<li class="active">
									<a data-toggle="tab" href="#profile"><i class="icon-user"></i> Data Pribadi</a>
								</li>
								<li class="">
									<a data-toggle="tab" href="#notifications"><i class="icon-file"></i> Data Administrasi</a>
								</li>
								<li class="">
									<a data-toggle="tab" href="#security"><i class="icon-briefcase"></i> Persyaratan</a>
								</li>
							</ul>
							<div class="tab-content padding tab-content-inline tab-content-bottom">
								
								
								<div id="profile" class="tab-pane active">
									
								<div class="row-fluid">
										<div class="span12" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">BIODATA</div>
								</div>
								
								<div class="row-fluid">
										<div class="span6">
										
										
										
									<div class="control-group">
										<label class="control-label" for="textfield">Tanggal Terima Berkas</label>
										<div class="controls">
											<input type="text" name="tanggal_str" id="tanggal_str" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true">
											<small>yyyy-mm-dd</small>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">NIK</label>
										<div class="controls">
											<input type="text" data-rule-required="true"  data-rule-number="true"  class="input-xlarge" id="ktp" name="ktp">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">Nama Sesuai Ijasah</label>
										<div class="controls">
											<input type="text" data-rule-required="true"  class="input-xlarge" id="nama" name="nama">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="textfield">Tempat Lahir</label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="lahir_tempat" name="lahir_tempat">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">Tanggal Lahir</label>
										<div class="controls">
											<input type="text" name="lahir_tanggal" id="lahir_tanggal" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true">
											<small>yyyy-mm-dd</small>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="confirmfield">Jenis Kelamin</label>
										<div class="controls">
											<input type="radio" value="L" name="kelamin"> Laki-laki
											<input type="radio"  value="P" name="kelamin"> Perempuan
										</div>
									</div>
									
										</div>
										
										
										<div class="span6">
										
										<div class="control-group">
										<label class="control-label" for="confirmfield">File Photo</label>
										<div class="controls">
											-
										</div>
									</div>
									
										</div>
								</div>
								
								
								<div class="row-fluid">
										<div class="span6" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">ALAMAT RUMAH</div>
										<div class="span6" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">ALAMAT KORESPONDENSI</div>
								</div>
								
								<div class="row-fluid">
										<div class="span6">
										
										<div class="control-group">
										<label class="control-label" for="textfield">Alamat Rumah</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-xlarge" id="rumah_jalan" name="rumah_jalan">
										</div>
										</div>
										
										
										<div class="control-group">
											<label for="textfield" class="control-label">Provinsi</label>
											<div class="controls">
												
												<select name="rumah_prov" id="rumah_prov" data-rule-required="true" onchange="doPilihKabKot(this.value);">
                                              <option value="">-Pilih Provinsi-</option>
                                              <?php 
											  $q2=$this->db->query("select * from ref_provinsi order by nama asc");
											  foreach($q2->result() as $rq2){
											  ?>
                                              <option value="<?php echo $rq2->kode; ?>" <?php if ($rq2->kode==$this->input->post('kode')) { echo "selected";} ?>><?php echo $rq2->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
												
												
											</div>
									</div>
									
							<div class="control-group">
											<label for="textfield" class="control-label">Kab/Kota</label>
											<div class="controls">
												
												 <div id="txtHintKabKot">
												 <select name="rumah_kabkot" id="rumah_kabkot" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												 </div>
												
											</div>
									</div>
									
								<div class="control-group">
											<label for="textfield" class="control-label">Kecamatan</label>
											<div class="controls">
												<div id="txtHintKec">
												 <select name="rumah_kecamatan" id="rumah_kecamatan" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												</div>
											</div>
									</div>
                                    
							<div class="control-group">
											<label for="textfield" class="control-label">Kelurahan/Desa</label>
											<div class="controls">
												<div id="txtHintDesa">
												 <select name="rumah_kelurahan" id="rumah_kelurahan" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												</div>
											</div>
									</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">RT.</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-small" id="rumah_rt" name="rumah_rt">
											RW.
											<input type="text"  data-rule-required="true" class="input-small" id="rumah_rw" name="rumah_rw">
											Kode Pos.
											<input type="text"  data-rule-required="true" class="input-small" id="rumah_pos" name="rumah_pos">
										</div>
										</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">Telp.Rumah</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-xlarge" id="rumah_telp" name="rumah_telp">
										</div>
										</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">No.HP</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" data-rule-number="true" class="input-xlarge" id="no_hp" name="no_hp">
										</div>
										</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">Email</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-xlarge" id="email" name="email">
										</div>
										</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">Catatan</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-xlarge" id="catatan" name="catatan">
										</div>
										</div>
										
										</div>
								<div class="span6">
								<div class="control-group">
										<label class="control-label" for="textfield">Alamat Korespondensi</label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="kores_jalan" name="kores_jalan">
										</div>
									</div>
									
									
									
									<div class="control-group">
											<label for="textfield" class="control-label">Provinsi</label>
											<div class="controls">
												
												<select name="kores_prov" id="kores_prov" data-rule-required="true" onchange="doPilihKabKot1(this.value);">
                                              <option value="">-Pilih Provinsi-</option>
                                              <?php 
											  $q2=$this->db->query("select * from ref_provinsi order by nama asc");
											  foreach($q2->result() as $rq2){
											  ?>
                                              <option value="<?php echo $rq2->kode; ?>" <?php if ($rq2->kode==$this->input->post('kode')) { echo "selected";} ?>><?php echo $rq2->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
												
												
											</div>
									</div>
									
							<div class="control-group">
											<label for="textfield" class="control-label">Kab/Kota</label>
											<div class="controls">
												
												 <div id="txtHintKabKot1">
												 <select name="kores_kabkot" id="kores_kabkot" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												 </div>
												
											</div>
									</div>
									
								<div class="control-group">
											<label for="textfield" class="control-label">Kecamatan</label>
											<div class="controls">
												<div id="txtHintKec1">
												 <select name="kores_kecamatan" id="kores_kecamatan" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												</div>
											</div>
									</div>
                                    
							<div class="control-group">
											<label for="textfield" class="control-label">Kelurahan/Desa</label>
											<div class="controls">
												<div id="txtHintDesa1">
												 <select name="kores_kelurahan" id="kores_kelurahan" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												</div>
											</div>
									</div>
									
									
									
									
									
									
								</div>
								</div>
								
								
								
									
								</div>
								
								
								
								<div id="notifications" class="tab-pane">
									
									
								<div class="row-fluid">
										<div class="span6" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">PROFESI</div>
										<div class="span6" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">TEMPAT KERJA</div>
								</div>
									
								


								<div class="row-fluid">
										<div class="span6">
										
										
										<div class="control-group">
											<label for="textfield" class="control-label">Profesi</label>
											<div class="controls">
												
												<select name="profesi" id="profesi" data-rule-required="true" onchange="doKompetensi(this.value);">
                                              <option value="">-Pilih-</option>
                                              <?php 
											  $q2=$this->db->query("select * from ref_profesi order by nama asc");
											  foreach($q2->result() as $rq2){
											  ?>
                                              <option value="<?php echo $rq2->kode; ?>" <?php if ($rq2->kode==$this->input->post('kode')) { echo "selected";} ?>><?php echo $rq2->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
												
												
											</div>
									</div>
									
							<div class="control-group">
											<label for="textfield" class="control-label">Kompetensi</label>
											<div class="controls">
												
												 <div id="txtHintKompetensi">
												 <select name="kompetensi" id="kompetensi" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												 </div>
												
											</div>
									</div>
									
								<div class="control-group">
											<label for="textfield" class="control-label">Sub Kompetensi</label>
											<div class="controls">
												<div id="txtHintKompetensiSub">
												 <select name="sub_kompetensi" id="sub_kompetensi" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												</div>
											</div>
									</div>
                                    
							
										
										<div class="control-group">
										<label class="control-label" for="textfield">No.Serkom</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-xlarge" id="no_serkom" name="no_serkom">
										</div>
										</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">Tanggal Serkom</label>
										<div class="controls">
									<input type="text" name="tanggal_serkom" id="tanggal_serkom" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true">
											<small>yyyy-mm-dd</small>
										</div>
										</div>
										
										
										
										</div>
								<div class="span6">
								<div class="control-group">
										<label class="control-label" for="textfield">Nama Tempat Kerja</label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="kerja_nama" name="kerja_nama">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">Alamat </label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="kerja_jalan" name="kerja_jalan">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">Telp.Tempat Kerja</label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="kerja_telp" name="kerja_telp">
										</div>
									</div>
									
									
									
									
									
									
									
									
								</div>
								</div>


								
								
								<div class="row-fluid">
										<div class="span6" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">UNIVERSITAS</div>
										<div class="span6" style="background-color:#F3F3F3; color:#336600; text-align:center; font-weight:bold; padding:2px;">BUKTI BAYAR</div>
								</div>
									
								


								<div class="row-fluid">
										<div class="span6">
										
										
										<div class="control-group">
											<label for="textfield" class="control-label">Negara</label>
											<div class="controls">
												
												<select name="negara" id="negara" data-rule-required="true" onchange="doUniversitas(this.value);">
                                              <option value="">-Pilih-</option>
                                              <?php 
											  $q2=$this->db->query("select * from ref_negara order by nama asc");
											  foreach($q2->result() as $rq2){
											  ?>
                                              <option value="<?php echo $rq2->id; ?>" <?php if ($rq2->id==$this->input->post('id')) { echo "selected";} ?>><?php echo $rq2->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
												
												
											</div>
									</div>
									
							<div class="control-group">
											<label for="textfield" class="control-label">Universitas</label>
											<div class="controls">
												
												 <div id="txtHintUniversitas">
												 <select name="universitas" id="universitas" data-rule-required="true">
                                                 <option value="">-Pilih-</option>
												 </select>
												 </div>
												
											</div>
									</div>
									
								
							
										
										<div class="control-group">
										<label class="control-label" for="textfield">No.Ijasah</label>
										<div class="controls">
											<input type="text"  data-rule-required="true" class="input-xlarge" id="no_ijazah" name="no_ijazah">
										</div>
										</div>
										
										<div class="control-group">
										<label class="control-label" for="textfield">Tanggal Ijasah</label>
										<div class="controls">
									<input type="text" name="tanggal_lulus" id="tanggal_lulus" class="input-medium datepick" data-date-format="yyyy-mm-dd" data-rule-required="true">
											<small>yyyy-mm-dd</small>
										</div>
										</div>
										
										
										
										</div>
								<div class="span6">
								<div class="control-group">
										<label class="control-label" for="textfield">Nama Pengirim</label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="kirim_nama" name="kirim_nama">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">Tgl.Bayar </label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="tgl_bayar" name="tgl_bayar">
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label" for="textfield">No.Bukti Bayar</label>
										<div class="controls">
											<input type="text" data-rule-required="true" class="input-xlarge" id="bukti_bayar" name="bukti_bayar">
										</div>
									</div>
									
									
									
									
									
									
									
									
								</div>
								</div>
								
								


								
									
								</div>
								
								
								
								
								<div id="security" class="tab-pane">
									form3
									
									<hr>
				
										<input type="submit" value="SIMPAN DATA" class="btn btn-primary">
										
									
								</div>
							
							
							
							
							</div>
						</div>
					</div>
				</div>
				
				
									
				
			</form>
			</div>

			
			
<script>

function doPilihKabKot(kode_prov) {
$("#txtHintKabKot").load("<?php echo site_url(); ?>registrasi_baru/view_kabkot/"+kode_prov);
}

function doPilihKec(kode_kabkot) {
$("#txtHintKec").load("<?php echo site_url(); ?>registrasi_baru/view_kec/"+kode_kabkot);
}

function doPilihDesa(kode_kec) {
$("#txtHintDesa").load("<?php echo site_url(); ?>registrasi_baru/view_desa/"+kode_kec);
}

function doPilihKabKot1(kode_prov) {
$("#txtHintKabKot1").load("<?php echo site_url(); ?>registrasi_baru/view_kabkot1/"+kode_prov);
}

function doPilihKec1(kode_kabkot) {
$("#txtHintKec1").load("<?php echo site_url(); ?>registrasi_baru/view_kec1/"+kode_kabkot);
}

function doPilihDesa1(kode_kec) {
$("#txtHintDesa1").load("<?php echo site_url(); ?>registrasi_baru/view_desa1/"+kode_kec);
}

function doKompetensi(kode_profesi) {
$("#txtHintKompetensi").load("<?php echo site_url(); ?>registrasi_baru/view_kompetensi/"+kode_profesi);
}

function doKompetensiSub(kode_kompetensi) {
$("#txtHintKompetensiSub").load("<?php echo site_url(); ?>registrasi_baru/view_kompetensi_sub/"+kode_kompetensi);
}

function doUniversitas(kode_negara) {
$("#txtHintUniversitas").load("<?php echo site_url(); ?>registrasi_baru/view_universitas/"+kode_negara);
}
</script>
		