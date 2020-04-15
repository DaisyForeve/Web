
window.onload=function(){
    var box=document.getElementById('box');
    var inner=box.getElementsByTagName('div')[0];
    var big=document.getElementById('big');
    var Img=big.getElementsByTagName('img')[0];

    box.onmouseover=function(){
        inner.style.display="block";
        big.style.display="block";
    }

    box.onmousemove=function(event){
        event = event|| window.event;

        var left=event.pageX-box.offsetLeft-inner.offsetWidth/2;
        var top=event.pageY-box.offsetTop-inner.offsetHeight/2;
        console.log(left,top);
        if(left<=0){
            left=0;
        }else if(left>=box.offsetWidth-inner.offsetWidth){
            left=box.offsetWidth-inner.offsetWidth;
        }
        if(top<=0){
            top=0;
        }else if(top>=box.offsetHeight-inner.offsetHeight){
            top=box.offsetHeight-inner.offsetHeight;
        }
        console.log(box.offsetTop-document.body.scrollTop);
        inner.style.left=left+"px";
        inner.style.top=top+"px";

        var left2=left/(box.offsetWidth-inner.offsetWidth)*(big.offsetWidth-Img.offsetWidth);
        var top2=top/(box.offsetHeight-inner.offsetHeight)*(big.offsetHeight-Img.offsetHeight);

        Img.style.left=left2+"px";
        Img.style.top=top2+"px";
    }

    box.onmouseout=function(){
        inner.style.display="none";
        big.style.display="none";
    }
}
