<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2/service.proto

namespace Google\Apps\Meet\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to get a participant.
 *
 * Generated from protobuf message <code>google.apps.meet.v2.GetParticipantRequest</code>
 */
class GetParticipantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the participant.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the participant. Please see
     *                     {@see ConferenceRecordsServiceClient::participantName()} for help formatting this field.
     *
     * @return \Google\Apps\Meet\V2\GetParticipantRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the participant.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the participant.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the participant.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
