<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

final class User
{
    /**
     * @var string
     */
    protected string $email;
    /**
     * @var string
     */
    protected string $firstName;
    /**
     * @var string
     */
    protected string $lastName;
    /**
     * @var string
     */
    protected string $displayName;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    public function setDisplayName(string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }
}
