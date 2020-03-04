<?php


class User
{
    protected string $firstname;
    protected string $lastname;
    protected string $dateofbirth;
    protected string $id;

    public function __construct(string $firstname, string $lastname, string $dateofbirth, string $id)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->dateofbirth = $dateofbirth;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getDateofbirth(): string
    {
        return $this->dateofbirth;
    }

    /**
     * @param string $dateofbirth
     */
    public function setDateofbirth(string $dateofbirth): void
    {
        $this->dateofbirth = $dateofbirth;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

}