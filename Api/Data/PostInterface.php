<?php

namespace Ravlinko\Blog\Api\Data;


interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID                  = 'post_id';
    const TITLE                    = 'title';
    const META_TITLE               = 'meta_title';
    const META_KEYWORDS            = 'meta_keywords';
    const META_DESCRIPTION         = 'meta_description';
    const CONTENT                  = 'content';
    const CREATION_TIME            = 'creation_time';
    const UPDATE_TIME              = 'update_time';
    const FEATURED_IMAGE           = 'featured_image';
    const URL_KEY                  = 'url_key';

    /**
     * Get ID
     *
     * @return int
     */
    public function getId(): int;

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Get meta title
     *
     * @return string|null
     */
    public function getMetaTitle(): ?string;

    /**
     * Get meta keywords
     *
     * @return string|null
     */
    public function getMetaKeywords(): ?string;

    /**
     * Get meta description
     *
     * @return string|null
     */
    public function getMetaDescription(): ?string;

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent(): ?string;

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string;

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string;

    /**
     * Get featured image
     *
     * @return string|null
     */
    public function getFeaturedImage(): ?string;

    /**
     * Get url key
     *
     * @return string|null
     */
    public function getUrlKey(): ?string;

    /**
     * Set ID
     *
     * @param int $id
     * @return PostInterface
     */
    public function setId(int $id);

    /**
     * Set title
     *
     * @param string $title
     * @return PostInterface
     */
    public function setTitle(string $title): PostInterface;

    /**
     * Set meta title
     *
     * @param string $metaTitle
     * @return PostInterface
     */
    public function setMetaTitle(string $metaTitle): PostInterface;

    /**
     * Set meta keywords
     *
     * @param string $metaKeywords
     * @return PostInterface
     */
    public function setMetaKeywords(string $metaKeywords): PostInterface;

    /**
     * Set meta description
     *
     * @param string $metaDescription
     * @return PostInterface
     */
    public function setMetaDescription(string $metaDescription): PostInterface;

    /**
     * Set content
     *
     * @param string $content
     * @return PostInterface
     */
    public function setContent(string $content): PostInterface;

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return PostInterface
     */
    public function setCreationTime(string $creationTime): PostInterface;

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return PostInterface
     */
    public function setUpdateTime(string $updateTime): PostInterface;

    /**
     * Set featured image
     *
     * @param string $featuredImage
     * @return PostInterface
     */
    public function setFeaturedImage(string $featuredImage): PostInterface;

    /**
     * Set url key
     *
     * @param string $urlKey
     * @return PostInterface
     */
    public function setUrlKey(string $urlKey): PostInterface;
}
