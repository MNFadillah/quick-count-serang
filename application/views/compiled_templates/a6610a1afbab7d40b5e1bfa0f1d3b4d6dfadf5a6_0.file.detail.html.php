<?php
/* Smarty version 3.1.30, created on 2017-11-27 15:14:17
  from "/home/bantenbersatu/public_html/serang/application/views/main_templates/pages/detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1bc959e08090_57989190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6610a1afbab7d40b5e1bfa0f1d3b4d6dfadf5a6' => 
    array (
      0 => '/home/bantenbersatu/public_html/serang/application/views/main_templates/pages/detail.html',
      1 => 1511770393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1bc959e08090_57989190 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h2 class="judul">Perolehan Suara Sementara Desa <?php echo $_smarty_tpl->tpl_vars['dataDesa']->value->nama_desa;?>
</h2>
				<div class="col-centered" style="text-align: center">
				<label>Penduduk Laki-Laki : <b style="color: green;"><?php echo $_smarty_tpl->tpl_vars['dataDesa']->value->penduduk_l;?>
</b> </label>
				<label>Penduduk Perempuan : <b style="color: green;"><?php echo $_smarty_tpl->tpl_vars['dataDesa']->value->penduduk_p;?>
</b> </label>
				<label>Daftar Pemilih Tetap Laki-Laki : <b style="color: green;"><?php echo $_smarty_tpl->tpl_vars['dataDesa']->value->dpt_l;?>
</b> </label>
				<label>Daftar Pemilih Tetap Perempuan : <b style="color: green;"><?php echo $_smarty_tpl->tpl_vars['dataDesa']->value->dpt_p;?>
</b> </label>
				</div>
				<div class="panel panel-default col-md-10 col-centered col-sm-12">
					<div class="panel-body">
						<div class="chart-container" style="">
							<canvas id="barChart"></canvas>
						</div>
					</div>
					<div class="row">
					    <div class="col-md-12">
						<?php $_smarty_tpl->_assignInScope('class', '');
?>
						<?php $_smarty_tpl->_assignInScope('row', 0);
?>
						<?php if ($_smarty_tpl->tpl_vars['jumlahCades']->value == 2) {?>
							<?php $_smarty_tpl->_assignInScope('class', "col-md-6");
?>
						<?php } elseif ($_smarty_tpl->tpl_vars['jumlahCades']->value == 3) {?>
							<?php $_smarty_tpl->_assignInScope('class', "col-md-4");
?>
						<?php } elseif ($_smarty_tpl->tpl_vars['jumlahCades']->value > 3) {?>
							<?php $_smarty_tpl->_assignInScope('row', 4);
?>
							<?php $_smarty_tpl->_assignInScope('class', "col-md-3");
?>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('i', 1);
?>
						<div class="row">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataAll']->value, 'value', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
							<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 text-centered">
								<div class="panel panel-default">
									<h4 class="chart-title"><?php echo $_smarty_tpl->tpl_vars['value']->value->no_urut;?>
. <?php echo $_smarty_tpl->tpl_vars['value']->value->nama_cades;?>
</h4>
									<img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['value']->value->foto_cades;?>
" class="foto-chart"><br>
									<h4>Total Suara : <label style="color:#2A7FFF;"><?php echo $_smarty_tpl->tpl_vars['value']->value->jumlah_suara;?>
</label></h4>
									<h4>Presentase : <label style="color:#FF552A;"><?php echo round($_smarty_tpl->tpl_vars['value']->value->presentase,2);?>
%</label></h4>
								</div>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['row']->value == 4 && $_smarty_tpl->tpl_vars['i']->value == 4) {?>
								</div><div class="row">
							<?php }?>
							<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel-group" id="accordion">
								<?php $_smarty_tpl->_assignInScope('i', 0);
?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataTps']->value, 'value', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
								<div class="panel panel-default">
									<div class="panel-heading title-tps">
										<button data-toggle="collapse" href="#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-parent="#accordion" class="btn btn-sm btn-default pull-right" type="button"><i class="fa fa-minus"></i></button>
										<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['value']->value->nama_tps;?>
</h3>
									</div>
									<div id="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="panel-collapse collapse">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value->dataCades, 'value2', false, 'field2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field2']->value => $_smarty_tpl->tpl_vars['value2']->value) {
?>
										<div class="panel-body">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-3 text-centered">
														<img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['value2']->value->foto_cades;?>
" style="max-height: 60px;"><br>
													</div>
													<div class="col-md-9">
														<p><?php echo $_smarty_tpl->tpl_vars['value2']->value->no_urut;?>
. <?php echo $_smarty_tpl->tpl_vars['value2']->value->nama_cades;?>
</p>
														<div class="progress">
														  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $_smarty_tpl->tpl_vars['value2']->value->presentase;?>
%">
																<?php echo round($_smarty_tpl->tpl_vars['value2']->value->presentase,2);?>
%<!--<span class="sr-only"> </span> -->
														  </div>
														</div>
													</div>
												</div>
												<div class="row">
												</div>
										  	</div>
										</div>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										<div class="panel-footer">
											<h4>Suara Tidak Sah : <?php echo $_smarty_tpl->tpl_vars['value']->value->jumlahSuaraTidakSah;?>
</h4>
										</div>
									</div>
								</div>
								<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</div>
						</div>
					</div>
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
		var ctx = document.getElementById('barChart').getContext('2d');
		// console.log('<?php echo $_smarty_tpl->tpl_vars['dataAllEncoded']->value;?>
');
	  	let dataChartEncoded = '<?php echo $_smarty_tpl->tpl_vars['dataAllEncoded']->value;?>
';
		let dataChart = JSON.parse(dataChartEncoded);
		let label = [];
		let dataset = [];
		let i = 0
	  	for (let key in dataChart) {
	  		label[i] = dataChart[key].no_urut + ". " + dataChart[key].nama_cades;
	  		dataset[i] = dataChart[key].jumlah_suara;
	  		i++;
	  	}

		var opt = {
			  maintainAspectRatio: false,
		  title: {
		    display: true,
		    text: 'Perolehan Suara',
		    position: 'top',
		    fontSize:16,
		  },
		  hover: {
		      animationDuration: 0
		  }, 
		  scales: {
		    xAxes:[{
		    	ticks: {
		            stepSize: 1,
		            min: 0,
		            autoSkip: false
		          },
		        gridLines: {
		          display:false
		        }
		    }],
		    yAxes:[{
		      ticks: {
		          suggestedMin: 0
		      },
		      stacked:true
		    }]
		  }
		};
		var dataOption = {
		    type: 'bar',
		    data: {
		         labels: label,
		          datasets: [
		            {
		              label: "Jumlah Suara",
		              backgroundColor: "rgba(255,99,132,1)",
		              borderColor: "rgba(255,99,132,1)",
		              borderWidth: 2,
		              hoverBackgroundColor: "rgba(200,99,132,1)",
		              hoverBorderColor: "rgba(255,99,132,1)",
		              data: dataset
		            }
		          ]
		    },
		    options: opt
		};
		var chart = new Chart(ctx, dataOption);
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
