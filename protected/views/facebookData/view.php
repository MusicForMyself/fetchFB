<?php
/* @var $this FacebookDataController */
/* @var $model FacebookData */

$this->breadcrumbs=array(
	'Facebook Datas'=>array('index'),
	$model->idfacebook_data,
);

$this->menu=array(
	array('label'=>'List FacebookData', 'url'=>array('index')),
	array('label'=>'Create FacebookData', 'url'=>array('create')),
	array('label'=>'Update FacebookData', 'url'=>array('update', 'id'=>$model->idfacebook_data)),
	array('label'=>'Delete FacebookData', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfacebook_data),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FacebookData', 'url'=>array('admin')),
);
?>

<h1>View FacebookData #<?php echo $model->idfacebook_data; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfacebook_data',
		'nombre_anuncio',
		'entrega',
		'resultados',
		'indicador_resultados',
		'alcance',
		'costo_resultados',
		'importe_gastado',
		'puntuacion_relevancia',
		'personas_acciones',
		'me_gusta_pagina',
		'id_cuenta',
		'nombre_cuenta',
		'id_anuncio',
		'finalizacion',
		'clicks_boton',
		'porcentaje_visualizacion_canvas',
		'tiempo_visualizacion_canvas',
		'id_campana',
		'nombre_campana',
		'id_conjunto_anuncios',
		'nombre_conjunto_anuncios',
		'click_todos',
		'costo_mejora_estimada',
		'costo_cualquier_accion',
		'costo_click_unico',
		'cpc_todos',
		'cpm_impresiones',
		'costo_mil_personas',
		'ctr_todos',
		'inicio_informe',
		'fin_informe',
		'mejora_estimada_recuerdo',
		'indice_mejora_estimada',
		'frecuencia',
		'impreciones',
		'comentarios_positivos',
		'comentarios_negativos',
		'proporcion_resultados',
		'clics_sociales',
		'impresiones_sociales',
		'alcance_social',
		'importe_gastado_hoy',
		'impresiones_en_bruto',
		'valor_conversion_total',
		'acciones',
		'clics_unicos_todos',
		'ctr_unicos_todos',
		'ctr_unico_porcentaje',
		'clics_socilaes_unicos_todos',
		'valor_conversiones_accion_aplicacion',
		'valor_conversion_articulos_carrito_aplicacion',
		'valor_conversion_artuculos_wishlist_aplicacion',
		'valor_conversion_visualizacion_aplicacion',
		'valor_conversion_pagos_iniciados_aplicacion',
		'valor_conversion_compras_aplicacion',
		'valor_conversion_calificaciones_unicas_aplicacion',
		'valor_conversion_gastos_creditos_aplicacion',
		'valor_conversion_gastos_creditos',
		'valor_conversion_informacion_pago_no_internet',
		'valor_conversionarticulos_wishlist_no_internet',
		'valor_conversion_registros_no_internet',
		'valor_conversion_poagos_iniciados_no_internet',
		'valor_conversion_clientes_potenciales_no_internet',
		'valor_conversion_otro_tipo_no_internet',
		'valor_conversion_compras_no_internet',
		'valor_conversion_busquedas_no_internet',
		'valor_conversion_visualizacion_contenido_no_internet',
		'valor_conversion_sitio_web',
		'valor_conversion_informacion_pago_sitio_web',
		'valor_conversion_productos_carrito_sitio_web',
		'valor_conversion_articulos_wishlist_sitio_web',
		'valor_conversion_registros_completados_sitio_web',
		'valor_conversion_pagos_iniciados_sitio_web',
		'valor_conversion_clientes_potenciales_sitio_web',
		'valor_conversion_compras_sitio_web',
		'valor_conversion_busquedas_sitio_web',
		'valor_conversion_visualizacion_contenido_sitio_web',
		'valor_comversion_finalizacion_flujo_trabajo_facebook',
		'valor_conversion_compra_facxebook',
		'acciones_aplicacion',
		'logros_desbloqueados_aplicacion',
		'sessiones_aplicaciones',
		'informacion_pago_agregada_aplicacion',
		'articulos_agregados_carrito_aplicacion',
		'articulos_agregados_wishlist_aplicacion',
		'registros_completados_aplicacion',
		'visualizacion_contenidos_aplicacion',
		'pagos_iniciados_aplicacion',
		'niveles_completados_aplicacion',
		'compras_aplicacion',
		'calificaciones_aplicacion',
		'busquedas_aplicacion',
		'gastos_creditos_aplicacion',
		'tutoriales_completados_aplicacion',
		'acciones_otro_tipo_aplicacion',
		'interaccion_aplicacion_computadora',
		'instalaciones_aplicacion_computadoras',
		'interaccion_historia_aplicacion_computadoras',
		'usos_aplicacion_computadoras',
		'visitas',
		'solicitudes_ofertas',
		'gastos_creditos',
		'partidas_juegos',
		'clientes_potenciales_formulario',
		'clics_enlace',
		'menciones_pagina',
		'instalaciones_aplicacion_celulares',
		'informacion_pago_agregada_no_internet',
		'articulos_agregados_carrito_no_internet',
		'articulos_agregados_wishlist_no_internet',
		'registros_completados_no_internet',
		'pagos_iniciados_no_internet',
		'clientes_potenciales_no_internet',
		'conversiones_otro_tipo_no_internet',
		'compras_no_internet',
		'busquedas_no_internet',
		'visualizaciones_contenido_no_internet',
		'conversiones_sitio_web',
		'informacion_pago_agregada_sitio_web',
		'articulos_agregados_carrito_sitio_web',
		'articulos_agregados_wishlist_sitio_web',
		'registros_completados_sitio_web',
		'pagos_iniciados_sitio_web',
		'clientes_potenciales_sitio_web',
		'compras_sitio_web',
		'busquedas_sitio_web',
		'visualizaciones_contenido_sitio_web',
		'conversaciones_mensajes_bloqueadas',
		'respuesta_mensajes',
		'nuevas_conversiones_mensajes',
		'finalizacion_flujo_trabajo_facebook',
		'compras_facebook',
		'participacion_pagina',
		'visualizacion_fotos',
		'veces_compartida_publicacion',
		'comentarios_publicacion',
		'interaccion_publicacion',
		'reacciones_publicacion',
		'respuestas_eventos',
		'visitas_pestanas_pagina',
		'reproduciones_video_3_segundos',
		'logros_desbloqueados_unicos_aplicacion',
		'sesiones_unicas_aplicacion',
		'informacion_pago_unica_agregada_aplicacion',
		'articulos_agregados_carrito_unicos_aplicacion',
		'articulos_agregados_wishlist_unicos_aplicacion',
		'registros_unicos_completados_aplicacion',
		'visualizaciones_contenido_unicas_aplicacion',
		'pagos_iniciados_unicos_aplicacion',
		'niveles_unicos_completados_aplicacion',
		'compras_unicas_aplicacion',
		'calificaciones_unicas_aplicacion_enviadas',
		'busquedas_unicas_aplicacion',
		'gastos_creditos_unicos_aplicacion',
		'tutoriales_unicos_completados_aplicacion',
		'clics_unicos_enlaces',
		'porcentaje_tiempocomponentes_canvas',
		'costo_accion_aplicacion_mxn',
		'costo_logro_desbloqueado_aplicacion_mxn',
		'costo_sesion_aplicacion_mxn',
		'costo_informacion_pago_agregada_aplicacion_mxn',
		'costo_articulo_agregado_carrito_aplicacion_mxn',
		'costo_articulo_agregado_wishlist_aplicacion_mxn',
		'costo_registro_completado_aplicacion_mxn',
		'costo_visualizacion_contenido_aplicacion_mxn',
		'costo_pago_iniciado_aplicacion_mxn',
		'costo_nivel_completado_aplicacion_mxn',
		'costo_compra_aplicacion_mxn',
		'costo_calificacion_aplicacion_mxn',
		'costo_busqueda_aplicacion_mxn',
		'costo_gasto_credito_aplicacion_mxn',
		'costo_tutorial_completado_aplicacion_mxn',
		'costo_accion_otro_tipo_aplicacion_mxn',
		'costo_interaccion_aplicacion_mxn',
		'costo_instalacion_aplicacion_pc_mxn',
		'costo_interaccion_historia_aplicacion_pc_mxn',
		'costo_uso_aplicacion_pc_mxn',
		'costo_visita_mxn',
		'costo_solicitud_oferta_mxn',
		'costo_accion_gasto_creditos_mxn',
		'costo_partida_juego_mxn',
		'costo_cliente_potencial_mxn',
		'costo_me_gusta_pag_mxn',
		'cpc_mxn',
		'costo_mencion_pag_mxn',
		'costo_instalacion_aplicacion_mxn',
		'costo_informacion_pago_agregada_no_internet_mxn',
		'costo_articulo_agregado_carrito_no_internet_mxn',
		'costo_articulo_agregado_wishlist_no_internet_mxn',
		'costo_registro_completado_no_internet_mxn',
		'costo_pago_iniciado_no_internet_mxn',
		'costo_cliente_potencial_no_internet',
		'costo_conversion_otro_tipo_no_internet',
		'costo_compra_no_internet_mxn',
		'costo_busqueda_no_internet_mxn',
		'costo_visualizacion_contenido_no_internet_mxn',
		'costo_conversion_sitio_web_mxn',
		'costo_informacion_pago_agregada_sitio_web_mxn',
		'costo_articulo_agregado_carrito_sitio_web_mxn',
		'costo_articulo_agregado_wishlist_sitio_web_mxn',
		'costo_registro_completado_sitio_web_mxn',
		'costo_pago_iniciado_sitio_web_mxn',
		'costo_cliente_potencial_sitio_web_mxn',
		'costo_compra_sitio_web_mxn',
		'costo_busqueda_sitio_web_mxn',
		'costo_visualizacion_contenido_sitio_web_mxn',
		'costo_finalizacion_flujo_trabajo_facebook_mxn',
		'costo_nueva_conversacion_mensajes_mxn',
		'costo_respuesta_mensajes_mxn',
		'costo_compra_facebook_mxn',
		'costo_interaccion_pagina_mxn',
		'costo_visualizacion_foto_mxn',
		'costo_veces_compartida_publicacion_mxn',
		'costo_comentario_publicacion_mxn',
		'costo_interaccion_publicacion_mxn',
		'costo_reaccion_publicacion_mxn',
		'costo_respuesta_evento_mxn',
		'costo_visita_pestana_pagina_mxn',
		'costo_reproduccion_video_3_seg_mxn',
		'costo_outbound_clic_mxn',
		'costo_logro_desbloqueado_unico_aplicacion_mxn',
		'costo_sesion_unica_aplicacion_mxn',
		'costo_informacion_pago_agregada_unica_aplicacion_mxn',
		'costo_articulo_agregado_carrito_unico_aplicacion_mxn',
		'costo_articulo_agregado_wishlist_unico_aplicacion_mxn',
		'costo_registro_unico_completado_aplicacion_mxn',
		'costo_visualizacion_contenido_unico_aplicacion_mxn',
		'costo_pago_iniciado_unico_aplicacion_mxn',
		'costo_nivel_completado_unico_aplicacion_mxn',
		'costo_compra_unica_aplicacion_mxn',
		'costo_calificacion_unica_aplicacion_mxn',
		'costo_busqueda_unica_aplicacion_mxn',
		'costo_gasto_credito_unico_aplicacion_mxn',
		'costo_tutorial_unico_completado_aplicacion_mxn',
		'costo_clic_unico_enlace_mxn',
		'costo_clic_saliente_unico_mxn',
		'costo_reproduccion_video_10_seg_mxn',
		'clics_salientes',
		'ctr_saliente',
		'clic_saliente_unico',
		'str_saliente_unico',
		'porcentaje_video_reproducido',
		'tiempo_promedio_reproduccion_video',
		'reproducciones_video_100',
		'reproducciones_video_25',
		'reproducciones_video_50',
		'reproducciones_video_75',
		'reproducciones_video_95',
		'reproducciones_video_10_seg',
		'reproducciones_video_30_seg',
		'ctr',
		'roas_compras_sitio_web',
		'roas_compras_aplicacion',
		'puja',
		'tipo_puja',
		'visualizaciones_de_fotos',
	),
)); ?>
