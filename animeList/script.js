

function parseCSV(csvData) {

    var rows = csvData.split("\n");


    var header = rows.shift();


    for (var i = 0; i < rows.length; i++) {
        var columns = rows[i].split(";");
    


        var animeElement = document.createElement("div");
        animeElement.className = "anime";

 
        var titleElement = document.createElement("h2");
        titleElement.textContent = columns[1];
        animeElement.appendChild(titleElement);


        var descriptionElement = document.createElement("p");
        descriptionElement.textContent = columns[3];
        animeElement.appendChild(descriptionElement);
        
        var btnAssistindo = document.createElement("button");
        btnAssistindo.textContent = "Assistindo";

        var btnPlanejado = document.createElement("button");
        btnPlanejado.textContent = "Planejado";

        var btnCompletado = document.createElement("button");
        btnCompletado.textContent = "Completado";

        var btnDropado = document.createElement("button");
        btnDropado.textContent = "dropado";

        animeElement.appendChild(btnAssistindo);
        animeElement.appendChild(btnCompletado);
        animeElement.appendChild(btnDropado);
        animeElement.appendChild(btnPlanejado);

        document.getElementById("animeList").appendChild(animeElement);

    }
}


var xhr = new XMLHttpRequest();
xhr.open("GET", "anime-data.csv", true);
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        parseCSV(xhr.responseText);
    }
};
xhr.send();


function search(query) {

    var animeElements = document.querySelectorAll('.anime');


    for (var i = 0; i < animeElements.length; i++) {
        var titleElement = animeElements[i].querySelector('h2');
        var descriptionElement = animeElements[i].querySelector('p');


        var title = titleElement.textContent;
        var description = descriptionElement.textContent;

        if (title.toLowerCase().includes(query.toLowerCase()) || description.toLowerCase().includes(query.toLowerCase())) {
            animeElements[i].style.display = 'block';
        } else {
            animeElements[i].style.display = 'none';
        }
    }
}


document.getElementById('searchInput').addEventListener('input', function() {
    var query = this.value;
    search(query);
});