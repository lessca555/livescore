$('.score').hide();

$('#play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show();
    // console.log('baaa');
    
    let i=0;
    let x=0;
    $('#player_kiri').text(i);
    $('#player_kanan').text(x);

    $('#score_kiri').click(function() {
        $('#player_kiri').text(i++);
    });

    $('#score_kanan').click(function() {
        $('#player_kanan').text(x++);
    });
});