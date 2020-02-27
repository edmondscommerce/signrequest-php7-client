<?php

declare(strict_types=1);

namespace SignRequest\Client\Model;

final class InlineDocumentSignerIntegrationData
{
    /**
     * @var string|null
     */
    protected ?string $integration;
    /**
     * @var mixed
     */
    protected $integrationData;

    public function getIntegration(): ?string
    {
        return $this->integration;
    }

    public function setIntegration(?string $integration): self
    {
        $this->integration = $integration;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIntegrationData()
    {
        return $this->integrationData;
    }

    /**
     * @param mixed $integrationData
     *
     * @return InlineDocumentSignerIntegrationData
     */
    public function setIntegrationData($integrationData): self
    {
        $this->integrationData = $integrationData;

        return $this;
    }
}
