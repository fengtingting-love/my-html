//因为worker无法请求本地文件，故该文件只描述写法，并不能在本地使用哦
var i=0;
console.log(11111);
function timedCount()
{
    i=i+1;
    postMessage(i);
    setTimeout("timedCount()",500);
}

timedCount();