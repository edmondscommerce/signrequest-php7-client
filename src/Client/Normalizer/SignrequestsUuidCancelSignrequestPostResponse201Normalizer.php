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

final class SignrequestsUuidCancelSignrequestPostResponse201Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, string $format = null)
    {
        return $type === 'SignRequest\\Client\\Model\\SignrequestsUuidCancelSignrequestPostResponse201';
    }

    public function supportsNormalization($data, string $format = null)
    {
        return is_object($data) && get_class($data) === 'SignRequest\\Client\\Model\\SignrequestsUuidCancelSignrequestPostResponse201';
    }

    public function denormalize($data, $class, string $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \SignRequest\Client\Model\SignrequestsUuidCancelSignrequestPostResponse201();
        if (property_exists($data, 'detail') && $data->{'detail'} !== null) {
            $object->setDetail($data->{'detail'});
        } elseif (property_exists($data, 'detail') && $data->{'detail'} === null) {
            $object->setDetail(null);
        }
        if (property_exists($data, 'cancelled') && $data->{'cancelled'} !== null) {
            $object->setCancelled($data->{'cancelled'});
        } elseif (property_exists($data, 'cancelled') && $data->{'cancelled'} === null) {
            $object->setCancelled(null);
        }

        return $object;
    }

    public function normalize($object, string $format = null, array $context = [])
    {
        $data = new stdClass();
        if ($object->getDetail() !== null) {
            $data->{'detail'} = $object->getDetail();
        } else {
            $data->{'detail'} = null;
        }
        if ($object->getCancelled() !== null) {
            $data->{'cancelled'} = $object->getCancelled();
        } else {
            $data->{'cancelled'} = null;
        }

        return $data;
    }
}
