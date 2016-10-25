
										

												 <select name="rumah_kelurahan" id="rumah_kelurahan" data-rule-required="true">
                                              <option value="">-Pilih Kec-</option>
                                              <?php 
											  $q3=$this->db->query("SELECT * FROM ref_kelurahan WHERE kode_kec='".$kode_kec."' ORDER BY nama ASC");
											  foreach($q3->result() as $rq3){
											  ?>
                                              <option value="<?php echo $rq3->kode; ?>"><?php echo $rq3->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
											