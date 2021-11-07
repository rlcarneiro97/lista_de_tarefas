document.querySelector('form input').oninvalid = function(evt) {
    evt.preventDefault();
    if (!this.validity.valid) {
        // alert("O campo \"Tarefa\" é obrigatório!");
        document.getElementById("warning").style.visibility = "visible";
        // $("#tarefa").html('<p id="warning" style="color: red;">* Campo Obrigatório! *</p>');
    }
};