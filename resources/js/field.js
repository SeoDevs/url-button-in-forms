import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-url-button-in-forms', IndexField)
  app.component('detail-url-button-in-forms', DetailField)
  app.component('form-url-button-in-forms', FormField)
})
