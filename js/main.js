// nav
$(function(){
    let nav = $("nav ul li");

     nav.each(function(){
        $(this).click(function(){
            let idx = $(this).index();
            let section_idx = $("section").eq(idx);
            let offset_top = section_idx.offset().top;
            
            $("html, body").animate({
                "scrollTop" : offset_top
            },500)
        })
    })
    
    let window_w = $(window).width()
    if(window_w<1024){
        let menu = $("header .menu");
        menu.click(function(){
            $("nav").toggleClass("on")
        })

    };

    let section = $("#container section");
            
      
        $(window).scroll(function(){
          var st=$(window).scrollTop(); //스크롤 위치
          var bt=$(document).height()-$(window).height();
      
          if(st>=50){
         
          }else{
        
          };    
        
          section.each(function(){
            var i=$(this).index();
            var tt=$(this).offset().top;
            if(st >= tt -100){
                nav.removeClass("on"); //스크롤했을때 메뉴 색 변경
                nav.eq(i).addClass("on");
            };
            if(st==bt){
                nav.removeClass("on");
                nav.eq(i).addClass("on");
            };
          });    
        });   

})
// header 스크롤시 rotate
$(function(){
    $(window).scroll(function(){
        let st = $(window).scrollTop() / 10;
        let h1_trans = "rotate("+ -1 * st + "deg)";

        if(st<90){
            $("h1 a").css({
                "transform":h1_trans
            })
        }else{
            $("h1 a").css({
                "transform":"rotate(-90deg)"
            })
        }

            $(".cont1 .title").css({
                "opacity":1-st/50
            })

    })
})

// 스크를 프로그래스바
// top 버튼 
$(window).scroll(function(){
    let sc_st = $(window).scrollTop();
    let sc_dh = $(document).height();
    let sc_wh = $(window).height();
    let sc_ww = $(window).width();
    let scroll_em = (sc_st / (sc_dh - sc_wh)) * 100;
    
    $(".scroll_bar").css({
        "width": scroll_em + "%"
    });

    if(sc_st>200 && sc_ww>1024){
        $(".top_btn").show();
    }else{        
        $(".top_btn").hide();
    }

})

$(".top_btn").click(function(){
    $("html, body").animate({
        scrollTop: 0
    },500)
})


// scroll tranform .title_line / cont2 em
function trans(e){  
    $(".title_line").css({
      "transform":"translate(-50%, calc("+e+"%)) rotate(90deg)"
    })
}
  
  $(window).scroll(function(){
    trans(-50);
    setTimeout(() => trans(0),300)
  })

  function trans2(e){  
    $(".cont2 .profile .desc em").css({
      "transform":"rotate("+e+"deg)"
    })
}
  
  $(window).scroll(function(){
    trans2(-5);
    setTimeout(() => trans2(0),300)
  })

// cont5 slick

  $('.end').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 10000,
    autoplaySpeed:0, 
    arrows: false,
    cssEase: 'linear'
  });

  // mobile open
    $(".sub .more.mobile").click(function(){
        let link = $(this).attr("data-link");

        window.open(link, "_blank", "width=500px, height=800px, top=50px, left=300px, scrollbar=no, resizable=no");

    })
// work 헤더 디플논
$(function(){

    let loca = window.location.href;
    console.log(loca);

    if(loca.match("work")){
        $("header").css({"display":"none"});
    }
    if(loca.match("id")){
        $(".load").css({"display":"none"});
    }
})

//로드페이지
setTimeout(() => {
    $(".load").addClass('on')
    $(".cont1 .title").addClass('on')
}, 700);


//skill attr
    let em = $(".think .skill span em");

    em.each(function(){
        let text = $(this).text();
        let length = $(this).attr("data-length");

        $(this).append("<em>"+text+"</em>");

        $(this).find("em").css({
            // "width":length+"%"
        })


    $(window).scroll(function(){
        let st = $(this).scrollTop();
        let cont3_offset = $(".cont3").offset().top;

        em.each(function(){
            let length = $(this).attr("data-length");

            if(st>cont3_offset-200){
                $(this).find("em").css({
                    "width":length+"%"
                })
            }else{
                em.find("em").css({
                    "width":0
                })
            }

        })
    })
})

$(window).scroll(function(){
    let st = $(this).scrollTop();
    let cont2_top = $(".cont2").offset().top;

    if(st<cont2_top){
        $("#container section.cont1").css({
            "transform":"translateY(" + st * -1.1 + "px)"
    })

    }
})