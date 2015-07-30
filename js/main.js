/**
 * Created by EdwardChor on 7/30/15.
 */

$(document).ready(function(){

    document.body.addEventListener('touchmove', function (event) {
        event.preventDefault();
    }, false);

    var upBtn=document.getElementById("up-button");
    var downBtn=document.getElementById("down-button");
    var leftBtn=document.getElementById("left-button");
    var rightBtn=document.getElementById("right-button");

    upBtn.addEventListener("click",function(){
        lastBackImage();

    });

    downBtn.addEventListener("click", function () {
        nextBackImage();
    });

    leftBtn.addEventListener("click",function() {
        lastFrontImage();
    });

    rightBtn.addEventListener("click",function(){
        nextFrontImage();
    });


    function nextFrontImage(){
        var last=$("#lastFrontPic");
        var cur=$("#currentFrontPic");
        var next=$("#nextFrontPic");

        var temp=last.attr('src');
        last.attr('src',cur.attr('src'));
        cur.attr('src',next.attr('src'));
        next.attr('src',temp);

    }


    function lastFrontImage(){
        var last=$("#lastFrontPic");
        var cur=$("#currentFrontPic");
        var next=$("#nextFrontPic");
        var temp=next.attr('src');
        next.attr('src',cur.attr('src'));
        cur.attr('src',last.attr('src'));
        last.attr('src',temp);
    }

    function lastBackImage(){
        var last=$("#lastBackPic");
        var cur=$("#currentBackPic");
        var next=$("#nextBackPic");
        var temp=next.attr('src');
        next.attr('src',cur.attr('src'));
        cur.attr('src',last.attr('src'));
        last.attr('src',temp);
    }

    function nextBackImage(){
        var last=$("#lastBackPic");
        var cur=$("#currentBackPic");
        var next=$("#nextBackPic");

        var temp=last.attr('src');
        last.attr('src',cur.attr('src'));
        cur.attr('src',next.attr('src'));
        next.attr('src',temp);
    }

});



