<?php
namespace com\alibaba\openapi\client\serialize;

use com\alibaba\openapi\client\exception\OceanException;
use com\alibaba\openapi\client\policy\DataProtocol;


class Json2Deserializer implements DeSerializer {

    /**
     * @return string
     */
	public function supportedContentType() {
		return DataProtocol::json2;
	}

	/**
	 * @param $deSerializer
	 * @param $resultDefinition
	 * @param null $charSet
	 * @return mixed
	 */
	public function deSerialize($deSerializer, $resultDefinition, $charSet = null) {
		$stdResult = json_decode ( $deSerializer );
		$resultDefinition->setStdResult ( $stdResult );
		return $resultDefinition;
	}

	/**
	 * @param $deSerializer
	 * @param $resultType
	 * @param null $charSet
	 * @return OceanException
	 */
	public function buildException($deSerializer, $resultType, $charSet = null) {
		$exceptionStdResult = json_decode ( $deSerializer );
		$errorCode = $exceptionStdResult->{"error_code"};
		$errorMessage = $exceptionStdResult->{"error_message"};

		$oceanException = new OceanException ( $errorMessage );
		$oceanException->setErrorCode ( $errorCode );
		return $oceanException;
	}
}
