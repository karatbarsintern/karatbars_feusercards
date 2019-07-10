<?php
    namespace Karatbars\KaratbarsFeusercards\Controller;
    
    use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
    //use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
    use Karatbars\KaratbarsFeusercards\Domain\Repository\ExtendedFrontendUserRepository;
	class FeusercardsController extends ActionController
	{
        /**
         * @var Karatbars\KaratbarsFeusercards\Domain\Repository\ExtendedFrontendUserRepository
         */
        private $feUserRepository;

        /**
         * Inject the frontend user repository
         *
         * @param Karatbars\KaratbarsFeusercards\Domain\Repository\ExtendedFrontendUserRepository $feUserRepository
         * @return void
         */
        public function injectFeUserRepository(ExtendedFrontendUserRepository $feUserRepository)
        {
            $this->feUserRepository = $feUserRepository;
        }

        /**
         * Action for single fe_user card.
         * 
         * @return void
         */
		public function singleFeUserCardAction() {
			$this->view->assign('feuser', $this->feUserRepository->findByUid($this->settings['user']));
        }

        /**
         * Action for multiple fe_user cards.
         * 
         * @return void
         */
		public function multipleFeUserCardsAction() {
			$this->view->assign('feuser', $this->retrieveUserByGroup($this->settings['userGroup']));
        }
        
        private function retrieveUserByGroup($userGroups){
            $groups = explode(',', $userGroups);
            $query = $this->feUserRepository->createQuery();
            $query->matching($query->in('usergroup.uid', $groups));
            $query->setOrderings(array('tx_karatbars_feusercards_sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
            return $query->execute();
        }
	}
	