<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>Login App-MTKP</title>



	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-responsive.min.css">
	<!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/ace.min.css" /> -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/datepicker/datepicker.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/themes.css">


	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/validation/jquery.validate.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/wizard/jquery.form.wizard.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>assets/js/eakroko.min.js"></script>
	<script src="<?=base_url()?>assets/js/application.min.js"></script>
	<script src="<?=base_url()?>assets/js/demonstration.min.js"></script>
	<!-- Custom file upload -->
	<script src="<?=base_url()?>assets/js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
	<script src="<?=base_url()?>assets/js/ace-elements.min.js"></script>
	<script src="<?=base_url()?>assets/js/ace.min.js"></script>
	<script src="<?=base_url()?>assets/js/fuelux/fuelux.wizard.min.js"></script>
	<script src="<?=base_url()?>assets/js/ajaxfileupload.js"></script>
	<script src="<?=base_url()?>assets/js/func.js"></script>
	
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/logo.png" />
	<link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/img/apple-touch-icon-precomposed.png" />
	
	
	<link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/datatable/TableTools.css">
	<!-- dataTables -->
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/TableTools.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/ColReorderWithResize.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/ColVis.min.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
	<script src="<?=base_url()?>assets/js/plugins/datatable/jquery.dataTables.grouping.js"></script>
	
	
	
	<!-- colorbox -->
	<script src="<?=base_url()?>assets/js/plugins/colorbox/jquery.colorbox-min.js"></script>
	<!-- masonry -->
	<script src="<?=base_url()?>assets/js/plugins/masonry/jquery.masonry.min.js"></script>
	<!-- imagesloaded -->
	<script src="<?=base_url()?>assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
		<!-- <script src="<?=base_url()?>assets/js/plugins/chosen/chosen.jquery.min.js"></script>-->
        <script src="<?=base_url()?>assets/js/plugins/ckeditor/ckeditor.js"></script>

</head>

<body style="background-image:url(<?php echo base_url();?>assets/img/login_background.jpg); background-repeat:repeat;background-size: 100% auto;">

	
	
	
	
	 
		 

		
			<div class="container-fluid">
			
			<div class="row-fluid">
			<div class="span12">&nbsp;</div>
			</div>
			<div class="row-fluid">
			<div class="span12">&nbsp;</div>
			</div>
			<div class="row-fluid">
			<div class="span12">&nbsp;</div>
			</div>
			<div class="row-fluid">
			<div class="span12">&nbsp;</div>
			</div>
			<div class="row-fluid">
			<div class="span12">&nbsp;</div>
			</div>
				
				
				

	  
	  
      
				
				                   <div class="row-fluid">
										<div class="span3"></div>
										
                                        
                                        <div class="span6" style=" background-image:url(<?php echo base_url();?>assets/img/login.jpg); background-repeat:no-repeat;padding:10px;">
                                       
                                        
                                        
                                        			
                                        
                                        
                                       
											
								
								
								<div align="center">
								
								<form id="bb" class="form-horizontal form-validate" method="POST" action="<?php echo site_url();?>loginapp/leubeut" novalidate="novalidate">
									
									<div class="control-group">										
									&nbsp;<br><br>
									
									
									</div>
									
									
									<div class="control-group">										
									
									<input type="text" class="input-xlarge" placeholder="Masukan Username" id="nama_pengguna" name="nama_pengguna" data-rule-required="true">
									<!--<span class="glyphicon glyphicon-user form-control-feedback"></span>-->
									
									</div>
									
									<div class="control-group">
									 <input type="password" class="input-xlarge" placeholder="Masukan Password"  id="kunci_masuk" name="kunci_masuk" data-rule-required="true">
									<!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
									</div>
									
									<div class="control-group">
									<input name="secutity_code" type="text" class="input-xlarge" maxlength="4" placeholder="Masukan Kode" style="width:100px;">
		  							<a class="btn btn-success" disabled="disabled"><strong><?php echo $word;?></strong></a>
									</div>
									
									
							
									
									<div class="control-group">
										<input type="submit" value="                             Login                             " class="btn btn-success">
									</div>
									
									<?php if (isset($pesan)) { ?>
	  
                                          <div class="alert alert-danger alert-dismissable">
                                          
                                          
                                          <?php echo $pesan; ?>
                                           </div>
                                          
                                          <?php } ?>
                                          
                                          <?php echo validation_errors(); ?>
									
									
								</form>
							</div>
									
                                        
                                        
                                        </div>
										
											
										
                                        <div class="span3"></div>
									</div>
				
			
		</div>

		
</body>
</html>


