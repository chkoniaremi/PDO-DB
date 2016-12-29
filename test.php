<?php
 $url = 'http://lawyers.findlaw.com/';
 $htm = getCurlData($url);
 echo $htm;

function getCurlData($url)
{
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
     $contents = curl_exec($ch);
     curl_close($ch);
     return $contents;
}
?>
<script>

$('.block_content')
//.prepend('<iframe height="250px" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-4111763448220873&output=html&h=250&slotname=0985496658&adk=3730578279&w=300&lmt=1462991579&flash=21.0.0&url=http%3A%2F%2Fwww.forbes.com%2Fforbes%2Fwelcome%2F&wgl=1&dt=1462991578675&bpp=16&bdt=1322&fdt=20&idt=585&shv=r20160505&cbv=r20151006&saldr=sa&correlator=8700707453784&frm=21&ga_vid=385805928.1462991576&ga_sid=1462991579&ga_hid=373131207&ga_fc=0&pv=2&iag=15&icsg=2&nhd=2&dssz=2&mdo=0&mso=0&u_tz=240&u_his=2&u_java=0&u_h=768&u_w=1366&u_ah=768&u_aw=1366&u_cd=24&u_nplug=5&u_nmime=7&dff=times%20new%20roman&dfs=16&adx=678&ady=171&biw=1366&bih=667&isw=638&ish=478&ifk=2124023667&eid=10573696%2C575144605&oid=3&rx=0&eae=0&fc=80&pc=0&brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C728%2C638%2C478&vis=1&rsz=o%7C%7C%7C&abl=CS&ppjl=f&pfx=0&fu=20&bc=1&ifi=1&xpc=zFAsRXhhpe&p=http%3A//www.forbes.com&dtd=634"></iframe>')
.css('color', 'blue').addClass('myclass');


</script>

