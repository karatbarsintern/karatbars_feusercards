<?php
namespace Karatbars\KaratbarsFeusercards\Domain\Model;

/**
 * FrontendUser Model for fe_user cards
 */

 class ExtendedFrontendUser extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {
    /**
     * @var string
     */
    protected $feUserCardsPosition;

    /**
     * @var string
     */
    protected $feUserCardsSorting;

    /**
     * @var string
     */
    protected $feUserCardsMobile;
    
    function __construct() {
        parent::__construct();
    }

    /**
     * Get Position
     * 
     * @return string
     */
    public function getFeUserCardsPosition(){
        return $this->feUserCardsPosition;
    }

    /**
     * Set Position
     * 
     * @param string $position position
     * @return void
     */
    public function setFeUserCardsPosition($position){
        return $this->feUserCardsPosition;
    }


    /**
     * Get Mobile
     * 
     * @return string
     */
    public function getFeUserCardsMobile(){
        return $this->feUserCardsMobile;
    }

    /**
     * Set Mobile
     * 
     * @param string $mobile mobile
     * @return void
     */
    public function setFeUserCardsMobile($mobile){
        return $this->feUserCardsMobile;
    }

    /**
     * Get Sorting
     * 
     * @return string
     */
    public function getFeUserCardsSorting(){
        return $this->feUserCardsSorting;
    }

    /**
     * Set Sorting
     * 
     * @param string $sorting sorting
     * @return void
     */
    public function setFeUserCardsSorting($sorting){
        return $this->feUserCardsSorting;
    }
 }