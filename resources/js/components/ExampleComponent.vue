<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <h1 class=""> Word Counter and Calculator </h1>
                <p class="h2 indigo font-weight-bold">Easily calculate the number of the words and your rate.</p>
                <hr class="shadow">
            </div>
            <div class="col-md-12">
                <div class="alert alert-primary shadow-sm mb-3 h3 font" role="alert">
                    Words: <span class="font-weight-bold">{{ wcount }} |</span> Characters: <span class="font-weight-bold">{{ ccount }} |</span> Sentences: <span class="font-weight-bold">{{ scount}}</span>
                </div>
                <div class="form-group">
                    <label for="rate">Enter your rate per 1000 words <small class="text-secondary">EUR / USD</small></label>
                    <input class="form-control shadow-sm mb-3" id="rate" type="number" @input="charCount()" v-model="rate">
                    <p class="h4">Total amount: {{ price }} <small class="text-muted">EUR / USD</small></p>
                </div>
                <div class="form-group">
                    <label for="input"></label>
                    <textarea v-model="userinput" @keyup='charCount()' class="form-control shadow" name="" id="input"
                              cols="30" rows="15"></textarea>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
            userinput: '',
            wcount: 0,
            ccount: 0,
            scount: 0,
            rate: '',
            price: 0

        }
    },

    mounted() {

        console.log('Component mounted.')
    },
    methods: {
        charCount() {
            this.ccount = this.userinput.length;
            this.wcount = this.userinput.split(/\b[-?(\w+)'?]+\b/gi).length-1;
            this.scount = this.userinput.split(/[.|!|?]+/g).length-1;
            this.price = (this.wcount * (this.rate / 1000)).toFixed(2);

        },
        priceCount() {
            this.price = this.userinput.length * this.rate;
        },
        reportBug() {
            console.log('aaaaaaaaaaaaa')
        }
    }

}
</script>
