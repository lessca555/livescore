$('.score').hide();

$('#play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show();
    // console.log('baaa');
    
    let i=0;
    let x=0;
    $('#player_kiri').val(i);
    $('#player_kanan').val(x);

    $('#score_kiri').click(function() {
        $('#player_kiri').val(i++);
    });

    $('#score_kanan').click(function() {
        $('#player_kanan').val(x++);
    });
});

$('#tim-b').hide();
$('#tim-a').hide();
$('.tim-1').click(function(){
    $('#tim-b').show();
    $('#tim-a').hide();
});
$('.tim-2').click(function(){
    $('#tim-a').show();
    $('#tim-b').hide();
});

