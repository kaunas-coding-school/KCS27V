$(function(){

    let personsJson;
    $.get('/darbai/oop/studentai/?format=json', function (response) {
        personsJson = response;
        let personsArray = JSON.parse(personsJson);

        let html = '';
        for (let i = 0; i < personsArray.length; i++){
            let person = personsArray[i];
            html += 'Vardas: ' + person.name + '<br>';
            html += 'Pavarde: ' + person.surename + '<br>';
            html += 'El-pastas: ' + person.email + '<br>';
            html += 'Tel.nr.: ' + person.phone + '<hr>';
        }
        $('#persons').html(html);
    });


});