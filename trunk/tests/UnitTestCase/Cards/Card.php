<?php
/**
 * Unit Test Cases for the Cards\Card class
 * @version $Id$
 */
namespace UnitTestCase\Cards;
use Cards;

class Card extends \UnitTestCase {

    public function setUp() {
    
        
    
    }
    
    public function tearDown() {
    
        
    
    }
    
    /**
     * Create a new card and then retrieve its suit
     */
    public function testGetSuit() {
    
        $suit = 'hearts';
        $value = '10';
        $card = new Cards\Card($suit, $value);
        $this->assertEqual($card->getSuit(), $suit);
    
    }
    
    /**
     * Create a new card and then retrieve its value
     */
    public function testGetValue() {
    
        $suit = 'hearts';
        $value = '10';
        $card = new Cards\Card($suit, $value);
        $this->assertEqual($card->getValue(), $value);
    
    }
    
    /**
     * Create a face-card and ensure its value is correct
     */
    public function testCreateFaceCard() {
    
        $suit = 'hearts';
        $value = 'K'; // suicide king
        $card = new Cards\Card($suit, $value);
        $this->assertEqual($card->getValue(), $value);
    
    }
    
    /**
     * Create an ace and ensure its value is correct
     */
    public function testCreateAce() {
    
        $suit = 'spades';
        $value = 'A';
        $card = new Cards\Card($suit, $value);
        $this->assertEqual($card->getValue(), $value);
    
    }
    
    /**
     * Test that the magic __toString() method works as expected
     */
    public function testToString() {
    
        $card = new Cards\Card('spades', 'A');
        $this->assertEqual($card->__toString(), 'A of spades');
    
    }

}