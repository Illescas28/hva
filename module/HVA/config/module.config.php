<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'HVA\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'index' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/index',
                    'defaults' => array(
                        '__NAMESPACE__' => 'HVA\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            // Módulo Pacientes
            'pacientes' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/pacientes[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|asignar|editar|eliminar|actuales|detalles',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Paciente\Controller\Paciente',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'consultorio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/consultorio[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Consultorio\Controller\Consultorio',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'servicio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/servicios[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Servicio\Controller\Servicio',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'cargoconsulta' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cargoconsulta[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Cargoconsulta\Controller\Cargoconsulta',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'consultaanticipo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/pacientes/consultaanticipo[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Consultaanticipo\Controller\Consultaanticipo',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'admisionanticipo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/pacientes/admisionanticipo[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|ver|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Pacientes\Admisionanticipo\Controller\Admisionanticipo',
                        'action'     => 'listar',
                    ),
                ),
            ),
            // Catalogos
            'upload' => array(
                'type'    => 'literal',
                'options' => array(
                    'route'    => '/upload',
                    'defaults' => array(
                        'controller' => 'HVA\Controller\Index',
                        'action'     => 'upload',
                    ),
                ),
            ),
            'proveedor' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/proveedor[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Proveedor\Controller\Proveedor',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'tipo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/articulo/tipo[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Tipo\Controller\Tipo',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'udm' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/udm[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\UDM\Controller\UDM',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'articulo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/articulo[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Articulo\Controller\Articulo',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'articulovariante' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/articulovariante[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Articulovariante\Controller\Articulovariante',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'propiedad' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/propiedad[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Propiedad\Controller\Propiedad',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'producto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/producto[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Producto\Controller\Producto',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'medico' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/medico[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Medico\Controller\Medico',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'especialidad' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/especialidad[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Especialidad\Controller\Especialidad',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'cuarto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/cuarto[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Cuarto\Controller\Cuarto',
                        'action'     => 'listar',
                    ),
                ),
            ),
            /*'servicio' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/servicio[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Servicio\Controller\Servicio',
                        'action'     => 'listar',
                    ),
                ),
            ),*/
            'banco' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/banco[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Banco\Controller\Banco',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'lugar' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/lugar[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Lugar\Controller\Lugar',
                        'action'     => 'listar',
                    ),
                ),
            ),
            //Empleados
            'empleados' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/catalogos/empleado[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Catalogos\Empleado\Controller\Empleado',
                        'action'     => 'listar',
                    ),
                ),
            ),
            //Productos
            'productos-registro' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/productos/registro[/:action][/:id][/]',
                    'constraints' => array(
                        'action' => 'eliminar',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Productos\Registro\Controller\Registro',
                        'action'     => 'index',
                    ),
                ),
            ),
            'productos-existencias' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/productos/existencias',
                    'defaults' => array(
                        'controller' => 'Productos\Existencias\Controller\Existencias',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'productos-existencias-caducidadbylugar'=>array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'    => '/caducidadbylugar',
                            'defaults' => array(
                                'controller' => 'Productos\Existencias\Controller\Existencias',
                                'action'     => 'caducidadbylugar',
                            ),
                        ),
                    ),
                ),
            ),
            'productos-precios' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/productos/precios',
                    'defaults' => array(
                        'controller' => 'Productos\Precios\Controller\Precios',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'productos-precios-comprasbyarticulovariante'=>array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'    => '/comprasbyarticulovariante',
                            'defaults' => array(
                                'controller' => 'Productos\Precios\Controller\Precios',
                                'action'     => 'comprasbyarticulovariante',
                            ),
                        ),
                    ),
                ),
            ),
            'productos-producto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/productos',
                    'defaults' => array(
                        'controller' => 'Productos\Producto\Controller\Producto',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'productos-producto-caducidadbylugar'=>array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'    => '/caducidadbylugar',
                            'defaults' => array(
                                'controller' => 'Productos\Producto\Controller\Producto',
                                'action'     => 'caducidadbylugar',
                            ),
                        ),
                    ),
                ),
            ),
            'productos-reorden' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/productos/reorden',
                    'defaults' => array(
                        'controller' => 'Productos\Reorden\Controller\Reorden',
                        'action'     => 'lista',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'productos-reorden-definir'=>array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'    => '/definir',
                            'defaults' => array(
                                'controller' => 'Productos\Reorden\Controller\Reorden',
                                'action'     => 'definir',
                            ),
                        ),
                    ),
                ),
            ),
            //Compras
            'compras' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/compras[/:action][/:id][/]',
                    'defaults' => array(
                        'controller' => 'Compras\Controller\Compras',
                        'action'     => 'listar',
                    ),
                ),
            ),
            
            //Empleados
            'empleados' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/empleados[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Empleados',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'empleados-roles' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/empleados/roles[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Empleados\Controller\Roles',
                        'action'     => 'listar',
                    ),
                ),
            ),
            //Almacen
            'almacen-transferencias' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/almacen/transferencias[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Almacen\Controller\Transferencias',
                        'action'     => 'listar',
                    ),
                ),
            ),
            //Caja chica
            'cajachica-concepto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cajachica/concepto[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Cajachica\Controller\Concepto',
                        'action'     => 'listar',
                    ),
                    'constraints' => array(
                        'action' => 'nuevo|editar|eliminar|listar',
                    ),
                ),
            ),
            'cajachica-movimientos' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cajachica/movimientos[/:action]',
                    'defaults' => array(
                        'controller' => 'Cajachica\Controller\Concepto',
                        'action'     => 'movimientos',
                    ),
                    'constraints' => array(
                        'action' => 'movimientos|getconceptos|nuevomovimiento|eliminarmovmiento|editarmovmiento',
                    ),
                ),
            ),
            'cajachica-movimientos-conceptos' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/cajachica/movimientos/getconceptos',
                    'defaults' => array(
                        'controller' => 'Cajachica\Controller\Concepto',
                        'action'     => 'getconceptos',
                    ),
                ),
            ),
            //Bancos
            'bancos-concepto' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/bancos/concepto[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Bancos\Controller\Concepto',
                        'action'     => 'listar',
                    ),
                ),
            ),
            'bancos-movimientos' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/bancos/movimientos[/:action]',
                    'defaults' => array(
                        'controller' => 'Bancos\Controller\Movimientos',
                        'action'     => 'index',
                    ),
                    'constraints' => array(
                        'action' => 'getconceptos|nuevomovimiento|eliminarmovmiento|editarmovmiento',
                    ),
                ),
            ),
            'auth' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/auth[/:action]',
                    'defaults' => array(
                        'controller' => 'Auth\Controller\Auth',
                        'action'     => 'login',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            // Index
            'HVA\Controller\Index' => 'HVA\Controller\IndexController',

            //Login
            'Auth\Controller\Auth' => 'Auth\Controller\AuthController',

            // Módulo Catalogos

            'Catalogos\Proveedor\Controller\Proveedor'                  => 'Catalogos\Proveedor\Controller\ProveedorController',
            'Catalogos\Tipo\Controller\Tipo'                            => 'Catalogos\Tipo\Controller\TipoController',
            'Catalogos\Articulo\Controller\Articulo'                    => 'Catalogos\Articulo\Controller\ArticuloController',
            'Catalogos\Articulovariante\Controller\Articulovariante'    => 'Catalogos\Articulovariante\Controller\ArticulovarianteController',
            'Catalogos\Propiedad\Controller\Propiedad'                  => 'Catalogos\Propiedad\Controller\PropiedadController',
            'Catalogos\Producto\Controller\Producto'                    => 'Catalogos\Producto\Controller\ProductoController',
            'Catalogos\Medico\Controller\Medico'                        => 'Catalogos\Medico\Controller\MedicoController',
            'Catalogos\Especialidad\Controller\Especialidad'            => 'Catalogos\Especialidad\Controller\EspecialidadController',
            'Catalogos\Cuarto\Controller\Cuarto'                        => 'Catalogos\Cuarto\Controller\CuartoController',
            //'Catalogos\Servicio\Controller\Servicio'                    => 'Catalogos\Servicio\Controller\ServicioController',
            'Catalogos\Empleado\Controller\Empleado'                    =>  'Catalogos\Empleado\Controller\EmpleadoController',
            'Catalogos\Lugar\Controller\Lugar'                          =>  'Catalogos\Lugar\Controller\LugarController',
            'Catalogos\Banco\Controller\Banco'                          =>  'Catalogos\Banco\Controller\BancoController',


            //Modulo Productos
            'Productos\Registro\Controller\Registro'                            => 'Productos\Registro\Controller\RegistroController',
            'Productos\Existencias\Controller\Existencias'                      => 'Productos\Existencias\Controller\ExistenciasController',
            'Productos\Producto\Controller\Producto'                            =>   'Productos\Producto\Controller\ProductoController',
            'Productos\Reorden\Controller\Reorden'                              =>   'Productos\Reorden\Controller\ReordenController',
            'Productos\Precios\Controller\Precios'                              =>   'Productos\Precios\Controller\PreciosController',
            'Pacientes\Consultaanticipo\Controller\Consultaanticipo'            => 'Pacientes\Consultaanticipo\Controller\ConsultaanticipoController',
            'Pacientes\Admisionanticipo\Controller\Admisionanticipo'            => 'Pacientes\Admisionanticipo\Controller\AdmisionanticipoController',
            // Módulo Pacientes
            'Pacientes\Paciente\Controller\Paciente'                            => 'Pacientes\Paciente\Controller\PacienteController',
            'Pacientes\Consultorio\Controller\Consultorio'                      => 'Pacientes\Consultorio\Controller\ConsultorioController',
            'Pacientes\Servicio\Controller\Servicio'                            => 'Pacientes\Servicio\Controller\ServicioController',
            'Pacientes\Cargoconsulta\Controller\Cargoconsulta'                  => 'Pacientes\Cargoconsulta\Controller\CargoconsultaController',
            
            //Modulo Compras
            'Compras\Controller\Compras'                                        => 'Compras\Controller\ComprasController',
            
            //Modulo Empleado
            'Empleados\Controller\Empleados'                                    => 'Empleados\Controller\EmpleadosController',
            'Empleados\Controller\Roles'                                        => 'Empleados\Controller\RolesController',
            //Modulo de almacen
            'Almacen\Controller\Transferencias'                                 => 'Almacen\Controller\TransferenciasController',
            //Modulo Caja chica
            'Cajachica\Controller\Concepto'                                     => 'Cajachica\Controller\ConceptoController',
            //Modulo Bancos
            'Bancos\Controller\Concepto'                                        => 'Bancos\Controller\ConceptoController',
            'Bancos\Controller\Movimientos'                                     => 'Bancos\Controller\MovimientosController'
            ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'                 => __DIR__ . '/../view/layout/layout.phtml',
            'hva/index/index'               => __DIR__ . '/../view/hva/index/index.phtml',
            'error/404'                     => __DIR__ . '/../view/error/404.phtml',
            'error/index'                   => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        //other configuration
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
