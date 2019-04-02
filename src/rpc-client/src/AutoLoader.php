<?php declare(strict_types=1);


namespace Swoft\Rpc\Client;


use Swoft\Rpc\Packet;
use Swoft\Rpc\Packet\JsonPacket;
use Swoft\SwoftComponent;

/**
 * Class AutoLoader
 *
 * @since 2.0
 */
class AutoLoader extends SwoftComponent
{
    /**
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * @return array
     */
    public function metadata(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function coreBean(): array
    {
        return [
            'rpcClientPacket' => [
                'class' => Packet::class
            ]
        ];
    }
}