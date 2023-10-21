<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

if (! function_exists('array_add')) {
    /**
     * Add an element to an array using "dot" notation if it doesn't exist.
     *
     * @param  array  $array
     * @param  string  $key
     * @param  mixed  $value
     * @return array
     */
    function array_add($array, $key, $value)
    {
        return Arr::add($array, $key, $value);
    }
}

if (! function_exists('array_collapse')) {
    /**
     * Collapse an array of arrays into a single array.
     *
     * @param  array  $array
     * @return array
     */
    function array_collapse($array)
    {
        return Arr::collapse($array);
    }
}

if (! function_exists('array_divide')) {
    /**
     * Divide an array into two arrays. One with keys and the other with values.
     *
     * @param  array  $array
     * @return array
     */
    function array_divide($array)
    {
        return Arr::divide($array);
    }
}

if (! function_exists('array_dot')) {
    /**
     * Flatten a multi-dimensional associative array with dots.
     *
     * @param  array  $array
     * @param  string  $prepend
     * @return array
     */
    function array_dot($array, $prepend = '')
    {
        return Arr::dot($array, $prepend);
    }
}

if (! function_exists('array_except')) {
    /**
     * Get all of the given array except for a specified array of keys.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function array_except($array, $keys)
    {
        return Arr::except($array, $keys);
    }
}

if (! function_exists('array_first')) {
    /**
     * Return the first element in an array passing a given truth test.
     *
     * @param  array  $array
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    function array_first($array, callable $callback = null, $default = null)
    {
        return Arr::first($array, $callback, $default);
    }
}

if (! function_exists('array_flatten')) {
    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @param  array  $array
     * @param  int  $depth
     * @return array
     */
    function array_flatten($array, $depth = INF)
    {
        return Arr::flatten($array, $depth);
    }
}

if (! function_exists('array_forget')) {
    /**
     * Remove one or many array items from a given array using "dot" notation.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return void
     */
    function array_forget(&$array, $keys)
    {
        Arr::forget($array, $keys);
    }
}

if (! function_exists('array_get')) {
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|int  $key
     * @param  mixed  $default
     * @return mixed
     */
    function array_get($array, $key, $default = null)
    {
        return Arr::get($array, $key, $default);
    }
}

if (! function_exists('array_has')) {
    /**
     * Check if an item or items exist in an array using "dot" notation.
     *
     * @param  \ArrayAccess|array  $array
     * @param  string|array  $keys
     * @return bool
     */
    function array_has($array, $keys)
    {
        return Arr::has($array, $keys);
    }
}

if (! function_exists('array_last')) {
    /**
     * Return the last element in an array passing a given truth test.
     *
     * @param  array  $array
     * @param  callable|null  $callback
     * @param  mixed  $default
     * @return mixed
     */
    function array_last($array, callable $callback = null, $default = null)
    {
        return Arr::last($array, $callback, $default);
    }
}

if (! function_exists('array_only')) {
    /**
     * Get a subset of the items from the given array.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function array_only($array, $keys)
    {
        return Arr::only($array, $keys);
    }
}

if (! function_exists('array_pluck')) {
    /**
     * Pluck an array of values from an array.
     *
     * @param  array  $array
     * @param  string|array  $value
     * @param  string|array|null  $key
     * @return array
     */
    function array_pluck($array, $value, $key = null)
    {
        return Arr::pluck($array, $value, $key);
    }
}

if (! function_exists('array_prepend')) {
    /**
     * Push an item onto the beginning of an array.
     *
     * @param  array  $array
     * @param  mixed  $value
     * @param  mixed  $key
     * @return array
     */
    function array_prepend($array, $value, $key = null)
    {
        return Arr::prepend(...func_get_args());
    }
}

if (! function_exists('array_pull')) {
    /**
     * Get a value from the array, and remove it.
     *
     * @param  array  $array
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function array_pull(&$array, $key, $default = null)
    {
        return Arr::pull($array, $key, $default);
    }
}

if (! function_exists('array_random')) {
    /**
     * Get a random value from an array.
     *
     * @param  array  $array
     * @param  int|null  $num
     * @return mixed
     */
    function array_random($array, $num = null)
    {
        return Arr::random($array, $num);
    }
}

