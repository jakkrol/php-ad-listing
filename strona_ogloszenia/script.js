// $(function(){
//     $('#submit').click(function(){
//       $('#container').append('loading');
//         var sthis = $('#sthis').val();
//         $.ajax({
//            url: 'f.php' , 
//            type: 'POST',
//            data: 'sthis: ' + sthis,
//            success: function(result){     
//              $('#container').append('<p>' +     result + '</p>')      
//            }
//         });   
//         return false;     
//      });
//   });

$(document).ready(function(){
    $("#UserProfileForm").hide();
    $("#UserUmietnosciForm").hide();
    $("#UserLinkiForm").hide();
    //$(".umietnosci_list li:first-of-type").remove();
})

function EditUser(){
    if($("#UserProfile").is(":visible")){
        $("#UserProfile").hide();
        $("#UserProfileForm").show();
    }else{
        $("#UserProfile").show();
        $("#UserProfileForm").hide();
    }
}

function EditUmietnosci(){
    if($("#UserUmietnosci").is(":visible")){
        $("#UserUmietnosci").hide();
        $("#UserUmietnosciForm").show();
    }else{
        $("#UserUmietnosci").show();
        $("#UserUmietnosciForm").hide();
    }
}

function EditLinki(){
    if($("#UserLinki").is(":visible")){
        $("#UserLinki").hide();
        $("#UserLinkiForm").show();
    }else{
        $("#UserLinki").show();
        $("#UserLinkiForm").hide();
    }
}

function SubmitOpis() {
    var imie = $("#imieF").val();
    var nazwisko = $("#nazwiskoF").val();
    var data_ur = $("#data_urF").val();
    var numer = $("#numerF").val();
    var zamieszkanie = $("#zamieszkanieF").val();
    var stanowisko = $("#stanowiskoF").val();
    

    $.post("addToUserProfile.php", { imie: imie, nazwisko: nazwisko, data_ur: data_ur, numer: numer, stanowisko: stanowisko, zamieszkanie: zamieszkanie},
    function(data) {
	 //$('#resultsDoswiadczenie').html(data);
	 $('#myForm')[0].reset();
    });

    $("#imie").text(imie);
    $("#nazwisko").text(nazwisko);
    $("#data_ur").text(data_ur);
    $("#numer").text(numer);
    $("#akt_stanowisko").text(stanowisko);
    $("#akt_zamieszkanie").text(zamieszkanie);

    $("#UserProfile").show();
    $("#UserProfileForm").hide();
}

function SubmitUmietnosci() {
    var umietnosci = $("#umietnosci").val();

    $.post("addToUserProfile.php", { umietnosci: umietnosci},
    function() {
	 $('#myForm')[0].reset();
    });

    //$(".umietnosci_list").first().remove();

    var umietnosci_l = umietnosci.split(',');
    $('#umietnosci').attr('value', umietnosci_l);
    console.log($("#umietnosci").val());
    $(".umietnosci_list").html("");
    for(var i = 0; i < umietnosci_l.length; i++){
        $(".umietnosci_list").append('<li>'+ umietnosci_l[i] +'</li>');
    }

    $("#UserUmietnosci").show();
    $("#UserUmietnosciForm").hide();
    console.log($("#umietnosci").val());
}

function SubmitLinki() {
    var linki = $("#linki").val();

    $.post("addToUserProfile.php", { linki: linki},
    function(data) {
	 $('#myForm')[0].reset();
    });

    //$(".umietnosci_list").first().remove();

    var linki_l = linki.split(',');
    $('#linki').attr('value', linki_l);
    $(".linki_list").html("");
    for(var i = 0; i < linki_l.length; i++){
        $(".linki_list").append('<li>'+ linki_l[i] +'</li>');
    }

    $("#UserLinki").show();
    $("#UserLinkiForm").hide();
}

function SubmitDoswiadczenie() {
    var stanowisko = $("#stanowisko").val();
    var lokalizacja = $("#lokalizacja").val();
    var firma = $("#firma").val();
    var okres = $("#okres").val();

    $.post("addToUserProfile.php", { stanowisko: stanowisko, lokalizacja: lokalizacja, firma: firma, okres: okres},
    function(data) {
        $('#myForm').each(function(){ 
            this.reset();
        });
	 $('#resultsDoswiadczenie').append(data);
    });  
}

function SubmitKursy() {
    var nazwa = $("#nazwaKurs").val();
    var organizator = $("#organizatorKurs").val();
    var okres = $("#okresKurs").val();

    $.post("addToUserProfile.php", { nazwa: nazwa, organizator: organizator, okres: okres},
    function(data) {
        $('#myForm').each(function(){
            this.reset();
        });
	 $('#resultsKursy').append(data);
    });
}

function SubmitJezyk() {
    var jezyk = $("#jezyk").val();
    var poziom = $("#poziom").val();

    $.post("addToUserProfile.php", { jezyk: jezyk, poziom: poziom},
    function(data) {
        $('#myForm').each(function(){
            this.reset();
        });
	 $('#resultsJezyk').append(data);
    });
}

function SubmitWyksztalcenie() {
    var szkola = $("#szkolaWyksztalcenie").val();
    var poziom = $("#poziomWyksztalcenie").val();
    var kierunek = $("#kierunekWyksztalcenie").val();
    var okres = $("#okresWyksztalcenie").val();

    $.post("addToUserProfile.php", { szkola: szkola, poziom: poziom, kierunek: kierunek, okres: okres},
    function(data) {
        $('#myForm').each(function(){
            this.reset();
        });
	 $('#resultsWyksztalcenie').append(data);
    });
}