<?php

namespace App\Entity;

use JsonSerializable;

/**
 * @ORM\Entity
 * @ORM\Table(name="foo")
 */
class FooEntity implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=32)
     * @var string
     */
    private $name;

    /**
     * Application constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}