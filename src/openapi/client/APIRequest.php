<?php

namespace com\alibaba\openapi\client;

class APIRequest{

	/**
	 *
	 * @var APIId
	 */
	var $apiId;

	/**
	 *
	 * @var
	 */
	var $addtionalParams = array();

	/**
	 *
	 * @var
	 */
	var $requestEntity;

	/**
	 *
	 * @var
	 */
	var $attachments=array();

	/**
	 *
	 * @var String
	 */
	var $authCodeKey;

	/**
	 *
	 * @var String
	 */
	var $accessToken;

	/**
	 *
	 * @var AuthorizationToken
	 */
	var $authToken;
}
