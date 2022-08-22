<?php

function cotacao_locacao() { // Nome da função/shortcode
	ob_start();
	if( isset($_GET['tipo']) )  { // Procura pelo parâmetro ?tipo= na URL
		$tipo = $_GET['tipo'];
		if($tipo === 'locacao'){ // Mostra o Formulário de locação criado no elementor com o ID 34864.
			echo do_shortcode( '[elementor-template id="34864"]' );
		} else if($tipo === 'comprar'){ // Mostra o Formulário de compra criado no elementor com o ID 34891.
			echo do_shortcode( '[elementor-template id="34891"]' );
		} else if($tipo === 'seminovos'){ // Mostra o Formulário de seminovos criado no elementor com o ID 35166.
			echo do_shortcode( '[elementor-template id="35166"]' );
		} else if($tipo === 'servicos'){ // Mostra o Formulário de serviços criado no elementor com o ID 37051.
			echo do_shortcode( '[elementor-template id="37051"]' );
		}
	} 															
	else { // Se não encontrar o parâmetro na URL ele mostra um formulário basico.
		get_template_part('loop-form');
	} 
    
	$content = ob_get_clean(); return $content;	
}
add_shortcode("cotacao_locacao", "cotacao_locacao");