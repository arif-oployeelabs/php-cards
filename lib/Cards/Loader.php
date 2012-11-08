<?php
/**
 * Loader
 * This class is used to load classes by class name or by file name. It
 * searches the include path for whatever class name or class file you
 * provide it with. It is for use with namespaced classes only (PHP5-style
 * classes using underscores are not supported).
 * 
 * The __autoload function provided with this library uses this class to load
 * all of the necessary class files. There really isn't any reason to use this
 * class if you use the auto-loader.
 * 
 * @package PHP-Cards
 * @subpackage Loader
 * @copyright Luke Visinoni (luke.visinoni@gmail.com)
 * @author Luke Visinoni (luke.visinoni@gmail.com)
 * @license GNU Lesser General Public License
 * @version $Id$
 */
namespace Cards;

class Loader {

    /**
     * Load a class by class name
     * @param string $name The name of the class you would like to load
     * @return void
     * @access public
     * @static
     */
    static public function loadClass($name) {
    
        $path = str_replace("\\", DIRECTORY_SEPARATOR, $name) . ".php";
        self::loadFile($path);
    
    }
    
    /**
     * Loads a file or throws an exception
     * @param string $filename The name of the file you want to include. It is
     * not necessary to provide any path information because this method
     * searches the include path for the file.
     * @return void
     * @throws Cards\Exception\FileNotFound If the file cannot be found
     * @access public
     * @static
     */
    static public function loadFile($filename) {
    
        if (!self::fileExists($filename)) {
            throw new \Cards\Exception\FileNotFound("$filename does not exist.");
        }
        return require_once $filename;
    
    }
    
    /**
     * Looks through the include path for file name and returns true if found
     * @param string $filename The name of the file you want to determine the existence of
     * @return boolean True if the file exists, false otherwise
     * @access public
     * @static
     */
    static public function fileExists($filename) {
    
        $includepath = get_include_path();
        $includepath = explode(PATH_SEPARATOR, $includepath);
        foreach ($includepath as $path) {
            $path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
            if (file_exists($path . $filename)) return true;
        }
        return false;
    
    }

}