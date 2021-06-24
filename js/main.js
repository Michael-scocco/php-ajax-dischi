const app = new Vue({
    el: '#app',
    data:{
        listaAlbum:[],
        generi:[
            'Pop',
            'Rock',
            'Jazz',
            'Metal'
        ],
    },
    methods:{

    },
    mounted(){
       
            axios
            .get("./database/data.php")
            .then(resp => {
                // console.log(resp.data.response);
                const data = resp.data;
                // console.log(data);
                this.listaAlbum = data;
            })
            .catch(e => {
                console.error(e);
    
            })
        
    },
})