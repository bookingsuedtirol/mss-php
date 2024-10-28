# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [6.3.0] - 2024-10-28

### Changed

- Update jms/serializer to v3.29.1

## [6.2.0] - 2024-10-28

### Changed

- Update dependencies
- Rewrite picture URLs to https://cdn.easychannel.it/…

## [6.1.0] - 2024-10-16

- Add CIN (Codice Identificativo Nazionale) which MSS now returns

## [6.0.0] - 2024-07-30

## Changed

- Move package to `bookingsuedtirol` namespace

## [5.0.1] - 2024-01-10

### Fixed

- Fix changelog heading level
- Adjust PHP version requirement in composer.json

## [5.0.0] - 2024-01-10

### Changed

- Drop support for PHP < 8.1
- Update dependencies

## [4.0.0] - 2022-10-06

### Removed

- Remove the `getSeoTexts` method (which has been removed from MSS).

## [3.4.0] - 2022-05-31

### Added

- Add `check_restrictions` property to `Schema\Request\Options`

## [3.3.0] - 2022-03-21

### Added

- Add `typ` property to `Schema\Request\SearchAvailability`

## [3.2.0] - 2021-09-27

### Added

- Add `informal_mail` property to `Schema\Response\Hotel`

## [3.1.1] - 2021-05-13

### Fixed

- Use easychannel.it, not www.easychannel.it

## [3.1.0] - 2021-05-13

### Added

- Add getHotelList example

### Changed

- Change MSS call URL from https://www.easymailing.eu/mss/mss_service.php to https://www.easychannel.it/mss/mss_service.php
- Change images domain from www.bookingsuedtirol.com to www.easychannel.it

### Fixed

- Fix test case whitespace

## [3.0.0] - 2021-05-11

### Added

- Automated tests with phpunit
- Compatibility with PHP 8.0

### Fixed

- **BREAKING**: All type annotations which use double/float are now always `float` in the output array instead of `int`.

### Changed

- **BREAKING**: Minimum supported PHP version increased to `7.2`.
- Update `jms/serializer` to v3
- Refactor custom date handler
- Remove the conversion to JSON and transform the deserializer output directly into an array.
- Update the development Dockerfile to PHP 8.0 and apply and fix the mounted volume permission issues.

## [2.4.1] - 2021-02-17

### Fixed

- Trim whitespace in descriptions

## [2.4.0] - 2021-02-12

### Added

- Add the follwing properties to `Schema\Response\Hotel`
  - `available_from`
  - `prices_changed_at`
  - `availability_changed_at`
  - `bookable_until`

## [2.3.0] - 2021-02-09

### Added

- Add new `arrival`, `departure` properties to `Schema\Request\Search`.

## [2.2.1] - 2021-02-01

### Fixed

- Fix a warning message in previous release.

## [2.2.0] - 2021-01-29

### Added

- Add `result_id` property to `Schema\Request\Header`.

## [2.1.2] - 2021-01-28

### Fixed

- Fix a bug where `MssException` returned 2xx status codes in the `Response` object.
- Fix a bug where `MssException@getCode()` returned the HTTP status code instead of the [Mss Error Code](https://github.com/bookingsuedtirol/mss-php/blob/992225d2ccbaa144464a80572075c29f3d7a470d/src/Bitmask/ErrorCodes.php).

## [2.1.1] - 2021-01-19

### Fixed

- Change distance type from integer to double.

## [2.1.0] - 2020-12-18

### Added

- Add dimension properties to `Schema\Response\Picture`.

## [2.0.0] - 2020-11-05

### Added

- Add coupon service data to hotel response.

## [2.0.0-beta.3] - 2020-10-28

### Added

- Add missing coupon request/response properties in `prepareBooking` method.

### Changed

- Change `Schema\Request\SearchHotel@type` to an array of integers.

## [2.0.0-beta.2] - 2020-10-27

### Added

- Backport every [v1.x](https://github.com/bookingsuedtirol/mss-php/tree/v1.x) feature update, including the following methods:
  - `getMasterpackagesList`
  - `getThemeList`
  - `validateCoupon`
  - `getSeoTexts`

### Changed

- Replace unsafe `getenv` calls with `$_ENV`.

### Fixed

- Fix a bug with gzip encoded content.

## [2.0.0-beta.1] - 2020-05-26

### Changed

- Replace `guzzlehttp/guzzle` with any `PSR-18` compatible http-client.
- `MssException` inherits from `Http\Client\Exception\HttpException` instead of `GuzzleHttp\Exception\ServerException`.
- Minimum supported PHP version increased to `7.1`.
