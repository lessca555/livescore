const round_ov = new bootstrap.Modal('#round_over', {
    
});

$('.score').hide();

$('.play').click(function() {
    $( "#play" ).hide();
    $( ".score" ).show();
    // console.log('baaa');
    let x=1;
    let i=1;
    let current = -1;

    function swapContent(a, b){
        tmp = $(a).html()
        $(a).html($(b).html())
        $(b).html(tmp)
    }  

    $('#score_kiri').click(function() {
        $('#player_kiri').val(i++);
        swapContent('.player1-a', '.player1-b');
        
        // console.log($('.1b').html(), $('.1a').html());
        if (current != 1){
            current = 1;
            swapContent('.1b', '.2b');
            swapContent('.1a', '.2a');
        }else{
            
        }
    });
    
    

    $('#score_kanan').click(function() {
        $('#player_kanan').val(x++);
        swapContent('.player2-a', '.player2-b');

        if (current != 2){
            current = 2;
            swapContent('.1a', '.2a');
            swapContent('.1b', '.2b');
        }else{
            
        }
    });

    let cocks=1;

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

