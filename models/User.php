<?php


class User
{
    public string $firstname;
    public string $lastname;
    public string $dateofbirth;
    public string $id;
    public string $password;

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
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
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