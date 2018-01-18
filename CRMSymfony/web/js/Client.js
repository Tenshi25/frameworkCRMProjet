$(function () {
    $("tr").on("click", function(e) {
        click: function() {
            var elt = this;
                // id de l'element
            var idClient = this.getAttribute('data-id');
            console.log(idClient);
        }
    }
}