<?php

namespace com\alibaba\openapi\client;


class APIResponse {

	/**
	 * status code
	 *
	 * @var int
	 */
	var $statusCode;

	/**
	 * result of api, the type base on the calling API defination.
	 *
	 * @var
	 */
	var $result;

	/**
	 * exception if there are some error when calling API.
	 *
	 * @var
	 */
	var $exception;

	/**
	 * respponse charset
	 *
	 * @var String
	 */
	var $charset = "UTF-8";

	/**
	 * response encoding
	 *
	 * @var String
	 */
	var $encoding;

	/**
	 * the response wrapper, maybe API return addtional information(e.g.
	 * calling cost time), the wrapper include those information.
	 *
	 * @var
	 */
	var $responseWrapper;
}
