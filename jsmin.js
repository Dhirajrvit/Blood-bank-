$(window).on("load",function(){
    $("p.show").hide();
    $("p.hide").hide();
});
$(document).ready(function(){
    /*$("#n").change(function(){
        var num = $(this).val();
        
        if(num>5)
        {
            $("p.show").show(1000);
            $("p.hide").hide();
        }
        else{
        $("p.show").hide();
        $("p.hide").show(1000);
        }
    });*/
    $("h1").mouseenter(function(){
        $("p.show").show(1000);
        $("p.hide").hide();
    });
    $("h1").mouseleave(function(){
        $("p.show").hide();
        
    });
       
        });

    
   