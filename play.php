<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<title>播放器</title>
<style type="text/css">body,html,div{padding: 0;margin: 0;width:100%;height:100%;}</style>
</head>
<body>
<div id="a1"></div>
<script type="text/javascript" src="../ck/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
    var flashvars={
<?php 
if(preg_match("/m3u8/",$_SERVER["QUERY_STRING"])||preg_match("/zip/",$_GET['url'])){
echo "        f: '/ck/m3u8.swf',
        a: '".$_GET['url']."',
        c:0,
        s:4,
        lv:0,
        p:1,
        v:100,
        b:1";	
}else{
echo "        f:'".$_GET['url']."',
        c:0,
        p:1,
        v:100,
        h:3";	
}
?>

    };
        var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
        var isiPad = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
    if (isiPad) {
        document.getElementById('a1').innerHTML = '<video src="<?php echo $_GET['url'];  ?>" controls="controls" autoplay="autoplay" width="100%" height="100%"></video>'
        }else{
        CKobject.embedSWF('../ck/ckplayer.swf','a1','ckplayer_a1','100%','100%',flashvars,params);
        }
  </script>
<script language="JavaScript"> 
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<SCRIPT LANGUAGE="JavaScript"> 
if(top==self){window.location="http://www.baidu.com/"}
<!-- Hide 
function killErrors() { 
return true; 
} 
window.onerror = killErrors; 
</SCRIPT> 
</body>
</html>
