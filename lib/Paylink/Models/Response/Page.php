<?php
/**
 * The Page response model
 * @copyright 2019 Concardis GmbH
 * @since     v1.0
 */
namespace Paylink\Models\Response;

/**
 * Class Page
 * @package Paylink\Models\Response
 */
class Page extends \Paylink\Models\Request\Page
{
    protected $createdAt = 0;

    /**
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedDate($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
}
