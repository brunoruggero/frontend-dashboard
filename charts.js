var xmlhttp1 = new XMLHttpRequest();
var url = "http://localhost/front-teste/jsonFrontEnd09-06-2021.json";
xmlhttp1.open("GET",url,true);
xmlhttp1.send();
xmlhttp1.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var data = JSON.parse(this.responseText);
        
        var pegaNome = data.data.map(function(elem){
            return elem.nomeAcao;
        });
        var pegaPreco = data.data.map(function(elem){
            return elem.precoAcao;
        });
        
        var ctx = document.getElementById('doughnut').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: pegaNome,
                datasets: [{
                    data: pegaPreco,
                    backgroundColor: [
                        'red',
                        'blue',
                        'green',
                        'yellow',
                        'orange',
                        'pink'
                    ],
                    borderColor: [
                        'red',
                        'blue',
                        'green',
                        'yellow',
                        'orange',
                        'pink'
                    ],
                    borderWidth: 1
                }]
            }
        });
    }
}

var xmlhttp2 = new XMLHttpRequest();
var url = "http://localhost/front-teste/jsonFrontEnd09-06-2021.json";
xmlhttp2.open("GET",url,true);
xmlhttp2.send();
xmlhttp2.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        var data = JSON.parse(this.responseText);
        
        var pegaNome = data.data.map(function(elem){
            return elem.nomeAcao;
        });
        console.log(pegaNome);
        var pegaPreco = data.data.map(function(elem){
            return elem.precoAcao;
        });
        console.log(pegaPreco);
        var ctx = document.getElementById('line').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: pegaNome,
                datasets: [{
                    label: 'Portfolio Performance',
                    data: pegaPreco,
                    backgroundColor: [
                        'red',
                        'blue',
                        'green',
                        'yellow',
                        'orange',
                        'pink'
                    ],
                    borderColor: [
                        'red',
                        'blue',
                        'green',
                        'yellow',
                        'orange',
                        'pink'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                elements: {
                    line: {
                        tension: 0
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
}


