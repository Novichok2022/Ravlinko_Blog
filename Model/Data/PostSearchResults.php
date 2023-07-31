<?php
declare(strict_types=1);

namespace Ravlinko\Blog\Model\Data;

use Ravlinko\Blog\Api\Data\PostSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Post entity search result interface implementation.
 */
class PostSearchResults extends SearchResults implements PostSearchResultsInterfaceSearchResultsInterface
{
}
