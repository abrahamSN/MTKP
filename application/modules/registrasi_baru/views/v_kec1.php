
										

												 <select name="kores_kecamatan" id="kores_kecamatan" data-rule-required="true" onchange="doPilihDesa1(this.value);" >
                                              <option value="">-Pilih Kec-</option>
                                              <?php 
											  $q3=$this->db->query("SELECT * FROM ref_kecamatan WHERE   kode_kabkot='".$kode_kabkot."' ORDER BY nama ASC");
											  foreach($q3->result() as $rq3){
											  ?>
                                              <option value="<?php echo $rq3->kode; ?>"><?php echo $rq3->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
											