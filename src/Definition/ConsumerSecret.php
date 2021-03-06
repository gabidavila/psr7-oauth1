<?php

namespace ApiClients\Tools\Psr7\Oauth1\Definition;

class ConsumerSecret
{
    /**
     * @var string
     */
    private $consumerSecret;

    /**
     * @param string $consumerSecret
     */
    public function __construct($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
    }

    /**
     * @return string
     */
    public function getConsumerSecret()
    {
        return (string) $this->consumerSecret;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->consumerSecret;
    }
}
