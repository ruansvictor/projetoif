<div class="col-lg-10 center">
	<div class="well bs-component">
<?php 
	$atriForm = array('class' => 'form',);
	echo form_open('insumos/newInsumos', $atriForm);
	$attr_label = array(
    	'class' => 'col-lg-2 control-label',
	);
	echo "<fieldset>
	<div class=\"form-group\">";
		echo validation_errors('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">x</button>','</div>');
		if ($this->session->flashdata('cadastrook')) {
			echo '<p>'. $this->session->flashdata('cadastrook').'</p>';	
		}
		echo form_label('Nome do Insumo:','nome_insumo',$attr_label);
		echo "<div class=\"col-lg-4\">";
			echo form_input(array('name' => 'nome_insumo', 'id'=>'nome_insumo', 'class' => 'form-control'),set_value('nome_insumo'));
		echo "</div>";
		echo form_label('Unidade de Medida:','id_unidade_de_medida_unidade_de_medida',$attr_label);
		echo "<div class=\"col-lg-4\">";
			echo '
					<select class="input-large form-control" name="id_unidade_de_medida_unidade_de_medida" id="id_unidade_de_medida_unidade_de_medida">
					'.$options_udm.'
					</select>
			';
		echo "</div>";
			echo form_label('Quantidade:','quantidade',$attr_label);
		echo "<div class=\"col-lg-4\">";
			echo form_input(array('name' => 'quantidade', 'id' => 'quantidade','class' => 'form-control'),set_value('nome_paciente'));
		echo "</div>";
			echo form_label('Periodo da cota:','periodo_dias',$attr_label);
		echo "<div class=\"col-lg-4\">";
			echo form_input(array('name' => 'periodo_dias', 'id' => 'periodo_dias','class' => 'form-control'),set_value('periodo_dias'));
		echo "</div>";
		echo "<div class=\"col-lg-5\">";
		echo "</div>";
		echo "<div class=\"col-lg-2\"><br />";
			echo form_submit(array('name' => 'cadastrar','id' => 'cadastrar', 'class' => 'btn btn-primary form-control'),'Cadastrar');
		echo "</div>";
	echo "</div>";
	echo "<fieldset>";
	form_close('insumos/newInsumos');
	?>
	<br>
	</div>
	</div>