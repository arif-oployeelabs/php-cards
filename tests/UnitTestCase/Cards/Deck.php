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
    
    /**
     * Test that it is possible to count() the deck
     */
    public function testCountableInterface() {
    
        $deck = new Cards\Deck;
        $this->assertEqual(count($deck), 52);
    
    }
    
    /**
     * Test that the deal() method removes a card from the deck and returns it
     */
    public function testDealCardRemovesCardFromDeck() {
    
        $deck = new Cards\Deck;
        $card = $deck->deal();
        $this->assertEqual(count($deck), 51);
        $this->assertIsA($card, 'Cards\\Card');
    
    }
    
    public function testDealCardReturnsTopCard() {
    
        $deck = new Cards\Deck; // Since deck isn't shuffled, top card should be 2 of clubs
        $card = $deck->deal();
        $this->assertEqual($card->__toString(), '2 of clubs');
    
    }

}