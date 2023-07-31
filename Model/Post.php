<?php declare(strict_types=1);

namespace Ravlinko\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Ravlinko\Blog\Model\ResourceModel\Post as PostResource;
use Ravlinko\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct()
    {
        $this->_eventPrefix = 'ravlinko_blog';
        $this->_eventObject = 'blog';
        $this->_idFieldName = 'post_id';
        $this->_init(PostResource::class);
    }

    public function getTitle(): ?string
    {
        return $this->_getData(self::TITLE);
    }

    public function getMetaTitle(): ?string
    {
        return $this->_getData(self::META_TITLE);
    }

    public function getMetaKeywords(): ?string
    {
        return $this->_getData(self::META_KEYWORDS);
    }

    public function getMetaDescription(): ?string
    {
        return $this->_getData(self::META_DESCRIPTION);
    }

    public function getContent(): ?string
    {
        return $this->_getData(self::CONTENT);
    }

    public function getCreationTime(): ?string
    {
        return $this->_getData(self::CREATION_TIME);
    }

    public function getUpdateTime(): ?string
    {
        return $this->_getData(self::UPDATE_TIME);
    }

    public function getFeaturedImage(): ?string
    {
        return $this->_getData(self::FEATURED_IMAGE);
    }

    public function getUrlKey(): ?string
    {
        return $this->_getData(self::URL_KEY);
    }

    public function setTitle(string $title): PostInterface
    {
        return $this->setData(self::TITLE, $title);
    }

    public function setMetaTitle(string $metaTitle): PostInterface
    {
        return $this->setData(self::META_TITLE, $metaTitle);
    }

    public function setMetaKeywords(string $metaKeywords): PostInterface
    {
        return $this->setData(self::META_KEYWORDS, $metaKeywords);
    }

    public function setMetaDescription(string $metaDescription): PostInterface
    {
        return $this->setData(self::META_DESCRIPTION, $metaDescription);
    }

    public function setContent(string $content): PostInterface
    {
        return $this->setData(self::CONTENT, $content);
    }

    public function setCreationTime(string $creationTime): PostInterface
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }

    public function setUpdateTime(string $updateTime): PostInterface
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    public function setFeaturedImage(string $featuredImage): PostInterface
    {
        return $this->setData(self::FEATURED_IMAGE, $featuredImage);
    }

    public function setUrlKey(string $urlKey): PostInterface
    {
        return $this->setData(self::URL_KEY, $urlKey);
    }
}
