<footer>
    <p> Made by <em> Groupe G8c </em> - Tous droits r&eacute;serv&eacute;s</p>
    <p> Site optimis&eacute; pour <a href="http://www.google.com/intl/fr/chrome/browser/">Google Chrome</a></p>
    <img style="margin:auto;" src="img/userbarG8c.png"  >
</footer>
</body>
</html>

<script type="text/javascript">

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
            $("#slider").animate({left: "0px"}, 400, 'swing');
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