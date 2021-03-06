<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

use DateTime;

final class DocumentSearch
{
    /**
     * @var string|null
     */
    protected $uuid;
    /**
     * @var DateTime|null
     */
    protected $created;
    /**
     * `co`: converting, `ne`: new, `se`: sent, `vi`: viewed, `si`: signed, `do`: downloaded, `sd`: signed and downloaded, `ca`: cancelled, `de`: declined, `ec`: error converting, `es`: error sending, `xp`: expired.
     *
     * @var string|null
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $who;
    /**
     * Defaults to filename.
     *
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $autocomplete;
    /**
     * @var string|null
     */
    protected $fromEmail;
    /**
     * @var int|null
     */
    protected $nrExtraDocs;
    /**
     * @var string[]|null
     */
    protected $signerEmails = [];
    /**
     * @var string|null
     */
    protected $statusDisplay;
    /**
     * @var int|null
     */
    protected $createdTimestamp;
    /**
     * @var int|null
     */
    protected $finishedOnTimestamp;
    /**
     * @var string|null
     */
    protected $parentDoc;
    /**
     * @var DateTime|null
     */
    protected $finishedOn;
    /**
     * @var string|null
     */
    protected $subdomain;

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    public function setCreated(?DateTime $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * `co`: converting, `ne`: new, `se`: sent, `vi`: viewed, `si`: signed, `do`: downloaded, `sd`: signed and downloaded, `ca`: cancelled, `de`: declined, `ec`: error converting, `es`: error sending, `xp`: expired.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * `co`: converting, `ne`: new, `se`: sent, `vi`: viewed, `si`: signed, `do`: downloaded, `sd`: signed and downloaded, `ca`: cancelled, `de`: declined, `ec`: error converting, `es`: error sending, `xp`: expired.
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getWho(): ?string
    {
        return $this->who;
    }

    public function setWho(?string $who): self
    {
        $this->who = $who;

        return $this;
    }

    /**
     * Defaults to filename.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Defaults to filename.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAutocomplete(): ?string
    {
        return $this->autocomplete;
    }

    public function setAutocomplete(?string $autocomplete): self
    {
        $this->autocomplete = $autocomplete;

        return $this;
    }

    public function getFromEmail(): ?string
    {
        return $this->fromEmail;
    }

    public function setFromEmail(?string $fromEmail): self
    {
        $this->fromEmail = $fromEmail;

        return $this;
    }

    public function getNrExtraDocs(): ?int
    {
        return $this->nrExtraDocs;
    }

    public function setNrExtraDocs(?int $nrExtraDocs): self
    {
        $this->nrExtraDocs = $nrExtraDocs;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getSignerEmails(): ?array
    {
        return $this->signerEmails;
    }

    /**
     * @param string[]|null $signerEmails
     */
    public function setSignerEmails(?array $signerEmails): self
    {
        $this->signerEmails = $signerEmails;

        return $this;
    }

    public function getStatusDisplay(): ?string
    {
        return $this->statusDisplay;
    }

    public function setStatusDisplay(?string $statusDisplay): self
    {
        $this->statusDisplay = $statusDisplay;

        return $this;
    }

    public function getCreatedTimestamp(): ?int
    {
        return $this->createdTimestamp;
    }

    public function setCreatedTimestamp(?int $createdTimestamp): self
    {
        $this->createdTimestamp = $createdTimestamp;

        return $this;
    }

    public function getFinishedOnTimestamp(): ?int
    {
        return $this->finishedOnTimestamp;
    }

    public function setFinishedOnTimestamp(?int $finishedOnTimestamp): self
    {
        $this->finishedOnTimestamp = $finishedOnTimestamp;

        return $this;
    }

    public function getParentDoc(): ?string
    {
        return $this->parentDoc;
    }

    public function setParentDoc(?string $parentDoc): self
    {
        $this->parentDoc = $parentDoc;

        return $this;
    }

    public function getFinishedOn(): ?DateTime
    {
        return $this->finishedOn;
    }

    public function setFinishedOn(?DateTime $finishedOn): self
    {
        $this->finishedOn = $finishedOn;

        return $this;
    }

    public function getSubdomain(): ?string
    {
        return $this->subdomain;
    }

    public function setSubdomain(?string $subdomain): self
    {
        $this->subdomain = $subdomain;

        return $this;
    }
}
