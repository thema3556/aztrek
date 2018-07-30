$(document).ready(function(){
    
    $("select").select2();
    $("table").DataTable();
    
    // Confirmation sur suppression
    $(".form-delete").submit(function(event) {
        var reponse = confirm("Êtes-vous certain ?");
        if (!reponse) {
            event.preventDefault();
        }
    });
    
});
