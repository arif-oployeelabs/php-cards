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

class Deck {

    const SUIT_CLUBS = 'clubs';

    const SUIT_DIAMONDS = 'diams';

    const SUIT_HEARTS = 'hearts';

    const SUIT_SPADES = 'spades';
    
    protected $_suits = array(self::SUIT_CLUBS, self::SUIT_DIAMONDS, self::SUIT_HEARTS, self::SUIT_SPADES);
    
    protected $_values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
    
    protected $_cards = array();
    
    public function __construct($shuffle = true) {
    
        foreach ($this->_suits as $suit) {
            foreach ($this->_values as $value) {
                $this->_cards[] = new Card($suit, $value);
            }
        }
        // if ($shuffle) $this->shuffle();
    
    }
    
    public function count() {
    
        return count($this->_cards);
    
    }

}