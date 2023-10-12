<?php

declare(strict_types=1);

namespace Payone\Sdk\Http\StreamClient;

use Exception;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * @author André Gregor-Herrmann <andre.gregor-herrmann@payone.com>
 * @since 0.2.0
 */
class StreamClientException extends Exception implements ClientExceptionInterface, SdkStreamExceptionInterface
{
}
