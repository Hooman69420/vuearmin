const books = Vue.createApp({
    data() {
        return{
            url:'sample.com',
            showBooks: true,
            books: [
                { title: 'name of the wind', author: 'arnold rosas', img: 'https://dummyimage.com/200x200/ed2bed/fff.jpg', isFav: true },
                { title: 'the way of kings', author: 'sindo asd', img: 'https://dummyimage.com/200x200/00f3f7/fff.jpg', isFav: false },
                { title: 'the final empire', author: 'brandon dsa', img: 'https://dummyimage.com/200x200/55ff00/fff.jpg', isFav: true },
            ]
        }
    },
    methods:{
    toggleShowBooks(){
            this.showBooks = !this.showBooks
        },
    }
});

books.mount('#samples2');

// End of samples 1

const app = Vue.createApp({
    data() {
        return {
            count: 0,
            x: 0,
            y: 0  
        }
    },
    methods:{
        handleEvents(){
            console.log('clicked')
        },
        handlemousemove(e) {
            this.x = e.offsetX,
            this.y = e.offsetY
        }
    }
});

app.mount('#samples1');

// End of samples 1

const prodQuantity = Vue.createApp({
    data() {
        return {
            quantity: 0
        }
    }
});

prodQuantity.mount('#prod_boxes');

// End of prod boxes

const reqSuggestion = Vue.createApp({
    data() {
        return {
            showRequest: false
        }
    },
    methods: {
        toggleShowRequest() {
            this.showRequest = !this.showRequest
        }
    }
});

reqSuggestion.mount('#reqSuggestion');

// End of req suggestion

const fourofourevent = Vue.createApp({
    data() {
        return {
            showRequest: true          
        }
    },
    methods: {
        toggleShowPrompt() {
            this.showRequest = !this.showRequest
        }
    }
});

fourofourevent.mount('#fourevent');

// End of 404 event


// To show options
// sample(e) {
//     console.log(e)
// }