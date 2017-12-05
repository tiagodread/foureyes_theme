<?php

define('THEME_URL', get_bloginfo('template_url') . '/');

define ('SITE_NAME', get_bloginfo('name'));

define ('SITE_URL', get_bloginfo('url'));


add_action( 'after_setup_theme', 'custom_setup' );

function custom_setup(){
	register_nav_menu( 'menu-header', 'Cabeçalho' );

	add_theme_support( 'post-thumbnails' );

	add_filter( 'excerpt_length', 'custom_excerpt_length' );

	add_filter( 'excerpt_more', 'custom_exerpt_more' );

	add_image_size( 'cover', 353, 326, true );

	add_filter( 'post_thumbnail_html', 'custom_thumbnail_html' );

	add_action( 'init', 'custom_contact' );

}

function custom_excerpt_length(){

	return 10;
}

function custom_exerpt_more(){
	
	return '...';

}

function custom_thumbnail_html($html){
	return preg_replace(array(
		'/height="\d*"\s/',
		'/width="\d*"\s/'
	),
	'',$html);
}

function custom_contact(){
	global $erro;

	if(isset($_POST['contact'])){
		$v = array();
		$fields = array('name','email','message');

		foreach($fields as $f){
			$value = (isset($_POST[$f])) ? sanitize_text_field( $_POST[$f] ): false;
			if(!$value){
				$erro = "Preencha todos os campos!";
				break;
			}
			$v[$f] = $value;
		}

		if(!is_email( $v['email'] )){
			$erro = "E-mail invalido!";
		}elseif (!$erro){
			$to = 'tiago.goes2009@gmail.com';
			$subject = 'Site ' . SITE_NAME . ' - Formulario de contato';
			$message = sprintf(
				'Nome: %s' . PHP_EOL .
				'Email: %s' . PHP_EOL .
				'Mensagem: %s', 
				$v['name'],
				$v['email'],
				$v['message'] 
			);

			if(!wp_mail( $to, $subject, $message)){
				$erro = "Nao foi possivel enviar a mensagem.";
			}else{
				wp_die( 'Mensagem enviada com sucesso','Enviado com sucesso' );
			}
		}

	}
}

