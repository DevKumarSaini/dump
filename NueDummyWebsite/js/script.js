var cur = document.querySelector("#cursor")
var cblur = document.querySelector("#cursor-blur")

//  This code is for mouse tracking
document.addEventListener("mousemove", function (dets){
    cur.style.left = dets.x + "px"
    cur.style.top = dets.y + "px"
    cblur.style.left = dets.x -200  + "px"
    cblur.style.top = dets.y  -200   + "px"
})


//  This code is for nav bar
gsap.to("#nav",{
    backgroundColor : "#000",
    duration : 0.5,
    height : "80px",
    scrollTrigger:{
        trigger : "nav",
        scroller : "body",
        // markers : true,
        start : "top -10%",
        end : "top -11%",
        scrub : 1,
    },
})

gsap.to("#main",{
    backgroundColor : "#000",
    scrollTrigger :{
        trigger : "main",
        scroll : "body",
        start : "top -25%",
        end : "top -70%",
        scrub : 2,
    },
})