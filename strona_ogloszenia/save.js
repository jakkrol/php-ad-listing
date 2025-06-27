function Save(Id) {
    console.log(Id);
    // var Id = $("#imieF").val();
    $(".Save").hide();
    $.post("saveAdvert.php", { Id: Id, Save: "save"},
    function(data) {
	 //$('#resultsDoswiadczenie').html(data);
    });


}

function Delete(Id) {
    console.log(Id);
    // var Id = $("#imieF").val();

    $.post("saveAdvert.php", { Id: Id, Save: "delete"},
    function(data) {
	 //$('#resultsDoswiadczenie').html(data);
    });


}



function alreadySaved(){
    $(".Save").hide();
}