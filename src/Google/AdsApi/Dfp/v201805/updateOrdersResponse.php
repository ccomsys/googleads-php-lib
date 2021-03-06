<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateOrdersResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\Order[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\Order[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\Order[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\Order[] $rval
     * @return \Google\AdsApi\Dfp\v201805\updateOrdersResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
