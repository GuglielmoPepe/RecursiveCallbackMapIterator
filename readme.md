# RecursiveCallbackMapIterator
This iterator applies recursively the callback to the elements of the given iterator.


## Table of Contents 
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)
* [Contributing](#contributing)
* [Contacts](#contacts)
* [Roadmap](#roadmap)
* [Change log](#change-log)
* [License](#license)


## Installation
Use Composer

``` bash
$ composer require guglielmopepe/recursivecallbackmapiterator
```

## Usage
The callback should accept up to three arguments: the current item, the current key and the iterator, respectively.

```php

<?php

/**
 * Callback for RecursiveCallbackMapIterator
 *
 * @param $current   Current item's value
 * @param $key       Current item's key
 * @param $iterator  Iterator being filtered
 * @return mixed     The item after it has been applied the callback function
 */
function my_callback($current, $key, $iterator)
{
    // Your code here
}

?>

``` 

Any callable may be used; such as a string containing a function name, an array for a method, or an anonymous function. 

```php

<?php

$data = ['foo'=>['foo','bar'],'bar'=>['bar','foo']];

// A callback
function my_callback($current, $key, $iterator)
{
    if ($key % 2 == 0)
    {
        return $current;
    }

    return \strtoupper($current);
}

// Applies callback
$iterator = new \RecursiveCallbackMapIterator\RecursiveCallbackMapIterator(new \RecursiveArrayIterator($data), 'my_callback');

?>

```


## Support
If you have a request, please create a GitHub [issue](https://github.com/GuglielmoPepe/RecursiveCallbackMapIterator/issues).

If you discover a security vulnerability, please send an email to Guglielmo Pepe at [&#105;&#110;&#102;&#111;&#64;&#103;&#117;&#103;&#108;&#105;&#101;&#108;&#109;&#111;&#112;&#101;&#112;&#101;&#46;&#99;&#111;&#109;](&#109;&#97;&#105;&#108;&#116;&#111;&#58;%69%6e%66%6f%40%67%75%67%6c%69%65%6c%6d%6f%70%65%70%65%2e%63%6f%6d). All security vulnerabilities will be promptly addressed.


## Contributing
If you want to say **thank you** and/or support the active development of `RecursiveCallbackMapIterator`:

1. Add a [GitHub Star](https://github.com/GuglielmoPepe/RecursiveCallbackMapIterator/stargazers) to the project.
2. Share the project on social media.
3. Write a review or tutorial on [Medium](https://medium.com/), [Dev.to](https://dev.to/) or personal blog.


## Contacts
If you need information please send an email to [&#105;&#110;&#102;&#111;&#64;&#103;&#117;&#103;&#108;&#105;&#101;&#108;&#109;&#111;&#112;&#101;&#112;&#101;&#46;&#99;&#111;&#109;](&#109;&#97;&#105;&#108;&#116;&#111;&#58;%69%6e%66%6f%40%67%75%67%6c%69%65%6c%6d%6f%70%65%70%65%2e%63%6f%6d).


## Roadmap
See the list of [open issues](https://github.com/GuglielmoPepe/RecursiveCallbackMapIterator/issues):
- [enhancement](https://github.com/GuglielmoPepe/RecursiveCallbackMapIterator/issues?q=label%3Aenhancement+is%3Aopen+sort%3Areactions-%2B1-desc)
- [bugs](https://github.com/GuglielmoPepe/RecursiveCallbackMapIterator/issues?q=is%3Aissue+is%3Aopen+label%3Abug+sort%3Areactions-%2B1-desc) 


## Change log
Please see [Changelog file](changelog.md) for more information on what has changed recently.


## License
Distributed under the MIT License. Please see [License File](license.md) for more information.
