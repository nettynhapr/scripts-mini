#!/usr/local/bin/Resource/www/cgi-bin/php
<?php echo "<?xml version='1.0' encoding='UTF8' ?>";
$host = "http://127.0.0.1/cgi-bin";
?>
<rss version="2.0">
<script>
  translate_base_url  = "http://127.0.0.1/cgi-bin/translate?";

  storagePath             = getStoragePath("tmp");
  storagePath_stream      = storagePath + "stream.dat";
  storagePath_playlist    = storagePath + "playlist.dat";

  error_info          = "";
</script>
<onEnter>
  startitem = "middle";
  setRefreshTime(1);
</onEnter>

<onRefresh>
  setRefreshTime(-1);
  itemCount = getPageInfo("itemCount");
</onRefresh>

<mediaDisplay name="threePartsView"
	sideLeftWidthPC="0"
	sideRightWidthPC="0"

	headerImageWidthPC="0"
	selectMenuOnRight="no"
	autoSelectMenu="no"
	autoSelectItem="no"
	itemImageHeightPC="0"
	itemImageWidthPC="0"
	itemXPC="8"
	itemYPC="25"
	itemWidthPC="50"
	itemHeightPC="8"
	capXPC="8"
	capYPC="25"
	capWidthPC="50"
	capHeightPC="64"
	itemBackgroundColor="0:0:0"
	itemPerPage="8"
  itemGap="0"
	bottomYPC="90"
	backgroundColor="0:0:0"
	showHeader="no"
	showDefaultInfo="no"
	imageFocus=""
	sliding="no"
	idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10"
>

  	<text align="center" offsetXPC="0" offsetYPC="0" widthPC="100" heightPC="20" fontSize="30" backgroundColor="10:105:150" foregroundColor="100:200:255">
		  <script>getPageInfo("pageTitle");</script>
		</text>

  	<text redraw="yes" offsetXPC="85" offsetYPC="12" widthPC="10" heightPC="6" fontSize="20" backgroundColor="10:105:150" foregroundColor="60:160:205">
		  <script>sprintf("%s / ", focus-(-1))+itemCount;</script>
		</text>
		<image  redraw="yes" offsetXPC=60 offsetYPC=35 widthPC=30 heightPC=30>
  image/tv_radio.png
		</image>
        <idleImage>image/POPUP_LOADING_01.png</idleImage>
        <idleImage>image/POPUP_LOADING_02.png</idleImage>
        <idleImage>image/POPUP_LOADING_03.png</idleImage>
        <idleImage>image/POPUP_LOADING_04.png</idleImage>
        <idleImage>image/POPUP_LOADING_05.png</idleImage>
        <idleImage>image/POPUP_LOADING_06.png</idleImage>
        <idleImage>image/POPUP_LOADING_07.png</idleImage>
        <idleImage>image/POPUP_LOADING_08.png</idleImage>

		<itemDisplay>
			<text align="left" lines="1" offsetXPC=0 offsetYPC=0 widthPC=100 heightPC=100>
				<script>
					idx = getQueryItemIndex();
					focus = getFocusItemIndex();
					if(focus==idx)
					{
					  location = getItemInfo(idx, "location");
					  annotation = getItemInfo(idx, "annotation");
					}
					getItemInfo(idx, "title");
				</script>
				<fontSize>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "16"; else "14";
  				</script>
				</fontSize>
			  <backgroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "10:80:120"; else "-1:-1:-1";
  				</script>
			  </backgroundColor>
			  <foregroundColor>
  				<script>
  					idx = getQueryItemIndex();
  					focus = getFocusItemIndex();
  			    if(focus==idx) "255:255:255"; else "140:140:140";
  				</script>
			  </foregroundColor>
			</text>

		</itemDisplay>

<onUserInput>
<script>
ret = "false";
userInput = currentUserInput();