if (! function_exists('array_set')) {
    /**
     * Set an array item to a given value using "dot" notation.
     *
     * If no key is given to the method, the entire array will be replaced.
     *
     * @param  array  $array
     * @param  string  $key
     * @param  mixed  $value
     * @return array
     */
    function array_set(&$array, $key, $value)
    {
        return Arr::set($array, $key, $value);
    }
}

if (! function_exists('array_sort')) {
    /**
     * Sort the array by the given callback or attribute name.
     *
     * @param  array  $array
     * @param  callable|string|null  $callback
     * @return array
     */
    function array_sort($array, $callback = null)
    {
        return Arr::sort($array, $callback);
    }
}

if (! function_exists('array_sort_recursive')) {
    /**
     * Recursively sort an array by keys and values.
     *
     * @param  array  $array
     * @return array
     */
    function array_sort_recursive($array)
    {
        return Arr::sortRecursive($array);
    }
}

if (! function_exists('array_where')) {
    /**
     * Filter the array using the given callback.
     *
     * @param  array  $array
     * @param  callable  $callback
     * @return array
     */
    function array_where($array, callable $callback)
    {
        return Arr::where($array, $callback);
    }
}

if (! function_exists('array_wrap')) {
    /**
     * If the given value is not an array, wrap it in one.
     *
     * @param  mixed  $value
     * @return array
     */
    function array_wrap($value)
    {
        return Arr::wrap($value);
    }
}

if (! function_exists('camel_case')) {
    /**
     * Convert a value to camel case.
     *
     * @param  string  $value
     * @return string
     */
    function camel_case($value)
    {
        return Str::camel($value);
    }
}

if (! function_exists('char_at')) {
    /**
     * Get the character at the specified index.
     *
     * @param  string  $subject
     * @param  int  $index
     * @return string|false
     */
    function char_at($subject, $index)
    {
        return Str::charAt($subject, $index);
    }
}

if (! function_exists('ends_with')) {
    /**
     * Determine if a given string ends with a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function ends_with($haystack, $needles)
    {
        return Str::endsWith($haystack, $needles);
    }
}

if (! function_exists('excerpt')) {
    /**
     * Extracts an excerpt from text that matches the first instance of a phrase.
     *
     * @param  string  $text
     * @param  string  $phrase
     * @param  array  $options
     * @return string|null
     */
    function excerpt($text, $phrase = '', $options = [])
    {
        return Str::excerpt($text, $phrase, $options);
    }
}

if (! function_exists('kebab_case')) {
    /**
     * Convert a string to kebab case.
     *
     * @param  string  $value
     * @return string
     */
    function kebab_case($value)
    {
        return Str::kebab($value);
    }
}

if (! function_exists('str_length')) {
    /**
     * Return the length of the given string.
     *
     * @param  string  $value
     * @param  string|null  $encoding
     * @return int
     */
    function str_length($value, $encoding = null)
    {
        return Str::length($value, $encoding);
    }
}

if (! function_exists('snake_case')) {
    /**
     * Convert a string to snake case.
     *
     * @param  string  $value
     * @param  string  $delimiter
     * @return string
     */
    function snake_case($value, $delimiter = '_')
    {
        return Str::snake($value, $delimiter);
    }
}

if (! function_exists('str_squish')) {
    /**
     * Remove all "extra" blank space from the given string.
     *
     * @param  string  $value
     * @return string
     */
    function str_squish($value)
    {
        return Str::squish($value);
    }
}

if (! function_exists('starts_with')) {
    /**
     * Determine if a given string starts with a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function starts_with($haystack, $needles)
    {
        return Str::startsWith($haystack, $needles);
    }
}

if (! function_exists('str_after')) {
    /**
     * Return the remainder of a string after a given value.
     *
     * @param  string  $subject
     * @param  string  $search
     * @return string
     */
    function str_after($subject, $search)
    {
        return Str::after($subject, $search);
    }
}

if (! function_exists('str_after_last')) {
    /**
     * Return the remainder of a string after the last occurrence of a given value.
     *
     * @param  string  $subject
     * @param  string  $search
     * @return string
     */
    function str_after_last($subject, $search)
    {
        return Str::afterLast($subject, $search);
    }
}

if (! function_exists('str_ascii')) {
    /**
     * Transliterate a UTF-8 value to ASCII.
     *
     * @param  string  $value
     * @param  string  $language
     * @return string
     */
    function str_ascii($value, $language = 'en')
    {
        return Str::ascii($value, $language);
    }
}

