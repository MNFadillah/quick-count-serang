<?php
/* Smarty version 3.1.30, created on 2017-11-26 19:38:27
  from "/home/bantenbersatu/public_html/serang/application/views/main_templates/home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1ab5c3730dc9_46564634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec499bdcc6ac1287c619f144739b023b5735121' => 
    array (
      0 => '/home/bantenbersatu/public_html/serang/application/views/main_templates/home.html',
      1 => 1511699897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1ab5c3730dc9_46564634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quick Count Serang</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  	<link rel="shortcut icon" type="image/png" href="<?php echo assets_url();?>
uploads/images/logo.png"/>
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo assets_url();?>
bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<style type="text/css">
	
		/*.menu{
    		box-shadow: 0 8px 6px -6px black;
		}*/
		.logo{
			max-width: 25px;
		}
		.logo-title{
			font-weight: 500;
			font-family: 'roboto';
			color:#db263a;
			margin-top: 5px;
			margin-left: 5px;
		}
		.navbar{
			background: white;
			border: none;
		}
		#navbar>ul>li>a{
			color:#db263a;
			font-weight: 500;
			font-family: 'roboto';
			/*padding: 0 8px;*/
			font-size: 16px;
		}
		.col-centered{
			float: none;
			margin: 0 auto;
		}
		.judul{
			text-align: center;
			padding: 0;
			margin-bottom: 20px;
		}
		/*#barChart{
			max-height: 100px;
			min-height: 100px;
		}*/
		.text-centered{
			text-align: center;
		}
		.chart-title{
			padding: 10px;
			margin: 0;
		}
		.foto-chart{
			max-width: 150px;
			min-width: 50px;
		}
		.chart-container {
		  position: relative;
		  margin: auto;
		  height: 50vh;
		  width: 70vw;
		}
		.title-tps{
			font-size: 20px;
			padding-bottom: 20px;
		}
		/* LOADER 4 */

		.loader span{
		  display: inline-block;
		  width: 10px;
		  height: 10px;
		  border-radius: 100%;
		  background-color: #3498db;
		  margin: 0 2px;
		  opacity: 0;
		}

		.loader span:nth-child(1){
		  animation: opacitychange 1s ease-in-out infinite;
		}

		.loader span:nth-child(2){
		  animation: opacitychange 1s ease-in-out 0.33s infinite;
		}

		.loader span:nth-child(3){
		  animation: opacitychange 1s ease-in-out 0.66s infinite;
		}

		@keyframes opacitychange{
		  0%, 100%{
		    opacity: 0;
		  }

		  60%{
		    opacity: 1;
		  }
		}
	
	</style>
</head>
<body>
	<section class="container">
		<nav class="navbar navbar-default">
		    <div class="container-fluid menu">		
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		              <span class="sr-only">Toggle navigation</span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		              <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="<?php echo base_url();?>
home">
		            	<div class="pull-right logo-title">
							Kabupaten Serang
						</div>
						<img src="<?php echo assets_url();?>
uploads/images/logo.png" alt="logo" class="logo img-responsive">
					</a> 
				</div>		
				<div id="navbar" class="navbar-collapse collapse">
		            <ul class="nav navbar-nav navbar-right">
		            	<li><a href="#">HOME</a></li>
		          	</ul>
		        </div>
		    </div>
		</nav>
		<section>
			<div class="container">
				<div class="row">
					<div class="form-group col-md-12">
						<label class="col-md-2" for="kecamatan">Pilih Kecamatan : </label>
						<div class="col-md-3 col-sm-10">
							<select class="form-control" id="kecamatan">
								<option id="" disabled="true" selected="true">- Pilih Kecamatan -</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataKecamatan']->value, 'value', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->id_kecamatan;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->nama_kecamatan;?>
</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select>
						</div>
					</div> 
					<div class="form-group col-md-12">
						<label class="col-md-2" for="desa">
							Pilih Desa : <label class="loader" id="loader-4"><span></span><span></span><span></span></label>
						</label>
						<div class="col-md-3 col-sm-10">
							<select class="form-control" id="desa">
								<option value="" disabled="true" selected="true">- Pilih Desa -</option>
							</select>
						</div>
					</div> 
					<div class="form-group col-md-12">
						<label class="col-md-2" for="desa"></label>
						<div class="col-md-3" style="text-align: right;">
						<label class="loader" id="loader-btn-cari"><span></span><span></span><span></span></label>
						<button type="button" class="btn btn-success" id="btnCari"><i class="fa fa-search"></i> Cari</button>
						</div>
					</div>
				</div>
				<div class="row" id="container-suara">
				</div>
			</div>
		</section>
	</section>

	<!-- jQuery 2.2.3 -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
	<!-- Bootstrap 3.3.6 -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- ChartJS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
	    $('.loader').hide();
        $( "#kecamatan" ).change(function() {
        	$('#loader-4').show();
            $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>
home/getDesaByIdKecamatan",
		        
		        data: {id_kecamatan:$( "#kecamatan" ).val()}, 
		        
		        success: function(data)
		        {
		        	$('#loader-4').hide();
		          	$('#desa').html(data);
		        },
		        error: function(xhr, textStatus, errorThrown){
		          	$('#loader-4').hide();
		        }
		    });
        });
        
        $( "#btnCari" ).click(function() {
        	$('#loader-btn-cari').show();
            $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>
home/getSuaraByIdDesa",
		        
		        data: {id_desa:$("#desa").val()}, 
		        
		        success: function(data)
		        {
		        	$('#loader-btn-cari').hide();
		          	$('#container-suara').html(data);
		        },
		        error: function(xhr, textStatus, errorThrown){
		          
		        }
		    });
        });
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