if (userInput == "pagedown" || userInput == "pageup")
{
  idx = Integer(getFocusItemIndex());
  if (userInput == "pagedown")
  {
    idx -= -8;
    if(idx &gt;= itemCount)
      idx = itemCount-1;
  }
  else
  {
    idx -= 8;
    if(idx &lt; 0)
      idx = 0;
  }

  print("new idx: "+idx);
  setFocusItemIndex(idx);
	setItemFocus(0);
  redrawDisplay();
  "true";
}
ret;
</script>
</onUserInput>

	</mediaDisplay>

	<item_template>
		<mediaDisplay  name="threePartsView" idleImageXPC="5" idleImageYPC="5" idleImageWidthPC="8" idleImageHeightPC="10">
        <idleImage>image/POPUP_LOADING_01.png</idleImage>
        <idleImage>image/POPUP_LOADING_02.png</idleImage>
        <idleImage>image/POPUP_LOADING_03.png</idleImage>
        <idleImage>image/POPUP_LOADING_04.png</idleImage>
        <idleImage>image/POPUP_LOADING_05.png</idleImage>
        <idleImage>image/POPUP_LOADING_06.png</idleImage>
        <idleImage>image/POPUP_LOADING_07.png</idleImage>
        <idleImage>image/POPUP_LOADING_08.png</idleImage>
		</mediaDisplay>

	</item_template>
<channel>
	<title>TV Live - new</title>
	<menu>main menu</menu>
	<item>
	<title>AXN</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/axn",10);</onClick>
	</item>

	<item>
	<title>AXN Black</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/axnblack",10);</onClick>
	</item>

	<item>
	<title>Fox</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/fox",10);</onClick>
	</item>
	
	<item>
	<title>Fox Life</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/foxlife",10);</onClick>
	</item>
	
	<item>
	<title>FOX Movies</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/foxmovies",10);</onClick>
	</item>

	<item>
	<title>FOX Crime</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/foxcrime",10);</onClick>
	</item>
	
	<item>
	<title>SyFy</title>
	<onClick>playItemURL("http://127.0.0.1/cgi-bin/translate?stream,Rtmp-options:-p%20http://www.televisaofutebol.com,rtmp://live.myp2p.in/estadio54/syfy",10);</onClick>
	</item>
	
   <item>
    <title>France 24</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,mms://stream1.france24.yacast.net/f24_liveen",10);</onClick>
  </item>
  
   <item>
    <title>Cielo</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://cp86825.live.edgefcs.net/live/cielo_std@17630",10);</onClick>
  </item>

   <item>
    <title>Sky Tg 24</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://cp49989.live.edgefcs.net:1935/live?videoId=53404915001&lineUpId=&pubId=1445083406&playerId=760707277001&affiliateId=/streamRM1@2564",10);</onClick>
  </item>

   <item>
    <title>QVC</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://cp107861.live.edgefcs.net/live/QVC_Italy_Stream1200@34577",10);</onClick>
  </item>

   <item>
    <title>Videolina</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://91.121.222.160/videolinalive/videolinalive.sdp",10);</onClick>
  </item>

   <item>
    <title>Quararete TV</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://wowza1.top-ix.org/quartaretetv/quartareteweb",10);</onClick>
  </item>

   <item>
    <title>NDR</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,mms://ndr-fs-hh-hi-wmv.wm.llnwd.net/ndr_fs_hh_hi_wmv",10);</onClick>
  </item>

   <item>
    <title>hr fernsehen</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://gffstream.fc.llnwd.net/gffstream/005/hr-fernsehen-1",10);</onClick>
  </item>


   <item>
    <title>Video  BR-Mediathek</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://cp121359.live.edgefcs.net:1935/live/b7_bfssued_m@49987",10);</onClick>
  </item>

   <item>
    <title>LCP</title>
    <onClick>playItemUrl("http://127.0.0.1/cgi-bin/translate?stream,,rtmp://stream2.lcp.yacast.net/lcp_live/lcptnt",10);</onClick>
  </item>

</channel>
</rss>
