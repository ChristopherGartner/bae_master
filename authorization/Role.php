<?php

namespace authorization;

/**
 * Base data class for roles
 */
class Role
{
    private string
        $_id,
        $_name,
        $_information
    ;
    private array $_rights = [];

    public function getId(): string
    {
        return $this->_id;
    }

    public function getName(): string
    {
        return $this->_name;
    }

    public function getInformation(): string
    {
        return $this->_information;
    }

    public function getRights(): array
    {
        return $this->_rights;
    }

    public function setId(string $id): void
    {
        $this->_id = $id;
    }

    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    public function setInformation(string $information): void
    {
        $this->_information = $information;
    }

    public function setRights(array $rights): void
    {
        $this->_rights = $rights;
    }
}