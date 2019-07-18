<?php
    namespace Karatbars\KaratbarsFeusercards\Controller;

    use TYPO3\CMS\Fluid\View\TemplateView;
    use TYPO3\CMS\Extbase\Mvc\View\ViewInterface;
    use TYPO3\CMS\Core\Utility\GeneralUtility;
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
         * @param ViewInterface $view
         */
        public function initializeView(ViewInterface $view)
        {
            if($view instanceof TemplateView) {
                $configurationManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Configuration\\ConfigurationManager');
                $extbaseFrameworkConfiguration = $configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FULL_TYPOSCRIPT);
                $customViews = $extbaseFrameworkConfiguration['plugin.']['tx_karatbars_feusercards.']['view.'];

                if( isset($customViews['templateRootPaths.']) ){
                    $view->setTemplateRootPaths( $customViews['templateRootPaths.'] );
                }

                if( isset($customViews['layoutRootPaths.']) ){
                    $view->setLayoutRootPaths( $customViews['layoutRootPaths.'] );
                }

                if( isset($customViews['partialRootPaths.']) ){
                    $view->setPartialRootPaths( $customViews['partialRootPaths.'] );
                }
            }
        }


        /**
         * Action for simple fe_user card.
         *
         * @return void
         */
        public function simpleFeUserCardAction() {
            $this->view->assign('feuser', $this->feUserRepository->findByUid($this->settings['user']));
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
	