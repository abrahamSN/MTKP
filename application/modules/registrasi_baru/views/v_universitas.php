
										

												 <select name="universitas"  data-rule-required="true" id="universitas">
                                              <option value="">-Pilih-</option>
                                              <?php 
											  $q3=$this->db->query("SELECT * FROM ref_universitas WHERE negara='".$kode_negara."' ORDER BY nama ASC");
											  foreach($q3->result() as $rq3){
											  ?>
                                              <option value="<?php echo $rq3->kode; ?>"><?php echo $rq3->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
											