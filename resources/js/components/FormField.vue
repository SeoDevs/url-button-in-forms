<template>
    <DefaultField
    :field="currentField"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <div class="space-y-1">
        <a target="_blank" :href="inputUrl"
            v-bind="extraAttributes"
            class="shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-3 shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900"
            @input="handleChange"
            :value="value"
            :id="currentField.uniqueKey"
            :dusk="field.attribute"
            :disabled="currentlyIsReadonly"
            :maxlength="field.enforceMaxlength ? field.maxlength : -1">
            {{ field.label ?? "Download"}}</a>
      </div>
    </template>
  </DefaultField>
</template>

  <script>

import DependentFormField from '../mixins/DependentFormField'
  export default {
    mixins: [DependentFormField],
    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

    computed: {
      inputUrl() {
        return this.currentField.url || 'test'
      }
    }
  }

  </script>
<style>
.btn{
    background: black;
}

</style>
