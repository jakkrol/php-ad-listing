$(document).ready(function(){
    search();
})

function search() {

  $(".box").each(function() {
    if($("#searcher").val() == ""){
        $(this).show();
    }else{
        var x = $(this).find(".title").text();
        var x2 = $(this).find(".firma").text();
        var x3 = $(this).find(".adres").text();
        const regex = new RegExp($("#searcher").val() + "+")
        if((regex.test(x)) || (regex.test(x2)) || (regex.test(x3))){
            $(this).show();
        }else{
            $(this).hide();
        }
    }
  })
}

const source = document.getElementById('searcher');

source.addEventListener('input', search);

