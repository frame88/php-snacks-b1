const app = new Vue({
    el: '#app',
    data: {
        cars: [],
        filter: {
            colore: 'all',
            marca: 'all',
        },
    },
    created() {
        this.getAuto();
    },
    methods: {
        getAuto() {
            const option = {
                colore: this.filter.colore,
                marca: this.filter.marca,
            };
            axios.get('http://localhost:88/php-snacks-b1/server/controller.php', { option })
                .then((result) => {
                    this.cars = result.data.results;
                    console.log(result.data.results);
                    console.log(this.cars);
                    console.log(option.colore);
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    }
});