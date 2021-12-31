function sack(file){this.xmlhttp=null;this.resetData=function(){this.method="POST";this.queryStringSeparator="?";this.argumentSeparator="&";this.URLString="";this.encodeURIString=true;this.execute=false;this.element=null;this.elementObj=null;this.requestFile=file;this.vars=new Object();this.responseStatus=new Array(2);};this.resetFunctions=function(){this.onLoading=function(){};this.onLoaded=function(){};this.onInteractive=function(){};this.onCompletion=function(){};this.onError=function(){};this.onFail=function(){};};this.reset=function(){this.resetFunctions();this.resetData();};this.createAJAX=function(){try{this.xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");}catch(e1){try{this.xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}catch(e2){this.xmlhttp=null;}}
if(!this.xmlhttp){if(typeof XMLHttpRequest!="undefined"){this.xmlhttp=new XMLHttpRequest();}else{this.failed=true;}}};this.setVar=function(name,value){this.vars[name]=Array(value,false);};this.encVar=function(name,value,returnvars){if(true==returnvars){return Array(encodeURIComponent(name),encodeURIComponent(value));}else{this.vars[encodeURIComponent(name)]=Array(encodeURIComponent(value),true);}}
this.processURLString=function(string,encode){encoded=encodeURIComponent(this.argumentSeparator);regexp=new RegExp(this.argumentSeparator+"|"+encoded);varArray=string.split(regexp);for(i=0;i<varArray.length;i++){urlVars=varArray[i].split("=");if(true==encode){this.encVar(urlVars[0],urlVars[1]);}else{this.setVar(urlVars[0],urlVars[1]);}}}
this.createURLString=function(urlstring){if(this.encodeURIString&&this.URLString.length){this.processURLString(this.URLString,true);}
if(urlstring){if(this.URLString.length){this.URLString+=this.argumentSeparator+urlstring;}else{this.URLString=urlstring;}}
this.setVar("rndval",new Date().getTime());urlstringtemp=new Array();for(key in this.vars){if(false==this.vars[key][1]&&true==this.encodeURIString){encoded=this.encVar(key,this.vars[key][0],true);delete this.vars[key];this.vars[encoded[0]]=Array(encoded[1],true);key=encoded[0];}
urlstringtemp[urlstringtemp.length]=key+"="+this.vars[key][0];}
if(urlstring){this.URLString+=this.argumentSeparator+urlstringtemp.join(this.argumentSeparator);}else{this.URLString+=urlstringtemp.join(this.argumentSeparator);}}
this.runResponse=function(){eval(this.response);}
this.runAJAX=function(urlstring){if(this.failed){this.onFail();}else{this.createURLString(urlstring);if(this.element){this.elementObj=document.getElementById(this.element);}
if(this.xmlhttp){var self=this;if(this.method=="GET"){totalurlstring=this.requestFile+this.queryStringSeparator+this.URLString;this.xmlhttp.open(this.method,totalurlstring,true);}else{this.xmlhttp.open(this.method,this.requestFile,true);try{this.xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded")}catch(e){}}
this.xmlhttp.onreadystatechange=function(){switch(self.xmlhttp.readyState){case 1:self.onLoading();break;case 2:self.onLoaded();break;case 3:self.onInteractive();break;case 4:self.response=self.xmlhttp.responseText;self.responseXML=self.xmlhttp.responseXML;self.responseStatus[0]=self.xmlhttp.status;self.responseStatus[1]=self.xmlhttp.statusText;if(self.execute){self.runResponse();}
if(self.elementObj){elemNodeName=self.elementObj.nodeName;elemNodeName.toLowerCase();if(elemNodeName=="input"||elemNodeName=="select"||elemNodeName=="option"||elemNodeName=="textarea"){self.elementObj.value=self.response;}else{self.elementObj.innerHTML=self.response;}}
if(self.responseStatus[0]=="200"){self.onCompletion();}else{self.onError();}
self.URLString="";break;}};this.xmlhttp.send(this.URLString);}}};this.reset();this.createAJAX();}
function homeSearch(){setTimeout(function(){document.searchform.submit();},0);}
function searchForm(){var state="interior";var service="designers";var style="decorators";var country="";var radius="25";var zip="";var name="";if(document.searchform.style.value!=''){style=document.searchform.style.value;}
if(document.searchform.zip.value!=''){zip=document.searchform.zip.value;}
if(document.searchform.radius.value!=''){radius=document.searchform.radius.value;}
if(document.searchform.service.value!=''){service=document.searchform.service.value;}
if(document.searchform.state.value==0){state="";}
else if(document.searchform.state.value!=''){state=document.searchform.state.value;}
if(document.searchform.name.value!=''){name=document.searchform.name.value;}
if(document.searchform.searchcountry.value!=''){country=document.searchform.searchcountry.value;}
setTimeout(function(){window.location='/firms/'+state.toLowerCase()+'-'+service.toLowerCase()+'-'+style.toLowerCase()+'?searchcountry='+country+'&name='+name+'&zip='+zip+'&radius='+radius;},0);}
function searchPhotoForm(){var mood="ideas";var room="interior";var style="design";var keyword="";if(document.searchform.style.value!=''){style=document.searchform.style.value;}
if(document.searchform.mood.value!=''){mood=document.searchform.mood.value;}
if(document.searchform.room.value!=''){room=document.searchform.room.value;}
if(document.searchform.keyword.value!=''){keyword=document.searchform.keyword.value;}
setTimeout(function(){window.location='/designphotos/'+room.toLowerCase()+'-'+style.toLowerCase()+'-'+mood.toLowerCase()+'?keyword='+keyword;},0);}
function removeSpaces(string){string=string.split(' ').join('');string=string.split('-').join('');string=string.split('.').join('');return string;}
function expandSELECT(sel){sel.style.width='156px';}
function contractSELECT(sel){sel.style.width='';};(function($){$.cluetip={version:'1.0.4'};var $cluetip,$cluetipInner,$cluetipOuter,$cluetipTitle,$cluetipArrows,$cluetipWait,$dropShadow,imgCount;$.fn.cluetip=function(js,options){if(typeof js=='object'){options=js;js=null;}
if(js=='destroy'){return this.unbind('.cluetip');}
return this.each(function(index){var link=this,$this=$(this);var opts=$.extend(true,{},$.fn.cluetip.defaults,options||{},$.metadata?$this.metadata():$.meta?$this.data():{});var cluetipContents=false;var cluezIndex=+opts.cluezIndex;$this.data('thisInfo',{title:link.title,zIndex:cluezIndex});var isActive=false,closeOnDelay=0;if(!$('#cluetip').length){$(['<div id="cluetip">','<div id="cluetip-outer">','<h3 id="cluetip-title"></h3>','<div id="cluetip-inner"></div>','</div>','<div id="cluetip-extra"></div>','<div id="cluetip-arrows" class="cluetip-arrows"></div>','</div>'].join(''))
[insertionType](insertionElement).hide();$cluetip=$('#cluetip').css({position:'absolute'});$cluetipOuter=$('#cluetip-outer').css({position:'relative',zIndex:cluezIndex});$cluetipInner=$('#cluetip-inner');$cluetipTitle=$('#cluetip-title');$cluetipArrows=$('#cluetip-arrows');$cluetipWait=$('<div id="cluetip-waitimage"></div>').css({position:'absolute'}).insertBefore($cluetip).hide();}
var dropShadowSteps=(opts.dropShadow)?+opts.dropShadowSteps:0;if(!$dropShadow){$dropShadow=$([]);for(var i=0;i<dropShadowSteps;i++){$dropShadow=$dropShadow.add($('<div></div>').css({zIndex:cluezIndex-1,opacity:.1,top:1+i,left:1+i}));};$dropShadow.css({position:'absolute',backgroundColor:'#000'}).prependTo($cluetip);}
var tipAttribute=$this.attr(opts.attribute),ctClass=opts.cluetipClass;if(!tipAttribute&&!opts.splitTitle&&!js)return true;if(opts.local&&opts.localPrefix){tipAttribute=opts.localPrefix+tipAttribute;}
if(opts.local&&opts.hideLocal){$(tipAttribute+':first').hide();}
var tOffset=parseInt(opts.topOffset,10),lOffset=parseInt(opts.leftOffset,10);var tipHeight,wHeight,defHeight=isNaN(parseInt(opts.height,10))?'auto':(/\D/g).test(opts.height)?opts.height:opts.height+'px';var sTop,linkTop,posY,tipY,mouseY,baseline;var tipInnerWidth=parseInt(opts.width,10)||275,tipWidth=tipInnerWidth+(parseInt($cluetip.css('paddingLeft'),10)||0)+(parseInt($cluetip.css('paddingRight'),10)||0)+dropShadowSteps,linkWidth=this.offsetWidth,linkLeft,posX,tipX,mouseX,winWidth;var tipParts;var tipTitle=(opts.attribute!='title')?$this.attr(opts.titleAttribute):'';if(opts.splitTitle){if(tipTitle==undefined){tipTitle='';}
tipParts=tipTitle.split(opts.splitTitle);tipTitle=tipParts.shift();}
if(opts.escapeTitle){tipTitle=tipTitle.replace(/&/g,'&amp;').replace(/>/g,'&gt;').replace(/</g,'&lt;');}
var localContent;function returnFalse(){return false;}
var activate=function(event){if(!opts.onActivate($this)){return false;}
isActive=true;$cluetip.removeClass().css({width:tipInnerWidth});if(tipAttribute==$this.attr('href')){$this.css('cursor',opts.cursor);}
if(opts.hoverClass){$this.addClass(opts.hoverClass);}
linkTop=posY=$this.offset().top;linkLeft=$this.offset().left;mouseX=event.pageX;mouseY=event.pageY;if(link.tagName.toLowerCase()!='area'){sTop=$(document).scrollTop();winWidth=$(window).width();}
if(opts.positionBy=='fixed'){posX=linkWidth+linkLeft+lOffset;$cluetip.css({left:posX});}else{posX=(linkWidth>linkLeft&&linkLeft>tipWidth)||linkLeft+linkWidth+tipWidth+lOffset>winWidth?linkLeft-tipWidth-lOffset:linkWidth+linkLeft+lOffset;if(link.tagName.toLowerCase()=='area'||opts.positionBy=='mouse'||linkWidth+tipWidth>winWidth){if(mouseX+20+tipWidth>winWidth){$cluetip.addClass(' cluetip-'+ctClass);posX=(mouseX-tipWidth-lOffset)>=0?mouseX-tipWidth-lOffset-parseInt($cluetip.css('marginLeft'),10)+parseInt($cluetipInner.css('marginRight'),10):mouseX-(tipWidth/2);}else{posX=mouseX+lOffset;}}
var pY=posX<0?event.pageY+tOffset:event.pageY;$cluetip.css({left:(posX>0&&opts.positionBy!='bottomTop')?posX:(mouseX+(tipWidth/2)>winWidth)?winWidth/2-tipWidth/2:Math.max(mouseX-(tipWidth/2),0),zIndex:$this.data('thisInfo').zIndex});$cluetipArrows.css({zIndex:$this.data('thisInfo').zIndex+1});}
wHeight=$(window).height();if(js){if(typeof js=='function'){js=js(link);}
$cluetipInner.html(js);cluetipShow(pY);}
else if(tipParts){var tpl=tipParts.length;$cluetipInner.html(tipParts[0]);if(tpl>1){for(var i=1;i<tpl;i++){$cluetipInner.append('<div class="split-body">'+tipParts[i]+'</div>');}}
cluetipShow(pY);}
else if(!opts.local&&tipAttribute.indexOf('#')!=0){if(/\.(jpe?g|tiff?|gif|png)$/i.test(tipAttribute)){$cluetipInner.html('<img src="'+tipAttribute+'" alt="'+tipTitle+'" />');cluetipShow(pY);}else if(cluetipContents&&opts.ajaxCache){$cluetipInner.html(cluetipContents);cluetipShow(pY);}else{var optionBeforeSend=opts.ajaxSettings.beforeSend,optionError=opts.ajaxSettings.error,optionSuccess=opts.ajaxSettings.success,optionComplete=opts.ajaxSettings.complete;var ajaxSettings={cache:false,url:tipAttribute,beforeSend:function(xhr){if(optionBeforeSend){optionBeforeSend.call(link,xhr,$cluetip,$cluetipInner);}
$cluetipOuter.children().empty();if(opts.waitImage){$cluetipWait.css({top:mouseY+20,left:mouseX+20,zIndex:$this.data('thisInfo').zIndex-1}).show();}},error:function(xhr,textStatus){if(isActive){if(optionError){optionError.call(link,xhr,textStatus,$cluetip,$cluetipInner);}else{$cluetipInner.html('<i>sorry, the contents could not be loaded</i>');}}},success:function(data,textStatus){cluetipContents=opts.ajaxProcess.call(link,data);if(isActive){if(optionSuccess){optionSuccess.call(link,data,textStatus,$cluetip,$cluetipInner);}
$cluetipInner.html(cluetipContents);}},complete:function(xhr,textStatus){if(optionComplete){optionComplete.call(link,xhr,textStatus,$cluetip,$cluetipInner);}
imgCount=$('#cluetip-inner img').length;if(imgCount&&!$.browser.opera){$('#cluetip-inner img').bind('load error',function(){imgCount--;if(imgCount<1){$cluetipWait.hide();if(isActive)cluetipShow(pY);}});}else{$cluetipWait.hide();if(isActive){cluetipShow(pY);}}}};var ajaxMergedSettings=$.extend(true,{},opts.ajaxSettings,ajaxSettings);$.ajax(ajaxMergedSettings);}}else if(opts.local){var $localContent=$(tipAttribute+(/#\S+$/.test(tipAttribute)?'':':eq('+index+')')).clone(true).show();$cluetipInner.html($localContent);cluetipShow(pY);}};var cluetipShow=function(bpY){$cluetip.addClass('cluetip-'+ctClass);if(opts.truncate){var $truncloaded=$cluetipInner.text().slice(0,opts.truncate)+'...';$cluetipInner.html($truncloaded);}
function doNothing(){};tipTitle?$cluetipTitle.show().html(tipTitle):(opts.showTitle)?$cluetipTitle.show().html('&nbsp;'):$cluetipTitle.hide();if(opts.sticky){var $closeLink=$('<div id="cluetip-close"><a href="#">'+opts.closeText+'</a></div>');(opts.closePosition=='bottom')?$closeLink.appendTo($cluetipInner):(opts.closePosition=='title')?$closeLink.prependTo($cluetipTitle):$closeLink.prependTo($cluetipInner);$closeLink.bind('click.cluetip',function(){cluetipClose();return false;});if(opts.mouseOutClose){$cluetip.bind('mouseleave.cluetip',function(){cluetipClose();});}else{$cluetip.unbind('mouseleave.cluetip');}}
var direction='';$cluetipOuter.css({zIndex:$this.data('thisInfo').zIndex,overflow:defHeight=='auto'?'visible':'auto',height:defHeight});tipHeight=defHeight=='auto'?Math.max($cluetip.outerHeight(),$cluetip.height()):parseInt(defHeight,10);tipY=posY;baseline=sTop+wHeight;if(opts.positionBy=='fixed'){tipY=posY-opts.dropShadowSteps+tOffset;}else if((posX<mouseX&&Math.max(posX,0)+tipWidth>mouseX)||opts.positionBy=='bottomTop'){if(posY+tipHeight+tOffset>baseline&&mouseY-sTop>tipHeight+tOffset){tipY=mouseY-tipHeight-tOffset;direction='top';}else{tipY=mouseY+tOffset;direction='bottom';}}else if(posY+tipHeight+tOffset>baseline){tipY=(tipHeight>=wHeight)?sTop:baseline-tipHeight-tOffset;}else if($this.css('display')=='block'||link.tagName.toLowerCase()=='area'||opts.positionBy=="mouse"){tipY=bpY-tOffset;}else{tipY=posY-opts.dropShadowSteps;}
if(direction==''){posX<linkLeft?direction='left':direction='right';}
$cluetip.css({top:tipY+'px'}).removeClass().addClass('clue-'+direction+'-'+ctClass).addClass(' cluetip-'+ctClass);if(opts.arrows){var bgY=(posY-tipY-opts.dropShadowSteps);$cluetipArrows.css({top:(/(left|right)/.test(direction)&&posX>=0&&bgY>0)?bgY+'px':/(left|right)/.test(direction)?0:''}).show();}else{$cluetipArrows.hide();}
$dropShadow.hide();$cluetip.hide()[opts.fx.open](opts.fx.open!='show'&&opts.fx.openSpeed);if(opts.dropShadow){$dropShadow.css({height:tipHeight,width:tipInnerWidth,zIndex:$this.data('thisInfo').zIndex-1}).show();}
if($.fn.bgiframe){$cluetip.bgiframe();}
if(opts.delayedClose>0){closeOnDelay=setTimeout(cluetipClose,opts.delayedClose);}
opts.onShow.call(link,$cluetip,$cluetipInner);};var inactivate=function(event){isActive=false;$cluetipWait.hide();if(!opts.sticky||(/click|toggle/).test(opts.activation)){cluetipClose();clearTimeout(closeOnDelay);};if(opts.hoverClass){$this.removeClass(opts.hoverClass);}};var cluetipClose=function(){$cluetipOuter.parent().hide().removeClass();opts.onHide.call(link,$cluetip,$cluetipInner);$this.removeClass('cluetip-clicked');if(tipTitle){$this.attr(opts.titleAttribute,tipTitle);}
$this.css('cursor','');if(opts.arrows)$cluetipArrows.css({top:''});};$(document).bind('hideCluetip',function(e){cluetipClose();});if((/click|toggle/).test(opts.activation)){$this.bind('click.cluetip',function(event){if($cluetip.is(':hidden')||!$this.is('.cluetip-clicked')){activate(event);$('.cluetip-clicked').removeClass('cluetip-clicked');$this.addClass('cluetip-clicked');}else{inactivate(event);}
this.blur();return false;});}else if(opts.activation=='focus'){$this.bind('focus.cluetip',function(event){activate(event);});$this.bind('blur.cluetip',function(event){inactivate(event);});}else{$this[opts.clickThrough?'unbind':'bind']('click',returnFalse);var mouseTracks=function(evt){if(opts.tracking==true){var trackX=posX-evt.pageX;var trackY=tipY?tipY-evt.pageY:posY-evt.pageY;$this.bind('mousemove.cluetip',function(evt){$cluetip.css({left:evt.pageX+trackX,top:evt.pageY+trackY});});}};if($.fn.hoverIntent&&opts.hoverIntent){$this.hoverIntent({sensitivity:opts.hoverIntent.sensitivity,interval:opts.hoverIntent.interval,over:function(event){activate(event);mouseTracks(event);},timeout:opts.hoverIntent.timeout,out:function(event){inactivate(event);$this.unbind('mousemove.cluetip');}});}else{$this.bind('mouseenter.cluetip',function(event){activate(event);mouseTracks(event);}).bind('mouseleave.cluetip',function(event){inactivate(event);$this.unbind('mousemove.cluetip');});}
$this.bind('mouseenter.cluetip',function(event){$this.attr('title','');}).bind('mouseleave.cluetip',function(event){$this.attr('title',$this.data('thisInfo').title);});}});};$.fn.cluetip.defaults={width:275,height:'auto',cluezIndex:97,positionBy:'auto',topOffset:15,leftOffset:15,local:false,localPrefix:null,hideLocal:true,attribute:'rel',titleAttribute:'title',splitTitle:'',escapeTitle:false,showTitle:true,cluetipClass:'default',hoverClass:'',waitImage:true,cursor:'help',arrows:false,dropShadow:true,dropShadowSteps:6,sticky:false,mouseOutClose:false,activation:'hover',clickThrough:false,tracking:false,delayedClose:0,closePosition:'top',closeText:'Close',truncate:0,fx:{open:'show',openSpeed:''},hoverIntent:{sensitivity:3,interval:50,timeout:0},onActivate:function(e){return true;},onShow:function(ct,ci){},onHide:function(ct,ci){},ajaxCache:true,ajaxProcess:function(data){data=data.replace(/<(script|style|title)[^<]+<\/(script|style|title)>/gm,'').replace(/<(link|meta)[^>]+>/g,'');return data;},ajaxSettings:{dataType:'html'},debug:false};var insertionType='appendTo',insertionElement='body';$.cluetip.setup=function(options){if(options&&options.insertionType&&(options.insertionType).match(/appendTo|prependTo|insertBefore|insertAfter/)){insertionType=options.insertionType;}
if(options&&options.insertionElement){insertionElement=options.insertionElement;}};})(jQuery);(function($){$.fn.hoverIntent=function(f,g){var cfg={sensitivity:7,interval:100,timeout:0};cfg=$.extend(cfg,g?{over:f,out:g}:f);var cX,cY,pX,pY;var track=function(ev){cX=ev.pageX;cY=ev.pageY;};var compare=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);if((Math.abs(pX-cX)+Math.abs(pY-cY))<cfg.sensitivity){$(ob).unbind("mousemove",track);ob.hoverIntent_s=1;return cfg.over.apply(ob,[ev]);}else{pX=cX;pY=cY;ob.hoverIntent_t=setTimeout(function(){compare(ev,ob);},cfg.interval);}};var delay=function(ev,ob){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);ob.hoverIntent_s=0;return cfg.out.apply(ob,[ev]);};var handleHover=function(e){var p=(e.type=="mouseover"?e.fromElement:e.toElement)||e.relatedTarget;while(p&&p!=this){try{p=p.parentNode;}catch(e){p=this;}}if(p==this){return false;}var ev=jQuery.extend({},e);var ob=this;if(ob.hoverIntent_t){ob.hoverIntent_t=clearTimeout(ob.hoverIntent_t);}if(e.type=="mouseover"){pX=ev.pageX;pY=ev.pageY;$(ob).bind("mousemove",track);if(ob.hoverIntent_s!=1){ob.hoverIntent_t=setTimeout(function(){compare(ev,ob);},cfg.interval);}}else{$(ob).unbind("mousemove",track);if(ob.hoverIntent_s==1){ob.hoverIntent_t=setTimeout(function(){delay(ev,ob);},cfg.timeout);}}};return this.mouseover(handleHover).mouseout(handleHover);};})(jQuery);if(typeof dd_domreadycheck=="undefined")
var dd_domreadycheck=false
var anylinkcssmenu={menusmap:{},preloadimages:[],effects:{delayhide:200,shadow:{enabled:true,opacity:0.3,depth:[5,5]},fade:{enabled:true,duration:500}},dimensions:{},getoffset:function(what,offsettype){return(what.offsetParent)?what[offsettype]+this.getoffset(what.offsetParent,offsettype):what[offsettype]},getoffsetof:function(el){el._offsets={left:this.getoffset(el,"offsetLeft"),top:this.getoffset(el,"offsetTop"),h:el.offsetHeight}},getdimensions:function(menu){this.dimensions={anchorw:menu.anchorobj.offsetWidth,anchorh:menu.anchorobj.offsetHeight,docwidth:(window.innerWidth||this.standardbody.clientWidth)-20,docheight:(window.innerHeight||this.standardbody.clientHeight)-15,docscrollx:window.pageXOffset||this.standardbody.scrollLeft,docscrolly:window.pageYOffset||this.standardbody.scrollTop}
if(!this.dimensions.dropmenuw){this.dimensions.dropmenuw=menu.dropmenu.offsetWidth
this.dimensions.dropmenuh=menu.dropmenu.offsetHeight}},isContained:function(m,e){var e=window.event||e
var c=e.relatedTarget||((e.type=="mouseover")?e.fromElement:e.toElement)
while(c&&c!=m)try{c=c.parentNode}catch(e){c=m}
if(c==m)
return true
else
return false},setopacity:function(el,value){el.style.opacity=value
if(typeof el.style.opacity!="string"){el.style.MozOpacity=value
if(el.filters){el.style.filter="progid:DXImageTransform.Microsoft.alpha(opacity="+value*100+")"}}},showmenu:function(menuid){var menu=anylinkcssmenu.menusmap[menuid]
clearTimeout(menu.hidetimer)
this.getoffsetof(menu.anchorobj)
this.getdimensions(menu)
var posx=menu.anchorobj._offsets.left+(menu.orientation=="lr"?this.dimensions.anchorw:0)
var posy=menu.anchorobj._offsets.top+this.dimensions.anchorh-(menu.orientation=="lr"?this.dimensions.anchorh:0)
if(posx+this.dimensions.dropmenuw+this.effects.shadow.depth[0]>this.dimensions.docscrollx+this.dimensions.docwidth){posx=posx-this.dimensions.dropmenuw+(menu.orientation=="lr"?-this.dimensions.anchorw:this.dimensions.anchorw)}
if(posy+this.dimensions.dropmenuh>this.dimensions.docscrolly+this.dimensions.docheight){posy=Math.max(posy-this.dimensions.dropmenuh-(menu.orientation=="lr"?-this.dimensions.anchorh:this.dimensions.anchorh),this.dimensions.docscrolly)}
if(this.effects.fade.enabled){this.setopacity(menu.dropmenu,0)
if(this.effects.shadow.enabled)
this.setopacity(menu.shadow,0)}
menu.dropmenu.setcss({left:posx+'px',top:posy+'px',visibility:'visible'})
if(this.effects.shadow.enabled)
menu.shadow.setcss({left:posx+anylinkcssmenu.effects.shadow.depth[0]+'px',top:posy+anylinkcssmenu.effects.shadow.depth[1]+'px',visibility:'visible'})
if(this.effects.fade.enabled){clearInterval(menu.animatetimer)
menu.curanimatedegree=0
menu.starttime=new Date().getTime()
menu.animatetimer=setInterval(function(){anylinkcssmenu.revealmenu(menuid)},20)}},revealmenu:function(menuid){var menu=anylinkcssmenu.menusmap[menuid]
var elapsed=new Date().getTime()-menu.starttime
if(elapsed<this.effects.fade.duration){this.setopacity(menu.dropmenu,menu.curanimatedegree)
if(this.effects.shadow.enabled)
this.setopacity(menu.shadow,menu.curanimatedegree*this.effects.shadow.opacity)}
else{clearInterval(menu.animatetimer)
this.setopacity(menu.dropmenu,1)
menu.dropmenu.style.filter=""}
menu.curanimatedegree=(1-Math.cos((elapsed/this.effects.fade.duration)*Math.PI))/2},setcss:function(param){for(prop in param){this.style[prop]=param[prop]}},setcssclass:function(el,targetclass,action){var needle=new RegExp("(^|\\s+)"+targetclass+"($|\\s+)","ig")
if(action=="check")
return needle.test(el.className)
else if(action=="remove")
el.className=el.className.replace(needle,"")
else if(action=="add"&&!needle.test(el.className))
el.className+=" "+targetclass},hidemenu:function(menuid){var menu=anylinkcssmenu.menusmap[menuid]
clearInterval(menu.animatetimer)
menu.dropmenu.setcss({visibility:'hidden',left:0,top:0})
menu.shadow.setcss({visibility:'hidden',left:0,top:0})},getElementsByClass:function(targetclass){if(document.querySelectorAll)
return document.querySelectorAll("."+targetclass)
else{var classnameRE=new RegExp("(^|\\s+)"+targetclass+"($|\\s+)","i")
var pieces=[]
var alltags=document.all?document.all:document.getElementsByTagName("*")
for(var i=0;i<alltags.length;i++){if(typeof alltags[i].className=="string"&&alltags[i].className.search(classnameRE)!=-1)
pieces[pieces.length]=alltags[i]}
return pieces}},addEvent:function(targetarr,functionref,tasktype){if(targetarr.length>0){var target=targetarr.shift()
if(target.addEventListener)
target.addEventListener(tasktype,functionref,false)
else if(target.attachEvent)
target.attachEvent('on'+tasktype,function(){return functionref.call(target,window.event)})
this.addEvent(targetarr,functionref,tasktype)}},domready:function(functionref){if(dd_domreadycheck){functionref()
return}
if(document.addEventListener){document.addEventListener("DOMContentLoaded",function(){document.removeEventListener("DOMContentLoaded",arguments.callee,false)
functionref();dd_domreadycheck=true},false)}
else if(document.attachEvent){if(document.documentElement.doScroll&&window==window.top)(function(){if(dd_domreadycheck)return
try{document.documentElement.doScroll("left")}catch(error){setTimeout(arguments.callee,0)
return;}
functionref();dd_domreadycheck=true})();}
if(document.attachEvent&&parent.length>0)
this.addEvent([window],function(){functionref()},"load");},addState:function(anchorobj,state){if(anchorobj.getAttribute('data-image')){var imgobj=(anchorobj.tagName=="IMG")?anchorobj:anchorobj.getElementsByTagName('img')[0]
if(imgobj){imgobj.src=(state=="add")?anchorobj.getAttribute('data-overimage'):anchorobj.getAttribute('data-image')}}
else
anylinkcssmenu.setcssclass(anchorobj,"selectedanchor",state)},setupmenu:function(targetclass,anchorobj,pos){this.standardbody=(document.compatMode=="CSS1Compat")?document.documentElement:document.body
var relattr=anchorobj.getAttribute("rel")
var dropmenuid=relattr.replace(/\[(\w+)\]/,'')
var menu=this.menusmap[targetclass+pos]={id:targetclass+pos,anchorobj:anchorobj,dropmenu:document.getElementById(dropmenuid),revealtype:(relattr.length!=dropmenuid.length&&RegExp.$1=="click")?"click":"mouseover",orientation:anchorobj.getAttribute("rev")=="lr"?"lr":"ud",shadow:document.createElement("div")}
menu.anchorobj._internalID=targetclass+pos
menu.anchorobj._isanchor=true
menu.dropmenu._internalID=targetclass+pos
menu.shadow._internalID=targetclass+pos
menu.shadow.className="anylinkshadow"
document.body.appendChild(menu.dropmenu)
document.body.appendChild(menu.shadow)
menu.dropmenu.setcss=this.setcss
menu.shadow.setcss=this.setcss
menu.shadow.setcss({width:menu.dropmenu.offsetWidth+"px",height:menu.dropmenu.offsetHeight+"px"})
this.setopacity(menu.shadow,this.effects.shadow.opacity)
this.addEvent([menu.anchorobj,menu.dropmenu,menu.shadow],function(e){var menu=anylinkcssmenu.menusmap[this._internalID]
if(this._isanchor&&menu.revealtype=="mouseover"&&!anylinkcssmenu.isContained(this,e)){anylinkcssmenu.showmenu(menu.id)
anylinkcssmenu.addState(this,"add")}
else if(typeof this._isanchor=="undefined"){clearTimeout(menu.hidetimer)}},"mouseover")
this.addEvent([menu.anchorobj,menu.dropmenu,menu.shadow],function(e){if(!anylinkcssmenu.isContained(this,e)){var menu=anylinkcssmenu.menusmap[this._internalID]
menu.hidetimer=setTimeout(function(){anylinkcssmenu.addState(menu.anchorobj,"remove")
anylinkcssmenu.hidemenu(menu.id)},anylinkcssmenu.effects.delayhide)}},"mouseout")
this.addEvent([menu.anchorobj,menu.dropmenu],function(e){var menu=anylinkcssmenu.menusmap[this._internalID]
if(this._isanchor&&menu.revealtype=="click"){if(menu.dropmenu.style.visibility=="visible")
anylinkcssmenu.hidemenu(menu.id)
else{anylinkcssmenu.addState(this,"add")
anylinkcssmenu.showmenu(menu.id)}
if(e.preventDefault)
e.preventDefault()
return false}
else
menu.hidetimer=setTimeout(function(){anylinkcssmenu.hidemenu(menu.id)},anylinkcssmenu.effects.delayhide)},"click")},init:function(targetclass){this.domready(function(){anylinkcssmenu.trueinit(targetclass)})},trueinit:function(targetclass){var anchors=this.getElementsByClass(targetclass)
var preloadimages=this.preloadimages
for(var i=0;i<anchors.length;i++){if(anchors[i].getAttribute('data-image')){preloadimages[preloadimages.length]=new Image()
preloadimages[preloadimages.length-1].src=anchors[i].getAttribute('data-image')}
if(anchors[i].getAttribute('data-overimage')){preloadimages[preloadimages.length]=new Image()
preloadimages[preloadimages.length-1].src=anchors[i].getAttribute('data-overimage')}
this.setupmenu(targetclass,anchors[i],i)}}}
