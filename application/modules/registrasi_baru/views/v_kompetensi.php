
										

												 <select name="kompetensi"  data-rule-required="true" id="kompetensi" onchange="doKompetensiSub(this.value);" >
                                              <option value="">-Pilih-</option>
                                              <?php 
											  $q3=$this->db->query("SELECT * FROM ref_kompetensi WHERE profesi='".$kode_profesi."' ORDER BY nama ASC");
											  foreach($q3->result() as $rq3){
											  ?>
                                              <option value="<?php echo $rq3->kode; ?>"><?php echo $rq3->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
											