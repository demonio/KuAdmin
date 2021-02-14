<?php
/**
 * @see Controller nuevo controller
 */
require_once CORE_PATH . 'kumbia/controller.php';

/**
 * Controlador para proteger los controladores que heredan
 * Para empezar a crear una convención de seguridad y módulos
 *
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 */
abstract class ControllerAdmin extends Controller
{

    final protected function initialize()
    {
        if ( ! Session::get('id')) {
            View::template('login');
            return false;
        }
    }

    final protected function finalize()
    {
        
    }

}
