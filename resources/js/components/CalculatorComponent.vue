<script>
export default {

    data() {
        return {
            wcount: 0,
            ccount: 0,
            scount: 0,
            price: 0,
            rate: '',
            userinput: ''
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
        }
    }

}
</script>
