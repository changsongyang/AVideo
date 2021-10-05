<?php
// This file was auto-generated from sdk-root/src/data/kinesis-video-signaling/2019-12-04/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Kinesis Video Streams Signaling Service is a intermediate service that establishes a communication channel for discovering peers, transmitting offers and answers in order to establish peer-to-peer connection in webRTC technology.</p>', 'operations' => [ 'GetIceServerConfig' => '<p>Gets the Interactive Connectivity Establishment (ICE) server configuration information, including URIs, username, and password which can be used to configure the WebRTC connection. The ICE component uses this configuration information to setup the WebRTC connection, including authenticating with the Traversal Using Relays around NAT (TURN) relay server. </p> <p>TURN is a protocol that is used to improve the connectivity of peer-to-peer applications. By providing a cloud-based relay service, TURN ensures that a connection can be established even when one or more peers are incapable of a direct peer-to-peer connection. For more information, see <a href="https://tools.ietf.org/html/draft-uberti-rtcweb-turn-rest-00">A REST API For Access To TURN Services</a>.</p> <p> You can invoke this API to establish a fallback mechanism in case either of the peers is unable to establish a direct peer-to-peer connection over a signaling channel. You must specify either a signaling channel ARN or the client ID in order to invoke this API.</p>', 'SendAlexaOfferToMaster' => '<p>This API allows you to connect WebRTC-enabled devices with Alexa display devices. When invoked, it sends the Alexa Session Description Protocol (SDP) offer to the master peer. The offer is delivered as soon as the master is connected to the specified signaling channel. This API returns the SDP answer from the connected master. If the master is not connected to the signaling channel, redelivery requests are made until the message expires.</p>', ], 'shapes' => [ 'Answer' => [ 'base' => NULL, 'refs' => [ 'SendAlexaOfferToMasterResponse$Answer' => '<p>The base64-encoded SDP answer content.</p>', ], ], 'ClientId' => [ 'base' => NULL, 'refs' => [ 'GetIceServerConfigRequest$ClientId' => '<p>Unique identifier for the viewer. Must be unique within the signaling channel.</p>', 'SendAlexaOfferToMasterRequest$SenderClientId' => '<p>The unique identifier for the sender client.</p>', ], ], 'ClientLimitExceededException' => [ 'base' => '<p>Your request was throttled because you have exceeded the limit of allowed client calls. Try making the call later.</p>', 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'ClientLimitExceededException$Message' => NULL, 'InvalidArgumentException$Message' => NULL, 'NotAuthorizedException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, ], ], 'GetIceServerConfigRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetIceServerConfigResponse' => [ 'base' => NULL, 'refs' => [], ], 'IceServer' => [ 'base' => '<p>A structure for the ICE server connection data.</p>', 'refs' => [ 'IceServerList$member' => NULL, ], ], 'IceServerList' => [ 'base' => NULL, 'refs' => [ 'GetIceServerConfigResponse$IceServerList' => '<p>The list of ICE server information objects.</p>', ], ], 'InvalidArgumentException' => [ 'base' => '<p>The value for this input parameter is invalid.</p>', 'refs' => [], ], 'InvalidClientException' => [ 'base' => '<p>The specified client is invalid.</p>', 'refs' => [], ], 'MessagePayload' => [ 'base' => NULL, 'refs' => [ 'SendAlexaOfferToMasterRequest$MessagePayload' => '<p>The base64-encoded SDP offer content.</p>', ], ], 'NotAuthorizedException' => [ 'base' => '<p>The caller is not authorized to perform this operation.</p>', 'refs' => [], ], 'Password' => [ 'base' => NULL, 'refs' => [ 'IceServer$Password' => '<p>A password to login to the ICE server.</p>', ], ], 'ResourceARN' => [ 'base' => NULL, 'refs' => [ 'GetIceServerConfigRequest$ChannelARN' => '<p>The ARN of the signaling channel to be used for the peer-to-peer connection between configured peers. </p>', 'SendAlexaOfferToMasterRequest$ChannelARN' => '<p>The ARN of the signaling channel by which Alexa and the master peer communicate.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource is not found.</p>', 'refs' => [], ], 'SendAlexaOfferToMasterRequest' => [ 'base' => NULL, 'refs' => [], ], 'SendAlexaOfferToMasterResponse' => [ 'base' => NULL, 'refs' => [], ], 'Service' => [ 'base' => NULL, 'refs' => [ 'GetIceServerConfigRequest$Service' => '<p>Specifies the desired service. Currently, <code>TURN</code> is the only valid value.</p>', ], ], 'SessionExpiredException' => [ 'base' => '<p>If the client session is expired. Once the client is connected, the session is valid for 45 minutes. Client should reconnect to the channel to continue sending/receiving messages.</p>', 'refs' => [], ], 'Ttl' => [ 'base' => NULL, 'refs' => [ 'IceServer$Ttl' => '<p>The period of time, in seconds, during which the username and password are valid.</p>', ], ], 'Uri' => [ 'base' => NULL, 'refs' => [ 'Uris$member' => NULL, ], ], 'Uris' => [ 'base' => NULL, 'refs' => [ 'IceServer$Uris' => '<p>An array of URIs, in the form specified in the <a href="https://tools.ietf.org/html/draft-petithuguenin-behave-turn-uris-03">I-D.petithuguenin-behave-turn-uris</a> spec. These URIs provide the different addresses and/or protocols that can be used to reach the TURN server.</p>', ], ], 'Username' => [ 'base' => NULL, 'refs' => [ 'GetIceServerConfigRequest$Username' => '<p>An optional user ID to be associated with the credentials.</p>', 'IceServer$Username' => '<p>A username to login to the ICE server.</p>', ], ], 'errorMessage' => [ 'base' => NULL, 'refs' => [ 'InvalidClientException$message' => NULL, 'SessionExpiredException$message' => NULL, ], ], ],];
