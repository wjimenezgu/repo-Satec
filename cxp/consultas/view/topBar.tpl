	<!-- topbar starts -->
		<div class="navbar">

			<div class="container-fluid">

<div class="span10">			
				<a class=" pull-left"href="http://{$CRM_SERVER}/{#system_name#}/home/"> <img alt="Charisma Logo" src="http://{$CRM_SERVER}/{#system_name#}/resources/img/logoPage.jpg" /> <span>| Si No está en Satec No Existe</span></a>							
					<div class="btn-group pull-left" >
					<a class="btn btn-large  dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Reportes CxC</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_4_option_1"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/estadoCuenta.php"><span class="hidden-tablet"> {#module_4_option_1#}</span></a></li>						
                    	<li id="module_4_option_2"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/factuTramitar.php"><span class="hidden-tablet"> {#module_4_option_2#}</span></a></li>
                    	<li id="module_4_option_3"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/FacturacionCxC.php"><span class="hidden-tablet"> {#module_4_option_3#}</span></a></li>
                    	<li id="module_4_option_4"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_4#}</span></a></li>
                    	<li id="module_4_option_5"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_5#}</span></a></li>                    	                    	                    	
					</ul>
				</div>
				<div class="btn-group pull-left" >
					<a class="btn btn-large dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Inventario</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_4_option_1"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/estadoCuenta.php"><span class="hidden-tablet"> {#module_4_option_1#}</span></a></li>						
                    	<li id="module_4_option_2"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_2#}</span></a></li>
                    	<li id="module_4_option_3"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_3#}</span></a></li>
                    	<li id="module_4_option_4"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_4#}</span></a></li>
                    	<li id="module_4_option_5"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_5#}</span></a></li>                    	                    	                    	
					</ul>
				</div>
				<div class="btn-group pull-left" >
					<a class="btn btn-large dropdown-toggle" style="margin-left:10px;margin-top:5px;"  data-toggle="dropdown" href="#">
						<i class="icon-print"></i><span class="hidden-phone"> Facturaci&oacute;n</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
                    	<li id="module_4_option_1"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_1#}</span></a></li>						
                    	<li id="module_4_option_2"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_2#}</span></a></li>
                    	<li id="module_4_option_3"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_3#}</span></a></li>
                    	<li id="module_4_option_4"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_4#}</span></a></li>
                    	<li id="module_4_option_5"><a class="ajax-link" href="http://{$CRM_SERVER}/{#system_name#}/cxc/consultas/moviPlantronics.php"><span class="hidden-tablet"> {#module_4_option_5#}</span></a></li>                    	                    	                    	
					</ul>
				</div>
		</div>
				
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> {$USER_SESSION}</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="http://{$CRM_SERVER}/{#system_name#}/security/closeSession.php">{#text_logOut#}</a></li>
						<li class="divider"></li>
						<li><a href="http://{$CRM_SERVER}/{#system_name#}/login/cambioclave/frmChangePwd.php">{#text_changepwd#}</a></li>
					</ul>
				</div>
		
				<!-- user dropdown ends -->

		
		</div>
	
	<!-- topbar ends -->
	