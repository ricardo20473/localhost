var app = new Vue({
    el: '#app',
    data: {
        files: '',
        buscar: '',
    },
    methods: {
        openFile: function () {
            $.ajax({ 
                type : "GET", 
                url : "localhost/app/searchFile.php?op=get", 
                success : function(data) {
                    array = JSON.parse(data);
                    arreglo = [];
                    for (var i = 0; i < array.length; i++) {
                        if (array[i][0] !='..' && array[i][0] !='.' && array[i][0] !='index.php' && array[i][0] !='localhost' && array[i][0] !='phpmyadmin' && array[i][0] !='index.html') {
                            arreglo.push(array[i][0]);
                        }
                    }

                    arreglo.sort();
                    this.files = arreglo;
                }.bind(this)
            });
        },
        eliminar: function(file){
            $.ajax({ 
                type : "GET", 
                url : "localhost/app/searchFile.php?op=delete&file="+file, 
                success : function(data) {
                    console.log(data);
                    this.openFile();
                }.bind(this)
            });
        },
        filter:function filterBy(list, value) {
            if (list) {
                return list.filter(function(item) {
                    if (item.toLowerCase().indexOf(value) !== -1) {
                        this.verList = true;
                        return item;
                    }
                });
            }
        }
    }
});

app.openFile();