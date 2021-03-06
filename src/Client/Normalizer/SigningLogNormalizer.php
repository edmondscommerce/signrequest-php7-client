<?php

declare(strict_types=1);

namespace SignRequest\Client\Normalizer;

use stdClass;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

final class SigningLogNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, string $format = null)
    {
        return $type === 'SignRequest\\Client\\Model\\SigningLog';
    }

    public function supportsNormalization($data, string $format = null)
    {
        return is_object($data) && get_class($data) === 'SignRequest\\Client\\Model\\SigningLog';
    }

    public function denormalize($data, $class, string $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \SignRequest\Client\Model\SigningLog();
        if (property_exists($data, 'pdf') && $data->{'pdf'} !== null) {
            $object->setPdf($data->{'pdf'});
        } elseif (property_exists($data, 'pdf') && $data->{'pdf'} === null) {
            $object->setPdf(null);
        }
        if (property_exists($data, 'security_hash') && $data->{'security_hash'} !== null) {
            $object->setSecurityHash($data->{'security_hash'});
        } elseif (property_exists($data, 'security_hash') && $data->{'security_hash'} === null) {
            $object->setSecurityHash(null);
        }

        return $object;
    }

    public function normalize($object, string $format = null, array $context = [])
    {
        return new stdClass();
    }
}
