Vue.config.devtools = true;

var app5 = new Vue({
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