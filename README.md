# Laravel Str mixins

[![Build Status](https://travis-ci.com/kawax/laravel-str-mixins.svg?branch=master)](https://travis-ci.com/kawax/laravel-str-mixins)
[![Maintainability](https://api.codeclimate.com/v1/badges/7385d9bdf46e14412d33/maintainability)](https://codeclimate.com/github/kawax/laravel-str-mixins/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/7385d9bdf46e14412d33/test_coverage)](https://codeclimate.com/github/kawax/laravel-str-mixins/test_coverage)

`Illuminate\Support\Str`を拡張する主に日本語用のmixin

## Requirements
- PHP >= 7.3
- Laravel >= 7.0

## Versioning
- 基本的にはセマンティックバージョニング。
- サポート期間はPHP本体やLaravelと同じなのでサポート終了した旧バージョンは`+0.1`のバージョンアップで躊躇なく切っていく。
- 旧メジャーバージョンは別ブランチで残す。

|ver|PHP|Laravel|
|---|---|-------|
|[1.x](https://github.com/kawax/laravel-str-mixins/tree/1.x)|^7.2|6  |
|2.x|^7.2|7/8  |

- v1.xはLaravel6のみ。
- v2.xはFluent StringsのためにLaravel7以上のみ対応。

## Installation
```
composer require revolution/laravel-str-mixins
```

## Str

### Str::wordwrap(?string $str, int $width = 10, string $break = PHP_EOL)
指定の文字数で改行。単純に改行なので禁則処理などはない。

```php
$text = Str::wordwrap('abcde', 3);

// abc
// de
```

元々はOGP画像の幅に収めるための強引な改行が目的。

### Str::kana(?string $str, string $option = 'KV', string $encoding = null)
`mb_convert_kana()`と同じ。

```php
$text = Str::kana('abｃあいうｱｲｳ', 'KVa');

// abcあいうアイウ
```

## Fluent Strings

### wordwrap()

```php
$text = Str::of('abcde')->wordwrap(3);

// abc
// de
```

### kana()

```php
$text = Str::of('abｃあいうｱｲｳ')->kana('KVa');

// abcあいうアイウ
```

繋げて使う用。

```php
$text = Str::of('abｃあいうｱｲｳ')->kana('KVa')->wordwrap(3);

// abc
// あいう
// アイウ
```

## LICENSE
MIT  
