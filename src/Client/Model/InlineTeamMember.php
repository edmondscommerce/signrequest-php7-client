<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

final class InlineTeamMember
{
    /**
     * @var string|null
     */
    protected $uuid;
    /**
     * @var string|null
     */
    protected $url;
    /**
     * @var User|null
     */
    protected $user;
    /**
     * @var bool|null
     */
    protected $isAdmin;
    /**
     * @var bool|null
     */
    protected $isActive;
    /**
     * @var bool|null
     */
    protected $isOwner;

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(?bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getIsOwner(): ?bool
    {
        return $this->isOwner;
    }

    public function setIsOwner(?bool $isOwner): self
    {
        $this->isOwner = $isOwner;

        return $this;
    }
}
