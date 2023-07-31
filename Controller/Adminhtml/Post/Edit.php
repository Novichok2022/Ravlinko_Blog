<?php declare(strict_types=1);

namespace Ravlinko\Blog\Controller\Adminhtml\Post;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Edit extends Action implements HttpGetActionInterface
{

//    /**
//     * Init actions
//     *
//     * @return \Magento\Backend\Model\View\Result\Page
//     */
//    protected function _initAction()
//    {
//        // load layout, set active menu and breadcrumbs
//        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
//        $resultPage = $this->resultPageFactory->create();
//        $resultPage->setActiveMenu('MageMastery_Blog::post')
//            ->addBreadcrumb(__('CMS'), __('CMS'))
//            ->addBreadcrumb(__('Manage Pages'), __('Manage Pages'));
//        return $resultPage;
//    }

    /**
     * Edit CMS page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute(): Page
    {
        $pageResult = $this->createPageResult();
        $title = $pageResult->getConfig()->getTitle();
        $title->prepend(__('Posts'));
        $title->prepend(__('New Post'));

        return $pageResult;
    }

    private function createPageResult()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
