<?php

declare(strict_types=1);

namespace Swoole\Coroutine\Http;

/**
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\Http\Server" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Http\Server
 */
class Server
{
    public $fd = -1;

    public $host;

    public $port = -1;

    public $ssl = false;

    public $settings;

    public $errCode = 0;

    public $errMsg = '';

    public function __construct(string $host, int $port = 0, bool $ssl = false, bool $reuse_port = false)
    {
    }

    public function __destruct()
    {
    }

    public function set(array $settings): bool
    {
    }

    public function handle(string $pattern, callable $callback): void
    {
    }

    public function start(): bool
    {
    }

    public function shutdown(): void
    {
    }

    private function onAccept(): void
    {
    }
}
