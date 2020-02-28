<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

use DateTime;

final class Event
{
    /**
     * @var string
     */
    protected string $uuid;
    /**
     * @var string
     */
    protected string $status;
    /**
     * @var string
     */
    protected string $eventType;
    /**
     * @var bool
     */
    protected bool $delivered;
    /**
     * @var DateTime
     */
    protected DateTime $deliveredOn;
    /**
     * @var int
     */
    protected int $callbackStatusCode;
    /**
     * @var DateTime
     */
    protected DateTime $timestamp;
    /**
     * @var EventTeam
     */
    protected EventTeam $team;
    /**
     * @var Document
     */
    protected Document $document;
    /**
     * @var Signer
     */
    protected Signer $signer;

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getEventType(): string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): self
    {
        $this->eventType = $eventType;

        return $this;
    }

    public function getDelivered(): bool
    {
        return $this->delivered;
    }

    public function setDelivered(bool $delivered): self
    {
        $this->delivered = $delivered;

        return $this;
    }

    public function getDeliveredOn(): DateTime
    {
        return $this->deliveredOn;
    }

    public function setDeliveredOn(DateTime $deliveredOn): self
    {
        $this->deliveredOn = $deliveredOn;

        return $this;
    }

    public function getCallbackStatusCode(): int
    {
        return $this->callbackStatusCode;
    }

    public function setCallbackStatusCode(int $callbackStatusCode): self
    {
        $this->callbackStatusCode = $callbackStatusCode;

        return $this;
    }

    public function getTimestamp(): DateTime
    {
        return $this->timestamp;
    }

    public function setTimestamp(DateTime $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getTeam(): EventTeam
    {
        return $this->team;
    }

    public function setTeam(EventTeam $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function setDocument(Document $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getSigner(): Signer
    {
        return $this->signer;
    }

    public function setSigner(Signer $signer): self
    {
        $this->signer = $signer;

        return $this;
    }
}