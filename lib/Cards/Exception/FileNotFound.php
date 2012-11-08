<?php
/**
 * File Not Found Exception
 * Thrown when library attempts to access a file that doesn't exist. Most common
 * use for this exception is in the Cards\Loader class, which will throw this
 * when the end-user attempts to use a class which doesn't map properly to any
 * known file. For instance, if the end-user tries to use a class such as
 * Cards\Some\Unknown\Class, this exception will be thrown since there is no
 * corresponding file for that class.
 *
 * @package PHP-Cards
 * @subpackage Exception
 * @copyright Luke Visinoni (luke.visinoni@gmail.com)
 * @author Luke Visinoni (luke.visinoni@gmail.com)
 * @license GNU Lesser General Public License
 * @version $Id$
 */
namespace Cards\Exception;

class FileNotFound extends \Cards\Exception {

    

}