if (! function_exists('str_transliterate')) {
    /**
     * Transliterate a string to its closest ASCII representation.
     *
     * @param  string  $string
     * @param  string|null  $unknown
     * @param  bool|null  $strict
     * @return string
     */
    function str_transliterate($string, $unknown = '?', $strict = false)
    {
        return Str::transliterate($string, $unknown, $strict);
    }
}

if (! function_exists('str_before')) {
    /**
     * Get the portion of a string before a given value.
     *
     * @param  string  $subject
     * @param  string  $search
     * @return string
     */
    function str_before($subject, $search)
    {
        return Str::before($subject, $search);
    }
}

if (! function_exists('str_before_last')) {
    /**
     * Get the portion of a string before the last occurrence of a given value.
     *
     * @param  string  $subject
     * @param  string  $search
     * @return string
     */
    function str_before_last($subject, $search)
    {
        return Str::beforeLast($subject, $search);
    }
}

if (! function_exists('str_between')) {
    /**
     * Get the portion of a string between two given values.
     *
     * @param  string  $subject
     * @param  string  $from
     * @param  string  $to
     * @return string
     */
    function str_between($subject, $from, $to)
    {
        return Str::between($subject, $from, $to);
    }
}

if (! function_exists('str_between_first')) {
    /**
     * Get the smallest possible portion of a string between two given values.
     *
     * @param  string  $subject
     * @param  string  $from
     * @param  string  $to
     * @return string
     */
    function str_between_first($subject, $from, $to)
    {
        return Str::betweenFirst($subject, $from, $to);
    }
}

if (! function_exists('str_contains')) {
    /**
     * Determine if a given string contains a given substring.
     *
     * @param  string  $haystack
     * @param  string|array  $needles
     * @return bool
     */
    function str_contains($haystack, $needles)
    {
        return Str::contains($haystack, $needles);
    }
}

if (! function_exists('str_contains_all')) {
    /**
     * Determine if a given string contains all array values.
     *
     * @param  string  $haystack
     * @param  iterable<string>  $needles
     * @param  bool  $ignoreCase
     * @return bool
     */
    function str_contains_all($haystack, $needles, $ignoreCase = false)
    {
        return Str::containsAll($haystack, $needles, $ignoreCase);
    }
}

if (! function_exists('str_convert_case')) {
    /**
     * Convert the case of a string.
     *
     * @param  string  $string
     * @param  int  $mode
     * @param  string|null  $encoding
     * @return string
     */
    function str_convert_case(string $string, int $mode = MB_CASE_FOLD, ?string $encoding = 'UTF-8')
    {
        return Str::convertCase($string, $mode, $encoding);
    }
}

if (! function_exists('str_finish')) {
    /**
     * Cap a string with a single instance of a given value.
     *
     * @param  string  $value
     * @param  string  $cap
     * @return string
     */
    function str_finish($value, $cap)
    {
        return Str::finish($value, $cap);
    }
}

if (! function_exists('str_wrap')) {
    /**
     * Wrap the string with the given strings.
     *
     * @param  string  $value
     * @param  string  $before
     * @param  string|null  $after
     * @return string
     */
    function str_wrap($value, $before, $after = null)
    {
        return Str::wrap($value, $before, $after);
    }
}

if (! function_exists('str_is')) {
    /**
     * Determine if a given string matches a given pattern.
     *
     * @param  string|array  $pattern
     * @param  string  $value
     * @return bool
     */
    function str_is($pattern, $value)
    {
        return Str::is($pattern, $value);
    }
}

if (! function_exists('str_limit')) {
    /**
     * Limit the number of characters in a string.
     *
     * @param  string  $value
     * @param  int  $limit
     * @param  string  $end
     * @return string
     */
    function str_limit($value, $limit = 100, $end = '...')
    {
        return Str::limit($value, $limit, $end);
    }
}

if (! function_exists('str_words')) {
    /**
     * Limit the number of words in a string.
     *
     * @param  string  $value
     * @param  int  $words
     * @param  string  $end
     * @return string
     */
    function str_words($value, $words = 100, $end = '...')
    {
        return Str::words($value, $words, $end);
    }
}

if (! function_exists('str_lower')) {
    /**
     * Convert the given string to lower-case.
     *
     * @param  string  $value
     * @return string
     */
    function str_lower($value)
    {
        return Str::lower($value);
    }
}

