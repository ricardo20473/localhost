var app = new Vue({
    el: '#app',
    data: {
        files: '',
    },
    methods: {
        openFile: function () {
            $.ajax({ 
                type : "GET", 
                url : "app/searchFile.php", 
                success : function(data) {
                    array = JSON.parse(data);
                    arreglo = [];
                    for (var i = 0; i < array.length; i++) {
                        if (array[i][0] !='..' && array[i][0] !='.' && array[i][0] !='index.php' && array[i][0] !='localhost' && array[i][0] !='phpmyadmin') {
                            arreglo.push({
                                "0" :array[i][0],
                                "1" :array[i][1] 
                            });
                        }
                    }
                    this.files = arreglo;
                }.bind(this)
            });
        }
    }
});

app.openFile();