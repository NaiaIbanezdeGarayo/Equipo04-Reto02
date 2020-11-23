$.document.ready(function(){
    $("#logout").on('click', function(){
        $.ajax({
            url: '../php/logout.php'
        })
    });
});