if (! function_exists('str_is_ascii')) {
    /**
     * Determine if a given string is 7 bit ASCII.
     *
     * @param  string  $value
     * @return bool
     */
    function str_is_ascii($value)
    {
        return Str::isAscii($value);
    }
}

if (! function_exists('str_is_json')) {
    /**
     * Determine if a given value is valid JSON.
     *
     * @param  mixed  $value
     * @return bool
     */
    function str_is_json($value)
    {
        return Str::isJson($value);
    }
}

if (! function_exists('str_is_url')) {
    /**
     * Determine if a given value is a valid URL.
     *
     * @param  mixed  $value
     * @param  array  $protocols
     * @return bool
     */
    function str_is_url($value, array $protocols = [])
    {
        return Str::isUrl($value, $protocols);
    }
}

if (! function_exists('str_is_uuid')) {
    /**
     * Determine if a given value is a valid UUID.
     *
     * @param  mixed  $value
     * @return bool
     */
    function str_is_uuid($value)
    {
        return Str::isUuid($value);
    }
}

if (! function_exists('str_is_ulid')) {
    /**
     * Determine if a given value is a valid ULID.
     *
     * @param  mixed  $value
     * @return bool
     */
    function str_is_ulid($value)
    {
        return Str::isUlid($value);
    }
}

if (! function_exists('str_plural')) {
    /**
     * Get the plural form of an English word.
     *
     * @param  string  $value
     * @param  int  $count
     * @return string
     */
    function str_plural($value, $count = 2)
    {
        return Str::plural($value, $count);
    }
}

if (! function_exists('str_plural_studly')) {
    /**
     * Pluralize the last word of an English, studly caps case string.
     *
     * @param  string  $value
     * @param  int|array|\Countable  $count
     * @return string
     */
    function str_plural_studly($value, $count = 2)
    {
        return Str::pluralStudly($value, $count);
    }
}

if (! function_exists('str_markdown')) {
    /**
     * Converts GitHub flavored Markdown into HTML.
     *
     * @param  string  $string
     * @param  array  $options
     * @return string
     */
    function str_markdown($string, $options = [])
    {
        return Str::markdown($string, $options);
    }
}

if (! function_exists('str_mask')) {
    /**
     * Masks a portion of a string with a repeated character.
     *
     * @param  string  $string
     * @param  string  $character
     * @param  int  $index
     * @param  int|null  $length
     * @param  string  $encoding
     * @return string
     */
    function str_mask($string, $character, $index, $length = null, $encoding = 'UTF-8')
    {
        return Str::mask($string, $character, $index, $length, $encoding);
    }
}

if (! function_exists('str_match')) {
    /**
     * Get the string matching the given pattern.
     *
     * @param  string  $pattern
     * @param  string  $subject
     * @return string
     */
    function str_match($pattern, $subject)
    {
        return Str::match($pattern, $subject);
    }
}

if (! function_exists('str_is_match')) {
    /**
     * Determine if a given string matches a given pattern.
     *
     * @param  string|iterable<string>  $pattern
     * @param  string  $value
     * @return bool
     */
    function str_is_match($pattern, $value)
    {
        return Str::isMatch($pattern, $value);
    }
}

if (! function_exists('str_pad_both')) {
    /**
     * Pad both sides of a string with another.
     *
     * @param  string  $value
     * @param  int  $length
     * @param  string  $pad
     * @return string
     */
    function str_pad_both($value, $length, $pad = ' ')
    {
        return Str::padBoth($value, $length, $pad);
    }
}

if (! function_exists('str_pad_left')) {
    /**
     * Pad the left side of a string with another.
     *
     * @param  string  $value
     * @param  int  $length
     * @param  string  $pad
     * @return string
     */
    function str_pad_left($value, $length, $pad = ' ')
    {
        return Str::padLeft($value, $length, $pad);
    }
}

if (! function_exists('str_pad_right')) {
    /**
     * Pad the right side of a string with another.
     *
     * @param  string  $value
     * @param  int  $length
     * @param  string  $pad
     * @return string
     */
    function str_pad_right($value, $length, $pad = ' ')
    {
        return Str::padRight($value, $length, $pad);
    }
}

