<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

final class FileFromSf
{
    /**
     * @var string
     */
    protected string $objectType;
    /**
     * @var string
     */
    protected string $objectId;
    /**
     * @var string
     */
    protected string $uid;

    public function getObjectType(): string
    {
        return $this->objectType;
    }

    public function setObjectType(string $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function getObjectId(): string
    {
        return $this->objectId;
    }

    public function setObjectId(string $objectId): self
    {
        $this->objectId = $objectId;

        return $this;
    }

    public function getUid(): string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }
}
