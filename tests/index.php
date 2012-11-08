<?php
/**
 * Display Errors on tests runner
 * @version $Id$
 */
ini_set('display_errors', 'on');
error_reporting(E_ALL & ~E_DEPRECATED);

/**
 * Add library path to include path so autoloader and includes know where to
 * find the php-cards library.
 */
set_include_path(
    '../lib' . PATH_SEPARATOR .
    get_include_path()
);

/**
 * Add autoloader so that tests don't need to manually load library classes
 */
require_once 'autoload.php';

/**
 * Include SimpleTest library
 */
require_once 'simpletest/unit_tester.php';
require_once 'simpletest/reporter.php';
require_once 'simpletest/mock_objects.php';

// @todo Throw this in a "functions.php" file or something
function pre($val, $return = false) {

    ob_start();
    echo "<pre>";
    print_r($val);
    echo "</pre>";
    $output = ob_get_clean();
    if ($return) return $output;
    echo $output;

}

// run tests in html reporter
$test = new GroupTest('PHP-Cards Library Tests');
$test->addTestCase(new \UnitTestCase\Cards\Card);
// $test->addTestCase(new \UnitTestCase_Deck);

if (TextReporter::inCli()) {
    exit ($test->run(new TextReporter()) ? 0 : 1);
}
$test->run(new HtmlReporter());
