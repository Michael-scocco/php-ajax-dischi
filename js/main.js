const app = new Vue({
    el: '#app',
    data:{
        listaAlbum:[],
    },
    methods:{

    },
    mounted(){
       
            axios
            .get("data.php")
            .then(resp => {
                // console.log(resp.data.response);
                const data = r.data;
                // console.log(data);
                this.listaAlbum = data;
            })
            .catch(e => {
                console.error(e);
    
            })
        
    },
})