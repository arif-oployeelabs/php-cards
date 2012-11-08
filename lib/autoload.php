<?php
/**
 * Class Autoloader
 * Include this file if you want to use the __autoload feature rather than
 * including all of the files manually. It will automatically register its
 * autoload function with spl's autoload mechanism.
 * 
 * If, for some reason, you are uncomfortable with the __autoload feature, you
 * can manually include every file you need in the library with the Cards\Loader
 * class, but I advise against it. There are a *lot* of files to include.
 * 
 * @package PHP-Cards
 * @subpackage Loader
 * @copyright Luke Visinoni (luke.visinoni@gmail.com)
 * @author Luke Visinoni (luke.visinoni@gmail.com)
 * @license GNU Lesser General Public License
 * @version $Id$
 */
namespace Cards;

require_once 'Cards/Loader.php';

function Autoloader($name) {

    Loader::loadClass($name);

}

spl_autoload_register(__NAMESPACE__ . "\\Autoloader");