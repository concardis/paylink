<?php
/**
 * The Base model class for request and response models.
 * @copyright 2019 Concardis GmbH
 * @since     v1.0
 */
namespace Paylink\Models;

/**
 * Class Base
 * @package Paylink\Models
 */
abstract class Base
{
    protected $id;

    /**
     * Converts array to response model
     *
     * @param array $data
     *
     * @return $this
     */
    public function fromArray($data)
    {
        foreach ($data as $param => $value) {
            if (!method_exists($this, 'set' . ucfirst($param))) {
                continue;
            }
            $this->{'set' . ucfirst($param)}($value);
        }
        return $this;
    }

    /**
     * Convert object to an associative array
     *
     * @param string $method The API method called
     *
     * @return array
     */
    public function toArray($method)
    {
        $vars = get_object_vars($this);
        $className = explode('\\', get_called_class());
        return $vars + array('model' => end($className));
    }

    /**
     * Returns the corresponding response model object
     *
     * @return \Paylink\Models\Response\Base
     */
    public abstract function getResponseModel();

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
