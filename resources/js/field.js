import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'
import VueTelInput from 'vue-tel-input';
import 'vue-tel-input/vue-tel-input.css';

Nova.booting((app, store) => {
    app.use(VueTelInput);
    app.component('index-phone-number', IndexField)
    app.component('detail-phone-number', DetailField)
    app.component('form-phone-number', FormField)
})
