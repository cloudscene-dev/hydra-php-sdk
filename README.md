# OpenAPIClient-php
Welcome to the ORY Hydra HTTP API documentation. You will find documentation for all HTTP APIs here.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: latest
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_challenge = 'consent_challenge_example'; // string | 
$body = new \OpenAPI\Client\Model\AcceptConsentRequest(); // \OpenAPI\Client\Model\AcceptConsentRequest | 

try {
    $result = $apiInstance->acceptConsentRequest($consent_challenge, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->acceptConsentRequest: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**acceptConsentRequest**](docs/Api/AdminApi.md#acceptconsentrequest) | **PUT** /oauth2/auth/requests/consent/accept | Accept an consent request
*AdminApi* | [**acceptLoginRequest**](docs/Api/AdminApi.md#acceptloginrequest) | **PUT** /oauth2/auth/requests/login/accept | Accept an login request
*AdminApi* | [**acceptLogoutRequest**](docs/Api/AdminApi.md#acceptlogoutrequest) | **PUT** /oauth2/auth/requests/logout/accept | Accept a logout request
*AdminApi* | [**createJsonWebKeySet**](docs/Api/AdminApi.md#createjsonwebkeyset) | **POST** /keys/{set} | Generate a new JSON Web Key
*AdminApi* | [**createOAuth2Client**](docs/Api/AdminApi.md#createoauth2client) | **POST** /clients | Create an OAuth 2.0 client
*AdminApi* | [**deleteJsonWebKey**](docs/Api/AdminApi.md#deletejsonwebkey) | **DELETE** /keys/{set}/{kid} | Delete a JSON Web Key
*AdminApi* | [**deleteJsonWebKeySet**](docs/Api/AdminApi.md#deletejsonwebkeyset) | **DELETE** /keys/{set} | Delete a JSON Web Key Set
*AdminApi* | [**deleteOAuth2Client**](docs/Api/AdminApi.md#deleteoauth2client) | **DELETE** /clients/{id} | Deletes an OAuth 2.0 Client
*AdminApi* | [**flushInactiveOAuth2Tokens**](docs/Api/AdminApi.md#flushinactiveoauth2tokens) | **POST** /oauth2/flush | Flush Expired OAuth2 Access Tokens
*AdminApi* | [**getConsentRequest**](docs/Api/AdminApi.md#getconsentrequest) | **GET** /oauth2/auth/requests/consent | Get consent request information
*AdminApi* | [**getJsonWebKey**](docs/Api/AdminApi.md#getjsonwebkey) | **GET** /keys/{set}/{kid} | Fetch a JSON Web Key
*AdminApi* | [**getJsonWebKeySet**](docs/Api/AdminApi.md#getjsonwebkeyset) | **GET** /keys/{set} | Retrieve a JSON Web Key Set
*AdminApi* | [**getLoginRequest**](docs/Api/AdminApi.md#getloginrequest) | **GET** /oauth2/auth/requests/login | Get an login request
*AdminApi* | [**getLogoutRequest**](docs/Api/AdminApi.md#getlogoutrequest) | **GET** /oauth2/auth/requests/logout | Get a logout request
*AdminApi* | [**getOAuth2Client**](docs/Api/AdminApi.md#getoauth2client) | **GET** /clients/{id} | Get an OAuth 2.0 Client.
*AdminApi* | [**introspectOAuth2Token**](docs/Api/AdminApi.md#introspectoauth2token) | **POST** /oauth2/introspect | Introspect OAuth2 tokens
*AdminApi* | [**listOAuth2Clients**](docs/Api/AdminApi.md#listoauth2clients) | **GET** /clients | List OAuth 2.0 Clients
*AdminApi* | [**listSubjectConsentSessions**](docs/Api/AdminApi.md#listsubjectconsentsessions) | **GET** /oauth2/auth/sessions/consent | Lists all consent sessions of a subject
*AdminApi* | [**rejectConsentRequest**](docs/Api/AdminApi.md#rejectconsentrequest) | **PUT** /oauth2/auth/requests/consent/reject | Reject an consent request
*AdminApi* | [**rejectLoginRequest**](docs/Api/AdminApi.md#rejectloginrequest) | **PUT** /oauth2/auth/requests/login/reject | Reject a login request
*AdminApi* | [**rejectLogoutRequest**](docs/Api/AdminApi.md#rejectlogoutrequest) | **PUT** /oauth2/auth/requests/logout/reject | Reject a logout request
*AdminApi* | [**revokeAuthenticationSession**](docs/Api/AdminApi.md#revokeauthenticationsession) | **DELETE** /oauth2/auth/sessions/login | Invalidates all login sessions of a certain user Invalidates a subject&#39;s authentication session
*AdminApi* | [**revokeConsentSessions**](docs/Api/AdminApi.md#revokeconsentsessions) | **DELETE** /oauth2/auth/sessions/consent | Revokes consent sessions of a subject for a specific OAuth 2.0 Client
*AdminApi* | [**updateJsonWebKey**](docs/Api/AdminApi.md#updatejsonwebkey) | **PUT** /keys/{set}/{kid} | Update a JSON Web Key
*AdminApi* | [**updateJsonWebKeySet**](docs/Api/AdminApi.md#updatejsonwebkeyset) | **PUT** /keys/{set} | Update a JSON Web Key Set
*AdminApi* | [**updateOAuth2Client**](docs/Api/AdminApi.md#updateoauth2client) | **PUT** /clients/{id} | Update an OAuth 2.0 Client
*HealthApi* | [**isInstanceAlive**](docs/Api/HealthApi.md#isinstancealive) | **GET** /health/alive | Check alive status
*HealthApi* | [**isInstanceReady**](docs/Api/HealthApi.md#isinstanceready) | **GET** /health/ready | Check readiness status
*PublicApi* | [**disconnectUser**](docs/Api/PublicApi.md#disconnectuser) | **GET** /oauth2/sessions/logout | OpenID Connect Front-Backchannel enabled Logout
*PublicApi* | [**discoverOpenIDConfiguration**](docs/Api/PublicApi.md#discoveropenidconfiguration) | **GET** /.well-known/openid-configuration | OpenID Connect Discovery
*PublicApi* | [**oauth2Token**](docs/Api/PublicApi.md#oauth2token) | **POST** /oauth2/token | The OAuth 2.0 token endpoint
*PublicApi* | [**oauthAuth**](docs/Api/PublicApi.md#oauthauth) | **GET** /oauth2/auth | The OAuth 2.0 authorize endpoint
*PublicApi* | [**revokeOAuth2Token**](docs/Api/PublicApi.md#revokeoauth2token) | **POST** /oauth2/revoke | Revoke OAuth2 tokens
*PublicApi* | [**userinfo**](docs/Api/PublicApi.md#userinfo) | **GET** /userinfo | OpenID Connect Userinfo
*PublicApi* | [**wellKnown**](docs/Api/PublicApi.md#wellknown) | **GET** /.well-known/jwks.json | JSON Web Keys Discovery
*VersionApi* | [**getVersion**](docs/Api/VersionApi.md#getversion) | **GET** /version | Get service version


## Documentation For Models

 - [AcceptConsentRequest](docs/Model/AcceptConsentRequest.md)
 - [AcceptLoginRequest](docs/Model/AcceptLoginRequest.md)
 - [CompletedRequest](docs/Model/CompletedRequest.md)
 - [ConsentRequest](docs/Model/ConsentRequest.md)
 - [ConsentRequestSession](docs/Model/ConsentRequestSession.md)
 - [FlushInactiveOAuth2TokensRequest](docs/Model/FlushInactiveOAuth2TokensRequest.md)
 - [GenericError](docs/Model/GenericError.md)
 - [HealthNotReadyStatus](docs/Model/HealthNotReadyStatus.md)
 - [HealthStatus](docs/Model/HealthStatus.md)
 - [JSONWebKey](docs/Model/JSONWebKey.md)
 - [JSONWebKeySet](docs/Model/JSONWebKeySet.md)
 - [JsonWebKeySetGeneratorRequest](docs/Model/JsonWebKeySetGeneratorRequest.md)
 - [LoginRequest](docs/Model/LoginRequest.md)
 - [LogoutRequest](docs/Model/LogoutRequest.md)
 - [OAuth2Client](docs/Model/OAuth2Client.md)
 - [OAuth2TokenIntrospection](docs/Model/OAuth2TokenIntrospection.md)
 - [Oauth2TokenResponse](docs/Model/Oauth2TokenResponse.md)
 - [OauthTokenResponse](docs/Model/OauthTokenResponse.md)
 - [OpenIDConnectContext](docs/Model/OpenIDConnectContext.md)
 - [PreviousConsentSession](docs/Model/PreviousConsentSession.md)
 - [RejectRequest](docs/Model/RejectRequest.md)
 - [SwaggerFlushInactiveAccessTokens](docs/Model/SwaggerFlushInactiveAccessTokens.md)
 - [SwaggerJsonWebKeyQuery](docs/Model/SwaggerJsonWebKeyQuery.md)
 - [SwaggerJwkCreateSet](docs/Model/SwaggerJwkCreateSet.md)
 - [SwaggerJwkSetQuery](docs/Model/SwaggerJwkSetQuery.md)
 - [SwaggerJwkUpdateSet](docs/Model/SwaggerJwkUpdateSet.md)
 - [SwaggerJwkUpdateSetKey](docs/Model/SwaggerJwkUpdateSetKey.md)
 - [SwaggerOAuthIntrospectionRequest](docs/Model/SwaggerOAuthIntrospectionRequest.md)
 - [SwaggerRevokeOAuth2TokenParameters](docs/Model/SwaggerRevokeOAuth2TokenParameters.md)
 - [Swaggeroauth2TokenParameters](docs/Model/Swaggeroauth2TokenParameters.md)
 - [UserinfoResponse](docs/Model/UserinfoResponse.md)
 - [Version](docs/Model/Version.md)
 - [WellKnown](docs/Model/WellKnown.md)


## Documentation For Authorization


## basic

- **Type**: HTTP basic authentication


## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: /oauth2/auth
- **Scopes**: 
- **offline**: A scope required when requesting refresh tokens
- **openid**: Request an OpenID Connect ID Token


## Author




