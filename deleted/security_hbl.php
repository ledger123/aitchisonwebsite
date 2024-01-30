<?php

define ('HMAC_SHA256', 'sha256');
//define ('SECRET_KEY', '81e426397fd544cbb58e34e8374a31f1e6eb062e6fc743de9cae5b754ef96a51f4901029207440db954317dac0086afc83d42696e342425ea8574ffa382454440285f843f9a846d79809b1cd6adb0010ca1c6a88d80e470f806a6a5c4c19b4b610396453c382426287f4e15dc7c55158c0a719fc4a1a4d36bcdbbceaefdebd99');
define ('SECRET_KEY', '73d2c2030c554396bb849c5ef60f78359e5e2e9daa384deeb1cd3761a4b632d624d422100ef94b3e9245fd691dbd17a9366b120a66e64d16aaa29def47feeea11bad4e1a50e34e8d8437b3abc56b228588ef2430a3654c249a7ba36dddce6e3472fcaaf3c3074d6db2535b2718f4900cddf42d8118a341228b208feda0faef8b');
function sign ($params) {
  return signData(buildDataToSign($params), SECRET_KEY);
}

function signData($data, $secretKey) {
    return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
}

function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
}

function commaSeparate ($dataToSign) {
    return implode(",",$dataToSign);
}

?>
