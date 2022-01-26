Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
      discoCharacteristics: [],
    },
    methods: {
      getServer: function(){
        axios.get('http://localhost:8888/php-ajax-dischi/server.php')
        .then((response) => {
            this.discoCharacteristics = response.data;
        });
      }
    },
    created: function(){
        this.getServer();
    }
})