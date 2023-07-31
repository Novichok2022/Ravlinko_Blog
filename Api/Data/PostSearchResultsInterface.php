<?php
namespace Ravlinko\Blog\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Rule search results data interface.
 */
interface PostSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get rule list.
     *
     * @return PostInterface[]
     */
    public function getItems();

    /**
     * Set rule list.
     *
     * @param PostInterface[] $items
     *
     * @return PostSearchResultsInterface
     */
    public function setItems(array $items);
}
