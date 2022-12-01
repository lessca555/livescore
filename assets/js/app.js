$('.score').hide();

$('.play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show();
    // console.log('baaa');
    let i=1;
    let x=1;


    $('#score_kiri').click(function() {
        $('#player_kiri').val(i++);
        $('.p1a').appendTo('.player1-b');
        $('.1a').appendTo('.player1-b');
        $('.p1b').appendTo('.player1-a');
        $('.1b').appendTo('.player1-a');
    });

    $('#score_kanan').click(function() {
        $('#player_kanan').val(x++);
        $('.p2a').appendTo('.player2-b');
        $('.2a').appendTo('.player2-b');
        $('.p2b').appendTo('.player2-a');
        $('.2b').appendTo('.player2-a');
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

$('.tim_a1').click(function(){
    $('.1a').prepend("<img src='assets/img/cock.png' alt=''>");
});

$('.tim_a2').click(function(){
    $('.1b').prepend("<img src='assets/img/cock.png' alt=''>");
});

$('.tim_b1').click(function(){
    $('.2a').prepend("<img src='assets/img/cock.png' alt=''>");
});

$('.tim_b2').click(function(){
    $('.2a').prepend("<img src='assets/img/cock.png' alt=''>");
});

