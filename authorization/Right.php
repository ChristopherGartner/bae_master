<?php

namespace authorization;

/**
 * Base data class for rights
 */
class Right
{
    private string
        $_id,
        $_name,
        $_information
    ;

    public function getid(): string
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
}