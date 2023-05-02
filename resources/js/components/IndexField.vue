<template>
    <div :title="this.field.value" :aria-label="this.field.value"> <a target="_blank" :href="inputUrl"
            v-bind="extraAttributes"
            class="shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-3 shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900"
            @input="handleChange"
            :value="value"
            :id="currentField.uniqueKey"
            :dusk="field.attribute"
            :disabled="currentlyIsReadonly"
            :maxlength="field.enforceMaxlength ? field.maxlength : -1">
            {{ field.label ?? "Download"}}</a></div>
</template>
<script>

import DependentFormField from '../mixins/DependentFormField'
export default {
mixins: [DependentFormField],
props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

computed: {
 inputUrl() {
   return this.currentField.url || 'test'
 },
 label() {
    return this.fieldName || this.field.name
    },
}
}

</script>
<style>
.btn{
background: black;
}

</style>
