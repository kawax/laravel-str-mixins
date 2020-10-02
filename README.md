# Laravel Str mixins

[![Build Status](https://travis-ci.com/kawax/laravel-str-mixins.svg?branch=master)](https://travis-ci.com/kawax/laravel-str-mixins)
[![Maintainability](https://api.codeclimate.com/v1/badges/7385d9bdf46e14412d33/maintainability)](https://codeclimate.com/github/kawax/laravel-str-mixins/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/7385d9bdf46e14412d33/test_coverage)](https://codeclimate.com/github/kawax/laravel-str-mixins/test_coverage)

`Illuminate\Support\Str`を拡張する主に日本語用のmixin

## Requirements
- PHP >= 7.4
- Laravel >= 6.0

## Versioning
- 基本的にはセマンティックバージョニング。
- サポート期間はPHP本体やLaravelと同じなのでサポート終了した旧バージョンは`+0.1`のバージョンアップで躊躇なく切っていく。
- 旧メジャーバージョンは別ブランチで残す。

|ver|PHP|Laravel|
|---|---|-------|
|1.x|^7.4|^6.0  |
|2.x|^7.3|^7.0  |

- v1.xはLaravel6のみ。
- v2.xはFluent StringsのためにLaravel7以上のみ対応。

## Installation
```
composer require revolution/laravel-str-mixins:^1.0
```

## Str

### Str::wordwrap(?string $str, int $width = 10, string $break = PHP_EOL)
指定の文字数で改行。単純に改行なので禁則処理などはない。

```php
$text = Str::wordwrap('abcde', 3);

// abc
// de
```

### Str::kana(?string $str, string $option = 'KV', string $encoding = null)
`mb_convert_kana()`と同じ。

```php
$text = Str::kana('abｃあいうｱｲｳ', 'KVa');

// abcあいうアイウ
```

## LICENSE
MIT  
