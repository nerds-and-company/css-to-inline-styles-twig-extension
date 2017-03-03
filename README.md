# Inline Css extension to convert css to inline styles
[![Build Status](https://travis-ci.org/nerds-and-company/css-to-inline-styles-twig-extension.svg?branch=master)](https://travis-ci.org/nerds-and-company/css-to-inline-styles-twig-extension)
[![Latest Stable Version](https://poser.pugx.org/nerds-and-company/css-to-inline-styles-twig-extension/v/stable)](https://packagist.org/packages/nerds-and-company/css-to-inline-styles-twig-extension) [![Total Downloads](https://poser.pugx.org/nerds-and-company/css-to-inline-styles-twig-extension/downloads)](https://packagist.org/packages/nerds-and-company/css-to-inline-styles-twig-extension) [![Latest Unstable Version](https://poser.pugx.org/nerds-and-company/css-to-inline-styles-twig-extension/v/unstable)](https://packagist.org/packages/nerds-and-company/css-to-inline-styles-twig-extension) [![License](https://poser.pugx.org/nerds-and-company/css-to-inline-styles-twig-extension/license)](https://packagist.org/packages/nerds-and-company/css-to-inline-styles-twig-extension)

Based on work by Roberto Trunfio on https://github.com/robertotru/ToInlineStyleEmailBundle

Makes use of https://github.com/tijsverkoyen/CssToInlineStyles by Tijs Verkoyen

## Installation

This twig extension is installed through Composer. Run the following command from the root of your project:

`composer require nerds-and-company/css-to-inline-styles-twig-extension`

This will add nerds-and-company/css-to-inline-styles-twig-extension as a requirement to your project's composer.json file and install the source-code into the vendor/nerds-and-company/css-to-inline-styles-twig-extension directory

Add the extension to the `Twig_Environment`:

```php
use NerdsAndCompany\CssToInlineStyles\Twig\InlineCssExtension;

$twig = new Twig_Environment(...);

$twig->addExtension(new InlineCssExtension());
```

## Usage
```
{% inlincecss '/absolute/path/file.css' %}
   <tag>Html to be converted</tag>
{% endinlinecss %}
```
