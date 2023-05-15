# Laravel Nova Url Button Field In Forms

A Url Button Field In Forms for [Laravel Nova](https://nova.laravel.com/).

![Preview 1](https:://raw.githubusercontent.com/SeoDevs/url-button-in-forms/main/docs/preview.png)

## Install

```
composer require seoegypt/url-button-in-forms
```

## Usage

```php
use Seoegypt\UrlButtonInForms\UrlButtonInForms;

//..
UrlButtonInForms::make(_('Label'), 'Label')
    ->urlLabel("Label")
    ->urlGenerate("Url"),
```

### Field Help Text

> you can use all functions of normal laravel nova field

