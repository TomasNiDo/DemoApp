import './bootstrap'
import { HasError, AlertError } from 'vform'
import CommentSection from './components/reply/CommentSection'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.component(CommentSection.name, CommentSection)

const app = new Vue({
    el: '#app'
});
