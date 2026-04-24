<?php
/*
 * Template Name: Desafio ContentOS
 * Template Post Type: page
 *
 * Como usar:
 *   1. Copie este arquivo para: wp-content/themes/SEU-TEMA/page-desafio.php
 *   2. Suba a pasta dist/ (gerada pelo npm run build) para:
 *      wp-content/themes/SEU-TEMA/desafio/
 *   3. No painel WP: Páginas > Nova Página > Template: "Desafio ContentOS"
 */

$html_file = get_stylesheet_directory() . '/desafio/index.html';

if ( ! file_exists( $html_file ) ) {
    wp_die(
        '<p>Arquivo não encontrado: <code>' . esc_html( $html_file ) . '</code></p>' .
        '<p>Suba o conteúdo da pasta <code>dist/</code> para <code>wp-content/themes/SEU-TEMA/desafio/</code></p>'
    );
}

$assets_url = get_stylesheet_directory_uri() . '/desafio/assets/';
$html       = file_get_contents( $html_file );

// Corrige os caminhos relativos dos assets gerados pelo Vite
$html = str_replace( 'src="./assets/',  'src="'  . $assets_url, $html );
$html = str_replace( 'href="./assets/', 'href="' . $assets_url, $html );

echo $html;
exit;
