<?php

namespace com\alibaba\openapi\client\serialize;

use com\alibaba\openapi\client\policy\DataProtocol;


class SerializerProvider {
	private static $serializerStore = array ();
	private static $deSerializerStore = array ();
	private static $isInited = false;

	private static function initial() {
		SerializerProvider::$serializerStore[DataProtocol::param2] = new Param2RequestSerializer();
		SerializerProvider::$deSerializerStore[DataProtocol::json2] = new Json2Deserializer();
		SerializerProvider::$deSerializerStore[DataProtocol::param2] = new Json2Deserializer();
		$isInited = true;
	}

	static function getSerializer($key) {
		if (! SerializerProvider::$isInited) {
			SerializerProvider::initial ();
		}
		return SerializerProvider::$serializerStore[$key];
	}

	static function getDeSerializer($key) {
		if (! SerializerProvider::$isInited) {
			SerializerProvider::initial ();
		}
		return SerializerProvider::$deSerializerStore[$key];
	}
}
