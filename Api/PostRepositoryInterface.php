<?php
namespace Ravlinko\Blog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Ravlinko\Blog\Api\Data\PostInterface;
use Ravlinko\Blog\Api\Data\PostSearchResultsInterface;

/**
 * Post repository interface.
 */
interface PostRepositoryInterface
{
    /**
     * Retrieve post by id.
     *
     * @param int $postId
     *
     * @return PostInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $postId): PostInterface;

    /**
     * Save post.
     *
     * @param PostInterface $post
     *
     * @return void
     * @throws CouldNotSaveException
     */
    public function save(PostInterface $postId): void;

    /**
     * Delete post.
     *
     * @param PostInterface $post
     *
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(PostInterface $post): bool;

    /**
     * Delete post by id.
     *
     * @param int $postId
     *
     * @return bool
     * @throws NoSuchEntityException|CouldNotDeleteException
     */
    public function deleteById(int $postId): bool;

    /**
     * Retrieve list of post by search criteria.
     *
     * @param SearchCriteriaInterface $criteria
     *
     * @return PostSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $criteria): PostSearchResultsInterface;
}
