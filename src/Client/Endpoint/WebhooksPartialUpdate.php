<?php

declare(strict_types=1);

namespace SignRequest\Client\Endpoint;

final class WebhooksPartialUpdate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    protected $uuid;

    public function __construct(string $uuid, \SignRequest\Client\Model\WebhookSubscription $requestBody)
    {
        $this->uuid = $uuid;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{uuid}'], [$this->uuid], '/webhooks/{uuid}/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \SignRequest\Client\Model\WebhookSubscription) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null): ?\SignRequest\Client\Model\WebhookSubscription
    {
        if ($status === 200 && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'SignRequest\\Client\\Model\\WebhookSubscription', 'json');
        }
    }
}
