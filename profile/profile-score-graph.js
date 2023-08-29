document.addEventListener('DOMContentLoaded', function() {
    const nota1 = parseInt(document.querySelector('#barra1 .quantidade').textContent);
    const nota2 = parseInt(document.querySelector('#barra2 .quantidade').textContent);
    const nota3 = parseInt(document.querySelector('#barra3 .quantidade').textContent);
    const nota4 = parseInt(document.querySelector('#barra4 .quantidade').textContent);
    const nota5 = parseInt(document.querySelector('#barra5 .quantidade').textContent);
    const nota6 = parseInt(document.querySelector('#barra6 .quantidade').textContent);
    const nota7 = parseInt(document.querySelector('#barra7 .quantidade').textContent);
    const nota8 = parseInt(document.querySelector('#barra8 .quantidade').textContent);
    const nota9 = parseInt(document.querySelector('#barra9 .quantidade').textContent);
    const nota10 = parseInt(document.querySelector('#barra10 .quantidade').textContent);

    var maiornota = 0;
    var arr = [nota1,
               nota2,
               nota3,
               nota4,
               nota5, 
               nota6, 
               nota7, 
               nota8, 
               nota9, 
               nota10
              ];

    maiornota = Math.max.apply(null,arr);
    
    var barras = [  document.getElementById('barra1'),
                    document.getElementById('barra2'),
                    document.getElementById('barra3'),
                    document.getElementById('barra4'),    
                    document.getElementById('barra5'),
                    document.getElementById('barra6'),
                    document.getElementById('barra7'),
                    document.getElementById('barra6'),
                    document.getElementById('barra8'),
                    document.getElementById('barra9'),
                    document.getElementById('barra10'),
                 ]

    barras.forEach(function(barra) {
        var quantidade = parseInt(barra.querySelector('.quantidade').textContent);

        if (quantidade === maiornota) {
            barra.style.height = '100%';
        } 
        else {
            barra.style.height = `${(quantidade / maiornota) * 100}%`;
        }

    });
});
