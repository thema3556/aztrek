$(document).ready(function(){
    
    $("select").select2();
    $("textarea").summernote();
    $("table").DataTable();
    
    // Confirmation sur suppression
    $(".form-delete").submit(function(event) {
        var reponse = confirm("Êtes-vous certain ?");
        if (!reponse) {
            event.preventDefault();
        }
    });
    
});
