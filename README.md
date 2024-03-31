![Laravel Nova Phone Number Field](https://i.ibb.co/61XH0Pp/Nova-Phone-Number.png)

[![Latest Version on Packagist](https://poser.pugx.org/devloopsnet/nova-phone-number-field/v/stable?format=flat-square&color=#0E7FC0)](https://packagist.org/packages/devloopsnet/nova-phone-number-field)
[![License](https://poser.pugx.org/devloopsnet/nova-phone-number-field/license?format=flat-square)](https://packagist.org/packages/devloopsnet/nova-phone-number-field)
[![Total Downloads](https://poser.pugx.org/devloopsnet/nova-phone-number-field/downloads?format=flat-square)](https://packagist.org/packages/devloopsnet/nova-phone-number-field)

The Missing Laravel Nova Phone Number Field.

**NOTE: This field uses [vue-tel-input](https://github.com/iamstevendao/vue-tel-input) for frontend.**

![Screenshot](https://i.ibb.co/MNsGGgL/screenshot-4.png "Phone Number Field")

## Installation

```
composer require devloopsnet/nova-phone-number-field
```

## Implementation

You can easily add the field using the code below:

```php
use Devloops\PhoneNumber\PhoneNumber;

PhoneNumber::make('Phone Number')
```

### Options

This fields supports all the props from the [vue-tel-input](https://github.com/iamstevendao/vue-tel-input) mentioned already in
the [documentation](https://vue-tel-input.iamstevendao.com/usage/props.html), and they are implemented using the following methods.

#### Methods / Defaults

| Method/Options                                 | Default                                                      |
|------------------------------------------------|--------------------------------------------------------------|
| `withAllCountries()`                           | **array:** All countries that are used in libphonenumber-js  |
| `withAutoFormat()`                             | **boolean:** `true`                                          |
| `withCustomValidate()`                         | **boolean:** `false`                                         |
| `withDefaultCountry()`                         | **string:** `''`                                             |
| `withDisabled()`                               | **boolean:** `false`                                         |
| `withAutoDefaultCountry()`                     | **boolean:** `true`                                          |
| `withDropdownOptionsDisabled()`                | **boolean:** `false`                                         |
| `withDropdownOptionsShowDialCodeInList()`      | **boolean:** `true`                                          |
| `withDropdownOptionsShowDialCodeInSelection()` | **boolean:** `false`                                         |
| `withDropdownOptionsShowFlags()`               | **boolean:** `true`                                          |
| `withDropdownOptionsShowSearchBox()`           | **boolean:** `false`                                         |
| `withDropdownOptionsTabindex()`                | **int:** `0`                                                 |
| `withIgnoredCountries()`                       | **array:** `[]`                                              |
| `withInputOptionsAutocomplete()`               | **string:** `'on'`                                           |
| `withInputOptionsAutofocus()`                  | **boolean:** `false`                                         |
| `withInputOptionsAriaDescribedby()`            | **string:** `''`                                             |
| `withInputOptionsId()`                         | **string:** `''`                                             |
| `withInputOptionsMaxlength()`                  | **int:** `25`                                                |
| `withInputOptionsName()`                       | **string:** `'telephone'`                                    |
| `withInputOptionsShowDialCode()`               | **boolean:** `false`                                         |
| `withInputOptionsPlaceholder()`                | **string:** `'Enter a phone number'`                         |
| `withInputOptionsReadonly()`                   | **boolean:** `false`                                         |
| `withInputOptionsRequired()`                   | **boolean:** `false`                                         |
| `withInputOptionsTabindex()`                   | **int:** `0`                                                 |
| `withInputOptionsType()`                       | **string:** `'tel'`                                          |
| `withInputOptionsStyleClasses()`               | **string/array:** `''`                                       |
| `withInvalidMsg()`                             | **string:** `''`                                             |
| `withMode()`                                   | **string:** `'auto'`                                         |
| `withOnlyCountries()`                          | **array:** `[]`                                              |
| `withPreferredCountries()`                     | **array:** `[]`                                              |
| `withStyleClasses()`                           | **string/array:** `''`                                       |
| `withValidCharactersOnly()`                    | **boolean:** `false`                                         |


## Credits

* [Abdullah Al-Faqeir](https://github.com/abdullahfaqeir)

## License

The MIT License (MIT). Please see [License File](./LICENSE.md) for more information.
