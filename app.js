$('#uppercase').change(function() {
    if(this.checked) {
       $("#alph").val($("#alph").val() + "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    }

    else {
        var value = $("#alph").val().replace("ABCDEFGHIJKLMNOPQRSTUVWXYZ", "");
        $("#alph").val(value);
    }
});

$('#lowercase').change(function() {
    if(this.checked) {
       $("#alph").val($("#alph").val() + "abcdefghijklmnopqrstuvwxyz");
    }

    else {
        var value = $("#alph").val().replace("abcdefghijklmnopqrstuvwxyz", "");
        $("#alph").val(value);
    }
});

$('#digits').change(function() {
    if(this.checked) {
       $("#alph").val($("#alph").val() + "0123456789");
    }

    else {
        var value = $("#alph").val().replace("0123456789", "");
        $("#alph").val(value);
    }
});

$('#special').change(function() {
    if(this.checked) {
       $("#alph").val($("#alph").val() + "!$%?-_");
    }

    else {
        var value = $("#alph").val().replace("!$%?-_", "");
        $("#alph").val(value);
    }
});

$("#alph").val("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!$%?-_");