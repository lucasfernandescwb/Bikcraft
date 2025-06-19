<?php

// Função para registrar os Scripts e o CSS
function origamid_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', array(), "1.11.2", true );

	// Registrar Plugins
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), false, true );

	// Registrar Main
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'plugins-script' ), false, true );

	// Registrar Modernizr
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), "45655", false );

	// Carrega o Script
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'main-script' );	
}
add_action( 'wp_enqueue_scripts', 'origamid_scripts' );

function origamid_css() {
	wp_register_style( 'origamid-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'origamid-style' );
}
add_action( 'wp_enqueue_scripts', 'origamid_css' );

add_action('init', function () {
    $page = get_page_by_title('sobre');
    $portfolio_page = get_page_by_title('Portfólio');

    if ($page) {
        $post_id = $page->ID;

        $qualidades = [
            [
                'quality_item_title' => 'DURABILIDADE',
                'quality_item_description' => 'Sólida como pedra, leve como o vento e resistente como o diamente, são nossos diferenciais.'
            ],
            [
                'quality_item_title' => 'DESIGN',
                'quality_item_description' => 'Feitas sob medida. Adaptamos a sua Bikcraft para o seu corpo. '
            ],
			[
                'quality_item_title' => 'SUSTENTABILIDADE',
                'quality_item_description' => 'Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.'
            ],
        ];

        update_post_meta($post_id, 'quality_item', $qualidades);
    }

    if ($portfolio_page) {
        $page_id = $portfolio_page->ID;

        $items = [
            [
                'img' => 'retro.jpg',
                'alt' => 'Bicicleta Retrô'
            ],
            [
                'img' => 'passeio.jpg',
                'alt' => 'Bicicleta Passeio'
            ],
            [
                'img' => 'esporte.jpg',
                'alt' => 'Bicicleta Esporte'
            ]
        ];

        $quotes = [
            [
                'quote' => '“Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo.”',
                'author' => 'Barbara Moss'
            ],
            [
                'quote' => '“Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição.”',
                'author' => 'Jhony Rato'
            ],
            [
                'quote' => '“Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcendental. Nunca vida nada igual.”',
                'author' => 'Bernardo'
            ]
        ];

        update_post_meta($page_id, 'portfolio_item', $items);
        update_post_meta($page_id, 'quotes', $quotes);
    }
});
