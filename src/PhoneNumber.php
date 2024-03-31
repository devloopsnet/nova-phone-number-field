<?php

namespace Devloops\PhoneNumber;

use Laravel\Nova\Fields\Field;

/**
 * Class PhoneNumber.
 *
 * @package Devloops\PhoneNumber
 * @date    31/03/2024
 * @author  Abdullah Al-Faqeir <abdullah@devloops.net
 */
class PhoneNumber extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'phone-number';

    /**
     * Defaults to All countries that are used in libphonenumber-js, can be overridden by this prop.
     *
     * @param array $allCountries
     *
     * @return $this
     */
    public function withAllCountries(array $allCountries): self
    {
        $this->withMeta([
            'allCountries' => $allCountries,
        ]);

        return $this;
    }

    /**
     * Auto update the input to the formatted phone number when it's valid
     *
     * @param bool $autoFormat
     *
     * @return $this
     */
    public function withAutoFormat(bool $autoFormat = true): self
    {
        $this->withMeta([
            'autoFormat' => $autoFormat,
        ]);

        return $this;
    }

    /**
     * Custom validation RegExp for input. false or a string of regex.
     *
     * @param bool|string $customValidate
     *
     * @return $this
     */
    public function withCustomValidate(bool|string $customValidate = false): self
    {
        $this->withMeta([
            'customValidate' => $customValidate,
        ]);

        return $this;
    }

    /**
     * Default country (by iso2 or dialCode), will override the country fetched from IP address of user.
     *
     * @param string $country
     *
     * @return $this
     */
    public function withDefaultCountry(string $country = ''): self
    {
        $this->withMeta([
            'defaultCountry' => $country,
        ]);

        return $this;
    }

    /**
     * Disable PhoneNumber, including the input & flag dropdown
     *
     * @param bool $disabled
     *
     * @return $this
     */
    public function withDisabled(bool $disabled = true): self
    {
        $this->withMeta([
            'disabled' => $disabled,
        ]);

        return $this;
    }

    /**
     * To fetch default country based on IP address of user
     *
     * @param bool $autoDefaultCountry
     *
     * @return $this
     */
    public function withAutoDefaultCountry(bool $autoDefaultCountry = true): self
    {
        $this->withMeta([
            'autoDefaultCountry' => $autoDefaultCountry,
        ]);

        return $this;
    }

    /**
     * Disable dropdown.
     *
     * @param bool $disabled
     *
     * @return $this
     */
    public function withDropdownOptionsDisabled(bool $disabled = false): self
    {
        $this->withMeta([
            'dropdownOptions.disabled' => $disabled,
        ]);

        return $this;
    }

    /**
     * Show dial code in the dropdown list.
     *
     * @param bool $showDialCodeInList
     *
     * @return $this
     */
    public function withDropdownOptionsShowDialCodeInList(bool $showDialCodeInList = true): self
    {
        $this->withMeta([
            'dropdownOptions.showDialCodeInList' => $showDialCodeInList,
        ]);

        return $this;
    }

    /**
     * Show dial code in the dropdown selection.
     *
     * @param bool $showDialCodeInSelection
     *
     * @return $this
     */
    public function withDropdownOptionsShowDialCodeInSelection(bool $showDialCodeInSelection = false): self
    {
        $this->withMeta([
            'dropdownOptions.showDialCodeInSelection' => $showDialCodeInSelection,
        ]);

        return $this;
    }

    /**
     * Show flags in the dropdown selection and list.
     *
     * @param bool $showFlags
     *
     * @return $this
     */
    public function withDropdownOptionsShowFlags(bool $showFlags = true): self
    {
        $this->withMeta([
            'dropdownOptions.showFlags' => $showFlags,
        ]);

        return $this;
    }

    /**
     * Show country search box
     *
     * @param bool $showSearchBox
     *
     * @return $this
     */
    public function withDropdownOptionsShowSearchBox(bool $showSearchBox = false): self
    {
        $this->withMeta([
            'dropdownOptions.showSearchBox' => $showSearchBox,
        ]);

        return $this;
    }

    /**
     * Native dropdown tabindex attribute.
     *
     * @param int $tabIndex
     *
     * @return $this
     */
    public function withDropdownOptionsTabindex(int $tabIndex = 0): self
    {
        $this->withMeta([
            'dropdownOptions.tabindex' => $tabIndex,
        ]);

        return $this;
    }

    /**
     * List of countries will NOT be shown on the dropdown.
     *
     * @param array $countries
     *
     * @return $this
     */
    public function withIgnoredCountries(array $countries = []): self
    {
        $this->withMeta([
            'ignoredCountries' => $countries,
        ]);

        return $this;
    }

    /**
     * Native input autocomplete attribute.
     *
     * @param string $autocomplete
     *
     * @return $this
     */
    public function withInputOptionsAutocomplete(string $autocomplete = 'on'): self
    {
        $this->withMeta([
            'inputOptions.autocomplete' => $autocomplete,
        ]);

        return $this;
    }

    /**
     * Native input autofocus attribute.
     *
     * @param bool $autofocus
     *
     * @return $this
     */
    public function withInputOptionsAutofocus(bool $autofocus = false): self
    {
        $this->withMeta([
            'inputOptions.autofocus' => $autofocus,
        ]);

        return $this;
    }

    /**
     * Native input aria-describedby attribute.
     *
     * @param string $ariaDescribedby
     *
     * @return $this
     */
    public function withInputOptionsAriaDescribedby(string $ariaDescribedby = ''): self
    {
        $this->withMeta([
            'inputOptions.aria-describedby' => $ariaDescribedby,
        ]);

        return $this;
    }

    /**
     * Native input id attribute.
     *
     * @param string $id
     *
     * @return $this
     */
    public function withInputOptionsId(string $id = ''): self
    {
        $this->withMeta([
            'inputOptions.id' => $id,
        ]);

        return $this;
    }

    /**
     * Native input maxlength attribute.
     *
     * @param int $maxLength
     *
     * @return $this
     */
    public function withInputOptionsMaxlength(int $maxLength = 25): self
    {
        $this->withMeta([
            'inputOptions.maxlength' => $maxLength,
        ]);

        return $this;
    }

    /**
     * Native input name attribute.
     *
     * @param string $name
     *
     * @return $this
     */
    public function withInputOptionsName(string $name = 'telephone'): self
    {
        $this->withMeta([
            'inputOptions.name' => $name,
        ]);

        return $this;
    }

    /**
     * Show dial code in input.
     *
     * @param bool $showDialCode
     *
     * @return $this
     */
    public function withInputOptionsShowDialCode(bool $showDialCode = false): self
    {
        $this->withMeta([
            'inputOptions.showDialCode' => $showDialCode,
        ]);

        return $this;
    }

    /**
     * Placeholder for the input.
     *
     * @param string $placeholder
     *
     * @return $this
     */
    public function withInputOptionsPlaceholder(string $placeholder = 'Enter a phone number'): self
    {
        $this->withMeta([
            'inputOptions.placeholder' => $placeholder,
        ]);

        return $this;
    }

    /**
     * Native input readonly attribute.
     *
     * @param bool $readonly
     *
     * @return $this
     */
    public function withInputOptionsReadonly(bool $readonly = false): self
    {
        $this->withMeta([
            'inputOptions.readonly' => $readonly,
        ]);

        return $this;
    }

    /**
     * Native input required attribute.
     *
     * @param bool $required
     *
     * @return $this
     */
    public function withInputOptionsRequired(bool $required = false): self
    {
        $this->withMeta([
            'inputOptions.required' => $required,
        ]);

        return $this;
    }

    /**
     * Native input tabindex attribute.
     *
     * @param int $tabIndex
     *
     * @return $this
     */
    public function withInputOptionsTabindex(int $tabIndex = 0): self
    {
        $this->withMeta([
            'inputOptions.tabindex' => $tabIndex,
        ]);

        return $this;
    }

    /**
     * Native input type attribute.
     *
     * @param string $type
     *
     * @return $this
     */
    public function withInputOptionsType(string $type = 'tel'): self
    {
        $this->withMeta([
            'inputOptions.type' => $type,
        ]);

        return $this;
    }

    /**
     * Custom classes for the input.
     *
     * @param array|string $styleClasses
     *
     * @return $this
     */
    public function withInputOptionsStyleClasses(array|string $styleClasses = ''): self
    {
        $this->withMeta([
            'inputOptions.styleClasses' => $styleClasses,
        ]);

        return $this;
    }

    /**
     * Invalid state message.
     *
     * @param string $invalidMsg
     *
     * @return $this
     */
    public function withInvalidMsg(string $invalidMsg = ''): self
    {
        $this->withMeta([
            'invalidMsg' => $invalidMsg,
        ]);

        return $this;
    }

    /**
     * Allowed values: 'auto' (Default set by phone), 'international' (Format number with
     * the dial code i.e. + 61), 'national' (Format number without dial code i.e. 0321232).
     *
     * @param string $mode
     *
     * @return $this
     */
    public function withMode(string $mode = 'auto'): self
    {
        $this->withMeta([
            'mode' => $mode,
        ]);

        return $this;
    }

    /**
     * List of countries will be shown on the dropdown.
     *
     * @param array $countries
     *
     * @return $this
     */
    public function withOnlyCountries(array $countries = []): self
    {
        $this->withMeta([
            'onlyCountries' => $countries,
        ]);

        return $this;
    }

    /**
     * Preferred countries list, will be on top of the dropdown.
     *
     * @param array $preferredCountries
     *
     * @return $this
     */
    public function withPreferredCountries(array $preferredCountries = []): self
    {
        $this->withMeta([
            'preferredCountries' => $preferredCountries,
        ]);

        return $this;
    }

    /**
     * Custom classes for the wrapper.
     *
     * @param array|string $styleClasses
     *
     * @return $this
     */
    public function withStyleClasses(array|string $styleClasses = ''): self
    {
        $this->withMeta([
            'styleClasses' => $styleClasses,
        ]);

        return $this;
    }

    /**
     * Only allow valid characters in a phone number (will also verify in mounted, so phone
     * number with invalid characters will be shown as an empty string).
     *
     * @param bool $validCharactersOnly
     *
     * @return $this
     */
    public function withValidCharactersOnly(bool $validCharactersOnly = false): self
    {
        $this->withMeta([
            'validCharactersOnly' => $validCharactersOnly,
        ]);

        return $this;
    }
}
