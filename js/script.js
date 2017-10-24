$(function(){
	$("#header").load("header.html");
	$("#footer").load("footer.html");
});
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
$(function(){
		$(".small-images a").mouseenter(function(){
			var change = $(this).attr("href");
		$(".product-slider img").fadeOut(1000,function(){
			$(".product-slider img").attr("src",change)
			$(".product-slider img").fadeIn();
		});
		return false;
	});
});
$(function(){
            var  prize=parseInt($('.item-price').text());

            $(".add").click(function(){
                var s=parseInt($('.quantity').text());
                s=s+1;
                var totalamount=s*prize;
                $('.quantity').text(s);
                $('.total').text(totalamount);
            });
            $('.minus').click(function(){
                var s=parseInt($('.quantity').text());
                s=s-1;
                if(s<0)
                {
                    s=0
                }
                var totalamount=s*prize;
                $('.quantity').text(s);
                $('.total').text(totalamount);
            });
            $(".cross").click(function(){
                $(".item-headings").hide(1000);
            });
});