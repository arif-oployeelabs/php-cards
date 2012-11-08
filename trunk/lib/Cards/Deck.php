<?php
/**
 * Cards\Deck
 * This is a deck of classic french playing cards.
 * 
 * @package PHP-Cards
 * @subpackage Cards
 * @copyright Luke Visinoni (luke.visinoni@gmail.com)
 * @author Luke Visinoni (luke.visinoni@gmail.com)
 * @license GNU Lesser General Public License
 * @version $Id$
 */
namespace Cards;

class Deck implements \Countable {

    const SUIT_CLUBS = 'clubs';

    const SUIT_DIAMONDS = 'diams';

    const SUIT_HEARTS = 'hearts';

    const SUIT_SPADES = 'spades';
    
    /**
     * @var array The available suits for this deck
     */
    protected $_suits = array(self::SUIT_CLUBS, self::SUIT_DIAMONDS, self::SUIT_HEARTS, self::SUIT_SPADES);
    
    /**
     * @var array The available values for each suit
     */
    protected $_values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
    
    /**
     * @var array The available cards in the deck
     */
    protected $_cards = array();
    
    /**
     * Class constructor
     * Creates all the available cards in the deck and optionally shuffles them
     *
     * @param boolean Set to false if you do not want the deck shuffled
     */
    public function __construct($shuffle = true) {
    
        foreach ($this->_suits as $suit) {
            foreach ($this->_values as $value) {
                $this->_cards[] = new Card($suit, $value);
            }
        }
        // if ($shuffle) $this->shuffle();
    
    }
    
    /**
     * Get the amount of cards available in the deck
     *
     * @return integer The amount of cards in the deck
     */
    public function count() {
    
        return count($this->_cards);
    
    }
    
    /**
     * Remove the top card in the deck and return it
     *
     * @return Cards\Card The top card in the deck
     */
    public function deal() {
    
        $top = array_shift($this->_cards);
        return $top;
    
    }

}