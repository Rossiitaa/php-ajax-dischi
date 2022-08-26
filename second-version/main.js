var app = new Vue(
    {
        el:'#root',
        data:{
            database:[]
        },
        methods:{
            getDatabaseApi(){
                axios.get('./controller.php')
                .then((response) => {
                    this.database = response.data;
                });
            }
        },
        mounted(){
            this.getDatabaseApi();
        }
    }
);