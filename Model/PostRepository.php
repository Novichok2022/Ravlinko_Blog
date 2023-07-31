<?php

namespace Ravlinko\Blog\Model;

use Ravlinko\Blog\Api\Data\PostSearchResultsInterface;
use Ravlinko\Blog\Api\PostRepositoryInterface;
use Ravlinko\Blog\Model\ResourceModel\Post as ResourcePost;
use Ravlinko\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Post repository
 *
 */
class PostRepository implements PostRepositoryInterface
{
    /**
     * @var ResourcePost
     */
    protected $resource;

    /**
     * @var PostFactory
     */
    protected $postFactory;

    /**
     * @var PostCollectionFactory
     */
    protected $postCollectionFactory;

    /**
     * @var PostInterfaceFactory
     */
    protected $dataPostFactory;

    /**
     * @var Data\PostSearchResultsInterfaceFactory
     */
    protected $searchResultsFactory;

    /**
     * PostRepository constructor.
     * @param ResourcePost $resource
     * @param PostFactory $postFactory
     * @param PostInterfaceFactory $dataPostFactory
     * @param PostCollectionFactory $postCollectionFactory
     */
    public function __construct(
        ResourcePost $resource,
        PostFactory $postFactory,
        PostInterfaceFactory $dataPostFactory,
        Data\PostSearchResultsInterfaceFactory $searchResultsFactory,
        PostCollectionFactory $postCollectionFactory
    ) {
        $this->resource = $resource;
        $this->postFactory = $postFactory;
        $this->dataPostFactory = $dataPostFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->postCollectionFactory = $postCollectionFactory;
    }

    /**
     * Save Post data
     *
     * @param PostInterface|Post $post
     * @return Post
     * @throws CouldNotSaveException
     */
    public function save(PostInterface $post)
    {
        try {
            $postId = $post->getId();
            $this->resource->save($post);
        } catch (LocalizedException $exception) {
            throw new CouldNotSaveException(
                __('Could not save the page: %1', $exception->getMessage()),
                $exception
            );
        } catch (\Throwable $exception) {
            throw new CouldNotSaveException(
                __('Could not save the page: %1', __('Something went wrong while saving the page.')),
                $exception
            );
        }
        return $post;
    }

    /**
     * Load post data by given Post Identity
     *
     * @param string $postId
     * @return Post
     * @throws NoSuchEntityException
     */
    public function getById($postId)
    {
        $post = $this->postFactory->create();
        $post->load($postId);
        if (!$post->getId()) {
            throw new NoSuchEntityException(__('The post with the "%1" ID doesn\'t exist.', $postId));
        }

        return $post;
    }

    /**
     * Load Post data collection by given search criteria
     *
     * @param SearchCriteriaInterface $criteria
     * @return PostSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $criteria)
    {
        $collection = $this->postCollectionFactory->create();

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * Delete Post
     *
     * @param PostInterface $post
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(PostInterface $post): bool
    {
        try {
            $this->resource->delete($post);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(
                __('Could not delete the page: %1', $exception->getMessage())
            );
        }
        return true;
    }

    /**
     * Delete Post by given Post Identity
     *
     * @param string $postId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById($postId): bool
    {
        return $this->delete($this->getById($postId));
    }
}