if (! function_exists('str_position')) {
    /**
     * Find the multi-byte safe position of the first occurrence of a given substring in a string.
     *
     * @param  string  $haystack
     * @param  string  $needle
     * @param  int  $offset
     * @param  string|null  $encoding
     * @return int|false
     */
    function str_position($haystack, $needle, $offset = 0, $encoding = null)
    {
        return Str::position($haystack, $needle, $offset, $encoding);
    }
}

if (! function_exists('str_random')) {
    /**
     * Generate a more truly "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     *
     * @throws \RuntimeException
     */
    function str_random($length = 16)
    {
        return Str::random($length);
    }
}

if (! function_exists('str_repeat')) {
    /**
     * Repeat the given string.
     *
     * @param  string  $string
     * @param  int  $times
     * @return string
     */
    function str_repeat(string $string, int $times)
    {
        return Str::repeat($string, $times);
    }
}

if (! function_exists('str_replace_array')) {
    /**
     * Replace a given value in the string sequentially with an array.
     *
     * @param  string  $search
     * @param  array  $replace
     * @param  string  $subject
     * @return string
     */
    function str_replace_array($search, array $replace, $subject)
    {
        return Str::replaceArray($search, $replace, $subject);
    }
}

if (! function_exists('str_replace')) {
    /**
     * Replace the given value in the given string.
     *
     * @param  string|iterable<string>  $search
     * @param  string|iterable<string>  $replace
     * @param  string|iterable<string>  $subject
     * @param  bool  $caseSensitive
     * @return string|string[]
     */
    function str_replace($search, $replace, $subject, $caseSensitive = true)
    {
        return Str::replaceFirst($search, $replace, $subject, $caseSensitive);
    }
}

if (! function_exists('str_replace_first')) {
    /**
     * Replace the first occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $subject
     * @return string
     */
    function str_replace_first($search, $replace, $subject)
    {
        return Str::replaceFirst($search, $replace, $subject);
    }
}

if (! function_exists('str_replace_start')) {
    /**
     * Replace the first occurrence of the given value if it appears at the start of the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $subject
     * @return string
     */
    function str_replace_start($search, $replace, $subject)
    {
        return Str::replaceStart($search, $replace, $subject);
    }
}

if (! function_exists('str_replace_last')) {
    /**
     * Replace the last occurrence of a given value in the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $subject
     * @return string
     */
    function str_replace_last($search, $replace, $subject)
    {
        return Str::replaceLast($search, $replace, $subject);
    }
}

if (! function_exists('str_replace_end')) {
    /**
     * Replace the last occurrence of a given value if it appears at the end of the string.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $subject
     * @return string
     */
    function str_replace_end($search, $replace, $subject)
    {
        return Str::replaceEnd($search, $replace, $subject);
    }
}

if (! function_exists('str_replace_matches')) {
    /**
     * Replace the patterns matching the given regular expression.
     *
     * @param  string  $pattern
     * @param  \Closure|string  $replace
     * @param  array|string  $subject
     * @param  int  $limit
     * @return string|string[]|null
     */
    function str_replace_matches($pattern, $replace, $subject, $limit = -1)
    {
        return Str::replaceMatches($pattern, $replace, $subject, $limit);
    }
}

if (! function_exists('str_remove')) {
    /**
     * Remove any occurrence of the given string in the subject.
     *
     * @param  string|iterable<string>  $search
     * @param  string|iterable<string>  $subject
     * @param  bool  $caseSensitive
     * @return string
     */
    function str_remove($search, $subject, $caseSensitive = true)
    {
        return Str::remove($search, $subject, $caseSensitive);
    }
}

if (! function_exists('str_reverse')) {
    /**
     * Reverse the given string.
     *
     * @param  string  $value
     * @return string
     */
    function str_reverse($value)
    {
        return Str::reverse($value);
    }
}

if (! function_exists('str_singular')) {
    /**
     * Get the singular form of an English word.
     *
     * @param  string  $value
     * @return string
     */
    function str_singular($value)
    {
        return Str::singular($value);
    }
}

if (! function_exists('str_slug')) {
    /**
     * Generate a URL friendly "slug" from a given string.
     *
     * @param  string  $title
     * @param  string  $separator
     * @param  string  $language
     * @return string
     */
    function str_slug($title, $separator = '-', $language = 'en')
    {
        return Str::slug($title, $separator, $language);
    }
}

