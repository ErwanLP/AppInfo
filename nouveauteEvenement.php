<div class="babar">
    <div id="slider">
        <a href="#"><img border="0" src="img/alexbeach.jpg" height="219" width="400" /></a><a href="#"><img border="0" src="img/avatar.jpg" height="219" width="400" /></a><a href="#"><img border="0" src="img/avatar.jpg" height="219" width="400" /></a><a href="#"><img border="0" src="img/avatar.jpg" height="219" width="400" /></a><a href="#"><img border="0" src="img/avatar.jpg" height="219" width="400" /></a>
    </div>
</div>
<p class="titreNews"> NEWS</p>
<button id="bmoins" title="nouveauté précédente"><</button>
<button id="bplus" title="nouveauté suivante">></button><br/><br/>
<div id="lien"></div>
<script>

    var v2 = $("#slider img").length;
    var count1 = 0;

    for(var i = 1; i <=v2; i++) 
    {
        $("#lien").append("<a class='slide' rel='"+i+"'><b>"+i+"</b></a> ");
    }

    $('a.slide').click(function() {
        var image = $(this).attr("rel");
        var animation = image*400-400;
        $("#slider").animate({left: "-"+animation+"px"}, 300, 'swing');
        var count1 = image-1;
    });

    $('#bplus').click(function() {
        count1++;
        if(count1 == v2){
            $("#slider").animate({left: "0px"}, 300, 'swing');
            count1 = 0;
        }else{
            $("#slider").animate({left: "-=400px"}, 300, 'swing');
        }
    }); 

    $('#bmoins').click(function() {
        var Left = parseInt($("#slider").css("left"));
        if(Left == 0){
            var fin = v2*400-400;
            $("#slider").animate({left: "-"+fin+"px"}, 300);
            count1 = v2-1;
        }else{
            count1--;
            $("#slider").animate({left: "+=400px"}, 300);
        }
    });

</script>