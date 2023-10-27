<?php

namespace user;

use Cassandra\Date;

/**
 * Base data class for Employees / Users
 */
class Employee
{
    private string
        $_id,
        $_firstName,
        $_lastName,
        $_gender,
        $_position,
        $_title,
        $_information,
        $_address
    ;

    private float $_salaryPerHour;

    private Date $_birthDate;

    private array $_rights = [];

    private array $_roles = [];

    public function getId(): string
    {
        return $this->_id;
    }

    public function getFirstName(): string
    {
        return $this->_firstName;
    }

    public function getLastName(): string
    {
        return $this->_lastName;
    }

    public function getGender(): string
    {
        return $this->_gender;
    }

    public function getPosition(): string
    {
        return $this->_position;
    }

    public function getTitle(): string
    {
        return $this->_title;
    }

    public function getInformation(): string
    {
        return $this->_information;
    }

    public function getAddress(): string
    {
        return $this->_address;
    }

    public function getSalaryPerHour(): float
    {
        return $this->_salaryPerHour;
    }

    public function getBirthDate(): Date
    {
        return $this->_birthDate;
    }

    public function getRights(): array
    {
        return $this->_rights;
    }

    public function getRoles(): array
    {
        return $this->_roles;
    }

    public function setId(string $id): void
    {
        $this->_id = $id;
    }

    public function setFirstName(string $firstName): void
    {
        $this->_firstName = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->_lastName = $lastName;
    }

    public function setGender(string $gender): void
    {
        $this->_gender = $gender;
    }

    public function setPosition(string $position): void
    {
        $this->_position = $position;
    }

    public function setTitle(string $title): void
    {
        $this->_title = $title;
    }

    public function setInformation(string $information): void
    {
        $this->_information = $information;
    }

    public function setAddress(string $address): void
    {
        $this->_address = $address;
    }

    public function setSalaryPerHour(float $salaryPerHour): void
    {
        $this->_salaryPerHour = $salaryPerHour;
    }

    public function setBirthDate(Date $birthDate): void
    {
        $this->_birthDate = $birthDate;
    }

    public function setRights(array $rights): void
    {
        $this->_rights = $rights;
    }

    public function setRoles(array $roles): void
    {
        $this->_roles = $roles;
    }
}