if (! function_exists('str_start')) {
    /**
     * Begin a string with a single instance of a given value.
     *
     * @param  string  $value
     * @param  string  $prefix
     * @return string
     */
    function str_start($value, $prefix)
    {
        return Str::start($value, $prefix);
    }
}

if (! function_exists('str_upper')) {
    /**
     * Convert the given string to upper-case.
     *
     * @param  string  $value
     * @return string
     */
    function str_upper($value)
    {
        return Str::upper($value);
    }
}

if (! function_exists('studly_case')) {
    /**
     * Convert a value to studly caps case.
     *
     * @param  string  $value
     * @return string
     */
    function studly_case($value)
    {
        return Str::studly($value);
    }
}

if (! function_exists('str_substr')) {
    /**
     * Returns the portion of the string specified by the start and length parameters.
     *
     * @param  string  $string
     * @param  int  $start
     * @param  int|null  $length
     * @param  string  $encoding
     * @return string
     */
    function str_substr($string, $start, $length = null, $encoding = 'UTF-8')
    {
        return Str::substr($string, $start, $length, $encoding);
    }
}

if (! function_exists('str_substr_count')) {
    /**
     * Returns the number of substring occurrences.
     *
     * @param  string  $haystack
     * @param  string  $needle
     * @param  int  $offset
     * @param  int|null  $length
     * @return int
     */
    function str_substr_count($haystack, $needle, $offset = 0, $length = null)
    {
        return Str::substrCount($haystack, $needle, $offset, $length);
    }
}

if (! function_exists('str_substr_replace')) {
    /**
     * Replace text within a portion of a string.
     *
     * @param  string|string[]  $string
     * @param  string|string[]  $replace
     * @param  int|int[]  $offset
     * @param  int|int[]|null  $length
     * @return string|string[]
     */
    function str_substr_replace($string, $replace, $offset = 0, $length = null)
    {
        return Str::substrReplace($string, $replace, $offset, $length);
    }
}

if (! function_exists('str_swap')) {
    /**
     * Swap multiple keywords in a string with other keywords.
     *
     * @param  array  $map
     * @param  string  $subject
     * @return string
     */
    function str_swap($map, $subject)
    {
        return Str::swap($map, $subject);
    }
}

if (! function_exists('str_take')) {
    /**
     * Take the first or last {$limit} characters of a string.
     *
     * @param  string  $string
     * @param  int  $limit
     * @return string
     */
    function str_take($string, $limit)
    {
        return Str::take($string, $limit);
    }
}

if (! function_exists('str_lcfirst')) {
    /**
     * Make a string's first character lowercase.
     *
     * @param  string  $string
     * @return string
     */
    function str_lcfirst($string)
    {
        return Str::lcfirst($string);
    }
}

if (! function_exists('str_ucfirst')) {
    /**
     * Make a string's first character uppercase.
     *
     * @param  string  $string
     * @return string
     */
    function str_ucfirst($string)
    {
        return Str::ucfirst($string);
    }
}

if (! function_exists('str_ucsplit')) {
    /**
     * Split a string into pieces by uppercase characters.
     *
     * @param  string  $string
     * @return string[]
     */
    function str_ucsplit($string)
    {
        return Str::ucsplit($string);
    }
}

if (! function_exists('str_word_count')) {
    /**
     * Get the number of words a string contains.
     *
     * @param  string  $string
     * @param  string|null  $characters
     * @return int
     */
    function str_word_count($string, $characters = null)
    {
        return Str::wordCount($string, $characters);
    }
}

if (! function_exists('str_word_wrap')) {
    /**
     * Wrap a string to a given number of characters.
     *
     * @param  string  $string
     * @param  int  $characters
     * @param  string  $break
     * @param  bool  $cutLongWords
     * @return string
     */
    function str_word_wrap($string, $characters = 75, $break = "\n", $cutLongWords = false)
    {
        return Str::wordWrap($string, $characters, $break, $cutLongWords);
    }
}

if (! function_exists('title_case')) {
    /**
     * Convert a value to title case.
     *
     * @param  string  $value
     * @return string
     */
    function title_case($value)
    {
        return Str::title($value);
    }
}

if (! function_exists('str_headline')) {
    /**
     * Convert the given string to title case for each word.
     *
     * @param  string  $value
     * @return string
     */
    function str_headline($value)
    {
        return Str::headline($value);
    }
}
