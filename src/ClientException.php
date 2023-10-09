<?php

declare(strict_types=1);

namespace Payone\Sdk\Http\StreamClient;

use Payone\Sdk\SdkExceptionInterface;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;

/**
 * @author Fabian Böttcher <me@cakasim.de>
 * @since 0.1.0
 */
class ClientException extends Exception implements ClientExceptionInterface, SdkExceptionInterface
{
}
