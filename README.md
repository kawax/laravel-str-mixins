# Laravel Str mixins

[![Build Status](https://travis-ci.com/kawax/laravel-str-mixins.svg?branch=master)](https://travis-ci.com/kawax/laravel-str-mixins)
[![Maintainability](https://api.codeclimate.com/v1/badges/7385d9bdf46e14412d33/maintainability)](https://codeclimate.com/github/kawax/laravel-str-mixins/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/7385d9bdf46e14412d33/test_coverage)](https://codeclimate.com/github/kawax/laravel-str-mixins/test_coverage)

`Illuminate\Support\Str`を拡張する主に日本語用のmixin

## Requirements
- PHP >= 8.1
- Laravel >= 10.0

## Versioning
- 基本的にはセマンティックバージョニング。
- サポート期間はPHP本体やLaravelと同じなのでサポート終了した旧バージョンは`+0.1`のバージョンアップで躊躇なく切っていく。
- 旧メジャーバージョンは別ブランチで残す。

| ver                                                         | PHP  | Laravel |
|-------------------------------------------------------------|------|---------|
| [1.x](https://github.com/kawax/laravel-str-mixins/tree/1.x) | ^7.2 | 6       |
| 2.x                                                         | ^8.1 | 10/11   |

- v1.xはLaravel6のみ。
- v2.xはFluent StringsのためにLaravel7以上のみ対応。

## Installation
```shell
composer require revolution/laravel-str-mixins
```

### Uninstall
```shell
composer remove revolution/laravel-str-mixins
```

## Str

### Str::textwrap(string $str, int $width = 10, string $break = PHP_EOL): string
指定の文字数で改行。単純に改行なので禁則処理などはない。

```php
$text = Str::textwrap(str: 'abcde', width: 3);

// abc
// de
```

元々はOGP画像の幅に収めるための強引な改行が目的。

Laravel 10.19.0で同名の`Str::wordWrap()`が追加されたので`textwrap`に変更。動作が違うので削除せず残し。`Str::wordWrap()`は日本語では期待した動作にならない。

### Str::kana(string $str, string $option = 'KV', string $encoding = 'UTF-8'): string
`mb_convert_kana()`と同じ。

```php
$text = Str::kana(str: 'abｃあいうｱｲｳ', option: 'KVa');

// abcあいうアイウ
```

### Str::truncate(string $str, int $limit = 100, string $end = '...'): string
`Str::limit()`は半角は1、全角は2でカウントされて切り捨て。マルチバイト関数を使っているけど文字の幅でカウントしている。

```php
$text = Str::limit('abcあいうえお', 7);

// abcあい...
```

日本語だと期待した動作ではないので文字数でカウントして切り捨てる`Str::truncate()`

```php
$text = Str::truncate(str: 'abcあいうえお', limit: 7);

// abcあいうえ...
```

## Fluent Strings

### textwrap(int $width = 10, string $break = PHP_EOL): Stringable

```php
$text = Str::of('abcde')->textwrap(width: 3)->value();

// abc
// de
```

### kana(string $option = 'KV', string $encoding = 'UTF-8'): Stringable

```php
$text = Str::of('abｃあいうｱｲｳ')->kana(option: 'KVa')->value();

// abcあいうアイウ
```

繋げて使う用。

```php
$text = Str::of('abｃあいうｱｲｳ')->kana(option: 'KVa')->textwrap(3)->value();

// abc
// あいう
// アイウ
```

### truncate(int $limit = 100, string $end = '...'): Stringable
```php
$text = Str::of('abcあいうえお')->truncate(limit: 6, end: '___')->value();

// abcあいう___
```

## LICENSE
MIT  
