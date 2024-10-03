<template>
    <DefaultField
        :field="field"
        :errors="errors"
        :show-help-text="showHelpText"
        :full-width-content="fullWidthContent"
    >
        <template #field>
            <vue-tel-input
                :key="telInputKey"
                ref="telInputField"
                :id="field.attribute"
                :autoFormat="propValue('autoFormat', true)"
                :mode="propValue('mode', 'auto')"
                :customValidate="propValue('customValidate', false)"
                :defaultCountry="propValue('defaultCountry', '')"
                :disabled="propValue('disabled', false)"
                :autoDefaultCountry="propValue('autoDefaultCountry', true)"
                :ignoredCountries="propValue('ignoredCountries', [])"
                :invalidMsg="propValue('invalidMsg', '')"
                :onlyCountries="propValue('onlyCountries', [])"
                :preferredCountries="propValue('preferredCountries', [])"
                :styleClasses="propValue('styleClasses', '')"
                :validCharactersOnly="propValue('validCharactersOnly', false)"
                :dropdownOptions="{
                    'disabled':propValue('dropdownOptions.disabled', false),
                    'showDialCodeInList':propValue('dropdownOptions.showDialCodeInList', true),
                    'showDialCodeInSelection':propValue('dropdownOptions.showDialCodeInSelection', false),
                    'showFlags':propValue('dropdownOptions.showFlags', true),
                    'showSearchBox':propValue('dropdownOptions.showSearchBox', false),
                    'tabindex':propValue('dropdownOptions.tabindex', 0)
                }"
                :inputOptions="{
                    'autocomplete':propValue('inputOptions.autocomplete', 'on'),
                    'autofocus':propValue('inputOptions.autofocus', false),
                    'aria-describedby':propValue('inputOptions.aria-describedby', ''),
                    'id':propValue('inputOptions.id', ''),
                    'maxlength':propValue('inputOptions.maxlength', 25),
                    'name':propValue('inputOptions.name', 'telephone'),
                    'showDialCode':propValue('inputOptions.showDialCode', false),
                    'placeholder':propValue('inputOptions.placeholder', 'Enter a phone number'),
                    'readonly':propValue('inputOptions.readonly', false),
                    'required':propValue('inputOptions.required', false),
                    'tabindex':propValue('inputOptions.tabindex', 0),
                    'type':propValue('inputOptions.type', 'tel'),
                    'styleClasses':propValue('inputOptions.styleClasses', '')
                }"
                v-model="value"
            >
            </vue-tel-input>
        </template>
    </DefaultField>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    data() {
        return {
            telInputKey: 1
        }
    },

    mounted() {
        this.$nextTick(() => {
            this.telInputKey++;
        });
    },

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || '';
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.fieldAttribute, this.value || '')
        },

        propValue(prop, defaultValue) {
            return this.field[prop] || defaultValue;
        }
    },
}
</script>
