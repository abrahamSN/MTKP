
										

												 <select name="rumah_kabkot"  data-rule-required="true" id="rumah_kabkot" onchange="doPilihKec(this.value,<?php echo $id;?>);" >
                                              <option value="">-Pilih KabKot-</option>
                                              <?php 
											  $q3=$this->db->query("SELECT * FROM ref_kabkot WHERE kode_prov='".$id."' ORDER BY nama ASC");
											  foreach($q3->result() as $rq3){
											  ?>
                                              <option value="<?php echo $rq3->kode; ?>"><?php echo $rq3->nama; ?></option>
                                              <?php } ?>
                                              
                                            </select>
											