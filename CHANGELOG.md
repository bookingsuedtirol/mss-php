# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

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

- Backport every [v1.x](https://github.com/HGV/mss-php/tree/v1.x) feature update, including the following methods:
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
- Minimum supported PHP Version increased to `7.1`.
