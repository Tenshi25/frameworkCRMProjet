$(function () {
    $("tr").on("click", function(e) {
        click: function() {
            var elt = this;
            // id de l'element
            var idClient = this.getAttribute('data-id');
            console.log(idClient);
        }
        $.ajax({
            method:"POST",
            url: '../Ressources/Ajax/AjaxPopupCreationPacte.php',
            data: {
                idClient: idClient,

            },
            success: function(data)
            {
                $.ajax({
                    method:"POST",
                    url: '/afficheClient',
                    data: {
                        idClient : idClient
                    },
                    success: function(data)
                    {
                        var div=document.getElementById('contenuCentral').innerHTML = data;
                        console.log(div);
                    }
                });
            }
        });
    }
}