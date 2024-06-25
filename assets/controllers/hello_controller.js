import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    static targets = ['output'];
    connect() {
        console.log('Hello, Stimulus!');
    }
    update(event) {
        this.outputTarget.textContent = event.target.value;
    }
}
