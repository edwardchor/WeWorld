/**
 * Created by EdwardChor on 7/30/15.
 */

var localIds={};

$(document).ready(function(){

        document.body.addEventListener('touchmove', function (event) {
            event.preventDefault();
        }, false);

    var upBtn=document.getElementById("up-button");
    var downBtn=document.getElementById("down-button");
    var leftBtn=document.getElementById("left-button");
    var rightBtn=document.getElementById("right-button");
    var chooseBtn=document.getElementById("chooseImage");
    var getBtn=document.getElementById("getImage");

    upBtn.addEventListener("click",function(){
        lastBackAnimation();
        lastBackImage();

    });

    downBtn.addEventListener("click", function () {
        nextBackAnimation();
        nextBackImage();
    });

    leftBtn.addEventListener("click",function() {
        lastFrontAnimation();
        lastFrontImage();
    });

    rightBtn.addEventListener("click",function(){
        nextFrontAnimation();
        nextFrontImage();
    });

    chooseBtn.addEventListener("click",function(){
        diyBack();
    });

    getBtn.addEventListener("click",function(){
       getImage();
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

    function lastBackAnimation(){
        var last=$("#lastBackPic");
        var cur=$("#currentBackPic");
        var next=$("#nextBackPic");
/*
        last.animate({
            top:'+=300px',
            opacity:'1'
        });

        cur.animate({
            top:'+=300px',
            opacity:'0.3'
        });

        next.animate({
            top:'+=300px',
            opacity:'0'
        })*/
    }

    function nextBackAnimation(){

    }

    function lastFrontAnimation(){

    }

    function nextFrontAnimation(){

    }

    function diyBack(){
        alert("choose image!");
        wx.chooseImage({
            count: 1, // 默认9
            sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
            sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
            success: function (res) {
               localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
                wx.uploadImage({
                    localId: localIds[0], // 需要上传的图片的本地ID，由chooseImage接口获得
                    isShowProgressTips: 1, // 默认为1，显示进度提示
                    success: function (res) {// 返回图片的服务器端ID
                        alert("serverId: "+res.serverId);
                        $.post("response/saveImage.php",{media_id:res.serverId},function(data,status){
                            alert(data.src);
                            $("#currentBackPic").attr('src',data.src);
                        },"json")
                    }
                });

            }
        });
    }


    function getImage(){
        alert("getImage!");
        var back=$("#currentBackPic").attr('src');
        var front=$("#currentFrontPic").attr('src');

        $.post("response/progress.php",{back:back,front:front},function(data,status){

            var worldmapSrc=data.worldmapSrc;

        },'json')
    }
});

