<?php /* Smarty version Smarty-3.1.16, created on 2016-10-24 17:51:11
         compiled from "../consultas/view/proyecCobro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:968361525580e5e12eeb804-73663839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64e5a445c9bbdf4af0ecd1262e8da8b3b15c0ff' => 
    array (
      0 => '../consultas/view/proyecCobro.tpl',
      1 => 1477349108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '968361525580e5e12eeb804-73663839',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_580e5e12efa076_13601587',
  'variables' => 
  array (
    'NAV_MENU' => 0,
    'LISTA_CLIENTES' => 0,
    'LISTA_DOCS' => 0,
    'CURRENT_DATE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580e5e12efa076_13601587')) {function content_580e5e12efa076_13601587($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['NAV_MENU']->value;?>

<section id="main" >
	<div class="box-content">
	<div class="control-group">
            <h2></i>Reporte de Antigüedad Saldos</h2>
       
        	<form class="form-horizontal">

		<div class="control-group" id="boxSelCliente" >
        <label class="control-label" for="selectCliente"> Estado Cliente</label>
        <div class="controls">
          <select data-placeholder="Nombre (ID CLiente)" style="width:50%;"  id="selectCliente"    name ="selectCliente"  data-rel="chosen"  >
                      <option value="0"></option>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['name'] = 'lP';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lP']['total']);
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
|<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
" ><?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['nombre'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lP']['index']]['id'];?>
)</option>                         
                        <?php endfor; endif; ?>
                    </select>
                </div>
            </div>
            
            </form>           
            
             <form class="form-horizontal">
                  
		  <div class="control-group" id="boxSelTipoDoc" >
               <label class="control-label" for="selectTipoDoc"> Tipo Cliente</label>
               <div class="controls">
          <select data-placeholder="Documento" style="width:50%;"  id="selectTipoDoc"    name ="selectTipoDoc"  data-rel="chosen"  >
                      <option value="0"></option>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['I'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['I']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['name'] = 'I';
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LISTA_CLIENTES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['I']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['I']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['I']['total']);
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['LISTA_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['I']['index']]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['LISTA_DOCS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['I']['index']]['descripcion'];?>
</option>                          
                        <?php endfor; endif; ?>
                    </select>
                </div>
          </div>
                  </form>
                	
		
		 <form class="form-horizontal">
            <div class="control-group" id="boxdateFechaI">	
            	<label class="control-label" for="dateFechaI">Fecha Corte</label>                                           
                <div class="controls" id="input-dateFechaI">
                	<input type="text" class="datepicker" id="dateFechaI" name="dateFechaI" placeholder="Indicar Fecha Inicio" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
"> 
                </div>                       
            </div>                         
                 
			<form>
				<div class="form-actions">
					<input type="button" id="btn_buscarMovi" onclick="findMovi()" value="Generar" class="btn btn-primary">
				</div>
			</form>		
		</form>
    </div>
</section>
	
	

<script type="text/javascript">

$(document).ready(function(){
	
	$('.datepicker').datepicker({
        language: "es",
        format:"dd/mm/yyyy",
        todayHighlight: true,
        autoclose: true
      //  ,           
      //  startDate: new Date(),
       , defaultDate : new Date()
     });


});


function findMovi(){

    
	selCliente   = $("#selectCliente").val(); 
	tipodoc     = $("#selectTipoDoc").val();
	criterio    = $("#selectCriterio").val(); 
    fechaI 		= $("#dateFechaI").val();
    fechaF 		= $("#dateFechaF").val();
    
   // window.open('buscar.php?fechaI='+fechaI+"&fechaF="+fechaF,'_blank');
    
    window.open('genProyecCobro.php?selCliente='+selCliente+"&tipodoc="+tipodoc+"&criterio="+criterio+"&fechaI="+fechaI+"&fechaF="+fechaF,'_blank');
    
    
}



</script>

<?php }} ?>
