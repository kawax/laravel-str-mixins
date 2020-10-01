# Laravel Str mixins

`Illuminate\Support\Str`を拡張する主に日本語用のmixin

## Requirements
- PHP >= 7.3
- Laravel >= 8.0

## Installation
```
composer require revolution/laravel-str-mixins
```

## Str

### Str::wordwrap(string $str, int $width = 10, string $break = PHP_EOL)
指定の文字数で改行。単純に改行なので禁則処理などはない。

```
$text = Str::wordwrap('abcde', 3);

// abc
// de
```

### Str::kana(?string $str, string $option = 'KV', string $encoding = null)
`mb_convert_kana()`と同じ。

```
$text = Str::kana('abｃあいうｱｲｳ', 'KVa');

// abcあいうアイウ
```

## Fluent Strings

### wordwrap()

```
$text = Str::of('abcde')->wordwrap(3);

// abc
// de
```

### kana()

```
$text = Str::of('abｃあいうｱｲｳ')->kana('KVa');

// abcあいうアイウ
```

## LICENSE
MIT  
