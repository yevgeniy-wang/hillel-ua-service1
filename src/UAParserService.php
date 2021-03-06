<?php


namespace Hillel\UserAgentService1;

use UAParser\Parser;
use Hillel\UserAgentInterface\UserAgentServiceInterface;

class UAParserService implements UserAgentServiceInterface
{
    protected $data;
    protected $parser;

    public function __construct()
    {
        $this->parser = Parser::create();
    }

    public function parse($ua)
    {
        $this->data = $this->parser->parse($ua);
    }

    public function browser()
    {
        return $this->data->ua->family;
    }

    public function os()
    {
        return $this->data->os->family;
    }
}
