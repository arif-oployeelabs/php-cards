<?php
/**
 * Cards\Card
 * This is the class used to represent one card out of a classic french deck.
 * 
 * @package PHP-Cards
 * @subpackage Cards
 * @copyright Luke Visinoni (luke.visinoni@gmail.com)
 * @author Luke Visinoni (luke.visinoni@gmail.com)
 * @license GNU Lesser General Public License
 * @version $Id$
 */
namespace Cards;

class Card {

    /**
     * @var string This card's suit (spades, hearts, diams, or clubs)
     */
    protected $_suit;
    
    /**
     * @var string This card's value (A through K)
     */
    protected $_value;
    
    /**
     * Class constructor
     *
     * @param string This card's suit
     * @param string This card's value
     */
    public function __construct($suit, $value) {
    
        $this->_setSuit($suit);
        $this->_setValue($value);
    
    }
    
    /**
     * Set this card's suit
     *
     * @param string The suit this card should be
     * @access protected
     */
    protected function _setSuit($suit) {
    
        /*if (!in_array($suit, $this->_suits)) {
            throw new Exception\InvalidCard($suit . ' is not a valid suit.');
        }*/
        $this->_suit = $suit;
    
    }
    
    /**
     * Set this card's value
     *
     * @param string The value of this card
     * @access protected
     */
    protected function _setValue($value) {
    
        /*if (!in_array($value, $this->_values)) {
            throw new Exception\InvalidCard($value . ' is not a valid value.');
        }*/
        $this->_value = $value;
    
    }
    
    /**
     * Retrieve the value of this particular card
     *
     * @return string This card's value
     */
    public function getValue() {
    
        return $this->_value;
    
    }
    
    /**
     * Retrieve the suit of this particular card
     *
     * @return string This card's suit
     */
    public function getSuit() {
    
        return $this->_suit;
    
    }
    
    /**
     * Return some intelligible string representation of this card
     *
     * @return string A string representation of this card
     */
    public function __toString() {
    
        $suit = $this->getSuit();
        $value = $this->getValue();
        return "$value of $suit"; // best I can do for now...
    
    }

}