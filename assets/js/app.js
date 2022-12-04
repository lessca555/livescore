const round_ov = new bootstrap.Modal('#round_over', {
    
});
//cock position
let a1 = $('.1a');
let a2 = $('.1b');
let b1 = $('.2a');
let b2 = $('.2b');

//players
$('.p1a').html("<h4>Samsudin</h4>");
$('.p1b').html("<h4>Joko</h4>");
$('.p2a').html("<h4>Sugiri</h4>");
$('.p2b').html("<h4>Widodo</h4>");

let x=1;
let i=1;
let current = -1;
let ball = "<img src='assets/img/cock.png' alt=''>";

$('#slc_team1').click(function(){
    //swap pemain kiri ke kanan
    $('.p1a').appendTo('.player2-a')
    $(a1).appendTo('.player2-a')
    $('.p1b').appendTo('.player2-b')
    $(a2).appendTo('.player2-b')
    
    //swap pemain kanan ke kiri
    $('.p2a').appendTo('.player1-a')
    $(b1).appendTo('.player1-a')
    $('.p2b').appendTo('.player1-b')
    $(b2).appendTo('.player1-b')
    
    //swap score board
    $('#player_kiri').appendTo('.tim-b')
    $('#player_kanan').appendTo('.tim-a')

    //swap button score
    $('#score_kiri').appendTo('.sc_kanan')
    $('#score_kanan').appendTo('.sc_kiri')
});

$('#slc_team1').click(function(){
    current = 2;
})

$('.tim_a1').click(function(){
    $(a1).prepend(ball);
    current = 1;
    // console.log(current);
});

$('.tim_a2').click(function(){
    $(a2).prepend(ball);
    current = 1;
    // console.log(current);
});

$('.tim_b1').click(function(){
    $(b1).prepend(ball);
    current = 2;
    // console.log(current);
});

$('.tim_b2').click(function(){
    $(b2).prepend(ball);
    current = 2;
    // console.log(current);
});


$('.score').hide();

$('.play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show();
    // console.log('baaa');
    

    function swapContent(a, b){
        tmp = $(a).html()
        $(a).html($(b).html())
        $(b).html(tmp)
    }  

    $('#score_kiri').click(function() {
        $('#player_kiri').val(i++);
        swapContent('.p1a', '.p1b')
        swapContent(a1, a2)
        
        // console.log($('.1b').html(), $('.1a').html());
        if (current != 1){
            current = 1;
            swapContent(a1, b2);
            swapContent(a2, b1);
        }
        console.log(current);
    });
    
    

    $('#score_kanan').click(function() {
        $('#player_kanan').val(x++);
        swapContent('.p2a', '.p2b')
        swapContent(b1, b2)

        if (current != 2){
            current = 2;
            swapContent(b1, a2);
            swapContent(b2, a1);
        }
        
        console.log(current);
    });

    let cocks = 1;

    $('#minus_cock').click(function(){
        $('#jumlah_cock').val(cocks--);
    });

    $('#plus_cock').click(function(){
        $('#jumlah_cock').val(cocks++);
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

