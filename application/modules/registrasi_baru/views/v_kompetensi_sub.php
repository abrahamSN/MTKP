
										

												 <select name="sub_kompetensi"  data-rule-required="true" id="sub_kompetensi">
                                              <option value="">-Pilih-</option>
                                              <?php 
											  $q3=$this->db->query("SELECT * FROM ref_sub_kompetensi WHERE kompetensi='".$kode_profesi."' ORDER BY nama ASC");
											  foreach($q3->result() as $rq3){
											  ?>
                                              <option value="<?php echo $rq3->kode_sub; ?>"><?php echo $rq3->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
											