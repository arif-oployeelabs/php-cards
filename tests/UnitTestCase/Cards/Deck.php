<?php
/**
 * Unit Test Cases for the Cards\Deck class
 * @version $Id$
 */
namespace UnitTestCase\Cards;
use Cards;

class Deck extends \UnitTestCase {

    public function setUp() {
    
        
    
    }
    
    public function tearDown() {
    
        
    
    }
    
    /**
     * Create a new deck and check that it has all its cards
     */
    public function testInstantiateNewDeck() {
    
        $deck = new Cards\Deck;
        $this->assertEqual($deck->count(), 52); 
    
    }
    
    public function testCountableInterface() {
    
        $deck = new Cards\Deck;
        $this->assertEqual(count($deck), 52);
    
    }

}