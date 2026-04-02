<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/outra_tela', 'Home::funcao_para_apresentar_tela_sec');
$routes->get('/formulario', 'Home::funcao_para_apresentar_formulario');
$routes->post('/enviar_formulario', 'Home::funcao_para_processar_formulario');
$routes->post('/remover', 'Home::removerPessoa');
