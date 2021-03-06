<?php


namespace NicklasW\PkmGoApi\Authenticators\GoogleOauth\Parsers\Results;

class AuthenticationCodeResult {

    /**
     * @var The parsed data
     */
    protected $data;

    /**
     * Result constructor.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return The parsed data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param The parsed data $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Returns the code.
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->data['code'];
    }

}