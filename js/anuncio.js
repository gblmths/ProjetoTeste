$('select').material_select();
//Searcher
$("input").on(function(event) {
    var value = $(this).val();
    if (event.which == 13) {
        event.preventDefault();
    }
    //console.log("Filter..."+value);
    //renderCards(filterByAttr("title",value, data));
    renderCards(applyFilters());
});



function filterByAttr(attr, value, data) {
    //console.log(data);
    var value = value.toLowerCase();
    return $.grep(data, function(n, i) {
        return n[attr].toLowerCase().indexOf(value) != -1;

    });
}

function applyTitleFilter(data) {
    var value = $('#search').val();
    return filterByAttr("nome", value, data);
}


function renderCards(data) {
    console.log("RENDERING");
    var html = '';
    $.each(data, function(key, value) {

        html += '<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-azul rounded box-shadow mt-5"><div class="lh-100 col-lg-12 "><div class="media text-muted pt-3"><img data-src="holder.js/40x40?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded-circle" style="width: 40px; height: 40px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_172be683a78%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_172be683a78%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"data-holder-rendered="true"><div class="media-body pb-3 mb-0 small lh-125" id=""><strong class="d-block text-gray-dark border-bottom border-gray ">' + value.nome + '</strong><p><h5 class="text-dark">E-mail: <strong class="strong">' + value.email + '</strong></h5></p><p><h5 class="text-dark">Matéria(s): <strong class="strong">' + value.materia + '</strong></h5></p><p><h5 class="text-dark">Estado: <strong class="strong">' + value.estado + '</strong></h5></p><p><h5 class="text-dark">Cidade: <strong class="strong">' + value.cidade + '</strong></h5></p><p><h5 class="text-dark">Bairro: <strong class="strong">' + value.bairro + '</strong></h5></p><p><h5 class="text-dark">Valor da aula: <strong class="strong">' + value.valor + '</strong></h5></p><p><h5 class="text-dark">Formação: <strong class="strong">' + value.formacao + '</strong></h5></p><hr><div class="" style="float: right;"><button type="button" class="btn btn-outline-success">Vincular ao professor</button><button type="button" class="btn btn-outline-primary">Entrar em Contato</button></div></div></div></div></div>';

        html += '</div>';
    });
    $('#anuncio').html(html);

}


var data = [{
        "id": 1,
        "nome": " alex",
        "email": "alex@gmail.com",
        "materia": "Matematica",
        "estado": "Pernambuco",
        "cidade": "Recife",
        "bairro": "Casa forte",
        "valor": "80",
        "formacao": "Matematica"
    },
    {
        "id": 2,
        "nome": "Taller",
        "email": "Taller@gmail.com",
        "materia": "Todas",
        "estado": "Pernambuco",
        "cidade": "Olinda",
        "bairro": "Casa Caida",
        "valor": "50",
        "formacao": "Pedagogia"
    },
    {
        "id": 3,
        "nome": "Laura",
        "email": "laura@gmail.com",
        "materia": "Biologia/Ciência",
        "estado": "Pernambuco",
        "cidade": "Paulista",
        "bairro": "Jardim Paulista",
        "valor": "60",
        "formacao": "Biologia"
    },
    {
        "id": 4,
        "nome": "Paulo",
        "email": "Paulo@gmail.com",
        "materia": "Todas",
        "estado": "Pernambuco",
        "cidade": "Camaragibe",
        "bairro": "Santa Monica",
        "valor": "40",
        "formacao": "Pedagogia"

    }
];

renderCards(data);




//FILTER EVENTS:


$(".event-type-filter").change(function() {
    renderCards(applyFilters());
    //renderCards(applyEventTypeFilter());
});



function applyEventTypeFilter(data) {
    var result = [];
    $('input[name="event-type-filter"]:checked').each(function() {
        console.log(this.value);
        var filtered = filterByAttr("event_type", this.value, data);
        result = mergeJSONObjectsRemovingDuplicates(result, filtered);
    });
    return result;
}

function applyFilters() {
    var eventArray = [];

    eventArray = applyEventTypeFilter(data);

    eventArray = applyTitleFilter(eventArray);
    return eventArray;
}




//HELPER
function mergeJSONObjectsRemovingDuplicates(arr1, arr2) {
    $.merge(arr1, arr2);

    var existingIDs = [];
    arr1 = $.grep(arr1, function(v) {
        if ($.inArray(v.id, existingIDs) !== -1) {
            return false;
        } else {
            existingIDs.push(v.id);
            return true;
        }
    });
    return arr1;
}