<?php 
  $id=$_GET['id']; 
  $arr = array();
  if($id==1){
    $arr['intro'] = "杨岐寺，全名杨岐普通寺，在杨岐山寿桃峰下，距县城约10公里。普通寺原名 “广利禅寺”，建于盛唐时期，历时1300多年。寺内现有".
        "如来佛、观音、关帝等大型塑像，还有护法韦陀、十八罗汉、二十四诸天等木雕神像，小门、院落、大雄宝殿、观音堂、住宅。<br>".
        "寿桃峰不像寿桃，却颇似一朵盛开的莲花，环抱着杨岐寺，周围起伏的群山恰似莲花瓣，太阳出来，莲花瓣似有佛光普照，太阳隐去，".
        "犹如祥云笼罩。抬眼一望，满目苍翠，风吹竹动枝叶摇曳，似一波又一波起伏蜿蜒的绿浪，就是一个天然大氧吧，好不养眼，真乃一处人间仙境。<br>".
        "杨岐寺虽然不大，但名声不小。是我国佛教禅宗五家七宗临济中下一大支派——杨岐宗的祖庭，算得上是举世闻名，相传唐至明清兴旺时期，有和尚上百人，".
        "香火鼎盛，善男信女，顶礼膜拜者，络绎不绝。";
    $arr['src'][0] = "s1.jpg";
    $arr['src'][1] = "s2.jpg";
    echo json_encode($arr);
  }
  if($id==2){
    $arr['intro'] = "位于萍乡城北15公里处的杨歧山下，是一个形成于一点八亿年前的天然溶洞。相传古代鄱阳湖有条孽龙想把江西变成泽国，到处兴风作浪，残害百姓，".
      "后被许真君制服于杨歧山下这个山洞里，故名孽龙洞。<br>孽龙洞位于江西省萍乡市上栗县杨岐乡清溪村。位于杨岐山风景名胜区境内，319国道可直达，距萍".
      "乡市中心13公里，是以天然溶洞为主的自然景观，形成于1.8亿年前。<br>岩洞粗犷大气，既有平坦宽阔的观景台，又有深壑幽谷，现代激光艺术将溶洞装饰似".
      "梦似幻，古老原始的岩石上演绎许真君擒孽龙的传奇，带你穿越到神话世界，入脑入心，效果特别好。继续前行，古洞幽深蜿蜒，大小不等的溶洞通过厅廊相连，".
      "大的高达30多米，可容纳近千人，低窄处，仅可容一人个侧身通过。水随洞转，洞因水活，半水半路，弯弯曲曲，或曲径通幽，或豁然开朗，或琼楼玉宇，或阴森".
      "幽静，或大气磅礴，或小巧玲珑，既有广袤无垠的北国风光，也有小桥流水式南国风韵，如入神话般的仙境！<br>孽龙洞，天下第一洞，如梦如幻，是一道靓丽的".
      "艺术长廊，是一轴绚丽的山水画卷，让人留连忘返。";
    $arr['src'][0] = "d1.jpg";
    $arr['src'][1] = "d2.jpg";
    $arr['src'][2] = "d3.jpg";
    echo json_encode($arr);
  }
  if($id==3){
    $arr['intro'] = "在长平，一直流传着“不到山水美，不识长平美”的说法。这里是花的海洋，这里绿植".
        "环绕，这里是儿童的游玩天地。这里，更是亲子游值得推荐的首选地。<br>走进山水美，淡淡花儿香，格桑花、马鞭草、一串兰争妍斗艳，红的、黄的、紫的，散发".
        "着迷人的幽香，各种充满童趣的人偶，大炮，坦克，千奇百怪的动物，和生态形象的玩具恐龙，孩子来到这里恐怕是会乐不思蜀。";
    $arr['src'][0] = "g1.jpg";
    $arr['src'][1] = "g2.jpg";
    echo json_encode($arr);
  }
  if($id==4){
    $arr['intro'] = "天堂湖位于上栗县赤山镇，原名黄土开水库，1958年修造。水面1050亩，库容量1200万方，三面环山，一面是大坝，大坝高20米，".
    "长140余米，呈带状形，湖中有些小岛，岛上树木丛生，参差不齐，透着勃勃生机，湖的左右有两座连绵起伏的青山，叫夜合山。 已在天堂湖建起了“得".
    "月楼”、“百利度假村”、“天堂湖避暑山庄”等亭台楼阁。<br>天堂湖湖面并不宽阔，水质却出奇的好，三面是山，远处有小岛，岛上有树，郁郁葱葱；游".
    "人在水里扑腾，木舟在水面上爬行；水面上有快艇，时而呼啸而过，激起雪白的水花；湖光山色，好不惬意。<br>湖的左右有两座连绵起伏的青山，叫夜合山。".
    "目前已在天堂湖建起了“得月楼”、“百利度假村”、“天堂湖避暑山庄”等亭台楼阁，这些各具特色的现代化建筑，点缀在青山绿水之中，使天堂湖更具特色。天".
    "堂湖现已成为一个天然游泳池，成为人们休闲、避暑、消夏的好去处。";
    $arr['src'][0] = "t1.jpg";
    $arr['src'][1] = "t2.jpg";
    $arr['src'][2] = "t3.jpg";
    echo json_encode($arr);
  }
  if($id==5){
    $arr['intro'] = "赤山镇丰泉村石洞口历史属于傩文化之乡，有傩文化宝库之称，是个开发特色旅游业极好的项目。石洞口傩文化的起源，据当地杜氏家".
    "谱中“傩自周始”的记载来推断，石洞口的袒文化在历史的长河中已经延续了两千多年傩面具是傩文化中最具特征的符号。随着历史的进程，它的内涵愈来愈".
    "丰富，覆盖面愈来愈宽，从原始的驱逐疫鬼，发展到驱恶、逐疫、祛灾、避难、镇邪、占卜、治病、求子、求财、祈禄、纳吉等等。逐渐朝着宗教化、世俗".
    "化、人性化、写实化的方向发展。据石洞口从事傩祭活动的老道士遗存下来的道书中所列举的明清时期傩神面人物有600多个，其中有天神、地神、冥神，历".
    "史人物、征战英雄。这些傩神除在庙中的神殿上挤得满满的外，凡居住在石洞口的百姓家都在家中设了神案，供奉着一两只或三四只傩神面具。真可谓家家设".
    "神案，户户有傩神。<br>洞口的傩舞（旧时叫仰傩神、踩傩神或跳傩神）历史上就誉满萍城，并逐渐从娱神演化成人的文化活动。清乾隆年间有一位就任萍乡".
    "知县的胥绳武，写过一首咏傩《竹枝词》：“五隅年例扮迎春，忙煞城里城外人，所幸太平有个事，顽随衡去跳傩神。”石洞口傩舞，音乐古朴，舞姿粗犷，色".
    "彩神秘，且呈现出不同层次、不同历史阶段发展的痕迹，不仅有着深奥的文化内涵和较高的观赏价值，给现代艺术以借鉴和启迪，还为宗教学、民族学、历史".
    "学、艺术学、人类学乃至东方文化的研究提供了十分珍贵的活教材。目前，萍乡傩文化已成为国家AAAAA级古色文化景观。";
    $arr['src'][0] = "sd1.jpg";
    $arr['src'][1] = "sd2.jpg";
    $arr['src'][2] = "sd3.jpg";
    echo json_encode($arr);
  }
  if($id==6){
    $arr['intro'] = "2017年夏天，荆坪村新辟的荷花池以其独特的乡村田园风光成为美丽乡村新地标。宽阔平坦的乡村道路，洁白整齐的农房，独具匠心的园林".
    "景观，特别是晚上，整个村庄流光溢彩，五彩灯光演绎出春江花月夜的盛世华章。<br>荆坪，一个美丽的小山村。位于上栗县桐木镇中心城区以西3公里处，面".
    "积4.5平方公里，上万线贯穿境内，依山傍水，自然环境优美，不失为踏步游的好地方。<br>文化注入力量，美景装饰家园，在镇党委政府，村支两委的带领下，".
    "智慧、勤劳的荆坪人挥洒汗水积极投身新农村建设大潮中，一个更加宜居，更加幸福的美丽荆坪正朝我们阔步而来！";
    $arr['src'][0] = "c1.jpg";
    $arr['src'][1] = "c2.jpg";
    $arr['src'][2] = "c3.jpg";
    $arr['src'][3] = "c4.jpg";
    echo json_encode($arr);
  }
  if($id==7){
    $arr['intro'] = "幕冲村依托“崇尚自然，绿色发展”的特色农业环保理念,秉承产业扶贫，党建引领，共同致富的宗旨，通过“乡村灯光秀”创意活动，吸引了包".
    "括中央电视台在内的各大网络媒体报道，迅速崛起为美丽新农村。站在村里的主干道放眼望去，足有50米长的火红灯笼墙特别显眼，在这里看，而是人来人往，生".
    "机一片。幕冲人自办首届“金丝皇菊文化节”，用秋的收获、金的热烈，喜迎八方来客。油纸伞、风车将幕冲装点得古典而又欢快，古朴的丰泉傩舞队踏着铿锵的锣".
    "鼓声穿行在游客当中，旗袍秀、街舞、广场舞在乡间演绎，田园歌声、大合唱唱出繁华盛世。江西省萍乡市上栗县赤山镇幕冲村生态基地人声鼎沸，灯光世界如梦".
    "如幻，五颜六色的各式灯光，显得特别耀眼。灯光组成的玫瑰花、蘑菇云、雨伞等造型，好看又有趣，在立体灯光的映照下，乡村的夜空增加了别样韵味。这场由".
    "幕冲村民众自发组织的大型梦幻音乐灯光秀活动吸引不少群众前往观赏。";
    $arr['src'][0] = "cs1.jpg";
    $arr['src'][1] = "cs2.jpg";
    $arr['src'][2] = "cs3.jpg";
    echo json_encode($arr);
  }
  if($id==8){
    $arr['intro'] = "江西萍实文化创意产业园，是切合当前经济发展走势，在现毛家湾文化村已评定为“国家AAA级旅游景区”、“省AAAA级乡村旅游点”、“全国休闲".
    "农业乡村旅游示范点”＂中国乡村旅游金牌农家乐＂原貌基础上而转型升级的文化创意产业园。整个园区仿江南少数民族建筑风格建造。园区内绿茵环抱，风景秀丽，".
    "古老的城墙、鼓楼牌坊、大型水车、红色旧址等十多处观赏游览景点，再现中华民族勤劳古朴的优良传统。<br>这儿绿树成荫，这儿鸟语花香，这儿的夜晚宁静安详，".
    "让人流连忘返、久久不忍离去。然而，这儿根植在泥土里的浓郁的红色情怀，更是触动着人们的灵魂，引人陷入无限的遐思……这儿，就是地处上栗县彭高镇的毛家湾文化村。<br>".
    "毛家湾文化村占地面积约60亩，由“红色文化”、“民俗文化”、“休闲娱乐”三大部分组成，与地处市区的秋收起义广场遥相呼应，静静地诉说着生长在朴实乡村里的红色情怀。<br>".
    "彭高毛家文化村以其浓郁的红色情怀、健康朴实的绿色娱乐休闲、优越的地理位置深得人们的喜爱。";
    $arr['src'][0] = "p1.jpg";
    $arr['src'][1] = "p2.jpg";
    $arr['src'][2] = "p3.jpg";
    echo json_encode($arr);
  }
  if($id==9){
    $arr['intro'] = "江西萍实文化创意产业园，是切合当前经济发展走势，在现毛家湾文化村已评定为“国家AAA级旅游景区”、“省AAAA级乡村旅游点”、“全国休闲".
    "农业乡村旅游示范点”＂中国乡村旅游金牌农家乐＂原貌基础上而转型升级的文化创意产业园。整个园区仿江南少数民族建筑风格建造。园区内绿茵环抱，风景秀丽，".
    "古老的城墙、鼓楼牌坊、大型水车、红色旧址等十多处观赏游览景点，再现中华民族勤劳古朴的优良传统。<br>这儿绿树成荫，这儿鸟语花香，这儿的夜晚宁静安详，".
    "让人流连忘返、久久不忍离去。然而，这儿根植在泥土里的浓郁的红色情怀，更是触动着人们的灵魂，引人陷入无限的遐思……这儿，就是地处上栗县彭高镇的毛家湾文化村。<br>".
    "毛家湾文化村占地面积约60亩，由“红色文化”、“民俗文化”、“休闲娱乐”三大部分组成，与地处市区的秋收起义广场遥相呼应，静静地诉说着生长在朴实乡村里的红色情怀。<br>".
    "彭高毛家文化村以其浓郁的红色情怀、健康朴实的绿色娱乐休闲、优越的地理位置深得人们的喜爱。";
    $arr['src'][0] = "p1.jpg";
    $arr['src'][1] = "p2.jpg";
    $arr['src'][2] = "p3.jpg";
    echo json_encode($arr);
  }
  if($id==10){
    $arr['intro'] = "青山如黛、游廊如龙，水光潋滟、红鱼嬉戏，一座座徽派民居点缀其中，一派江南风光尽收眼底。这就是中国红鱼文化村，坐落于上栗县福田镇战山村，".
    "因农业部2008年将战山红鲫鱼定为农产品地理标志而得名。<br>寺内建筑规模宏大，内有祖师殿、前殿、正殿、后殿、配殿和左右厢房数十间，殿中飞檐翘壁，钩心斗角，".
    "雕梁画栋，无不体现出我国古代劳动者的智慧和工艺。九岭十八坡间原建有殿宇房屋三百余间，是赣西历史悠久的古寺之一。<br>瑶金山寺内现有保护完好的唐代栽植的罗".
    "汉松，树高8米余、胸径约0.5米。后栽植的桂花树，生长茂盛，四季飘香。金山寺原上供诸佛圣及神像，前供三清关圣，诸圣像，左祖师殿，右观音殿，两旁厢房百余间，".
    "明进士、罗洪先、御史邹元标等多有题词。瑶金山寺门前，存有唐代祖师彭普明手植罗汉松一株，邹元标题写的石碑“唐开元年间植，古罗汉松，明南阜山人题”。";
    $arr['src'][0] = "js1.jpg";
    $arr['src'][1] = "js2.jpg";
    echo json_encode($arr);
  }
  if($id==11){
    $arr['intro'] = "楚王台坐落在上栗县桐木镇楚山之上，初唐韩吏部自潮移袁过其庙而留咏，有“犹有国人怀旧德，一间茅屋祀楚王”之句。清胥绳武又说：“楚山拨地白云中，".
    "作之庙以敬祀昭王。一夕风雨徒山下，乡人日络绎来祝祷”。<br>楚昭王庙，因一贯多白蚁，整座庙只剩下几垛墙，只剩石门架。有一块石碑高70公分，宽30公分，头上刻着“楚".
    "昭台”，中间是“昭王圣帝神位”。还存有乾隆年间的香炉。在当地政府的重视和村民的努力下，逐渐修好了楚昭王庙，恢复其原貌。";
    $arr['src'][0] = "cw1.jpg";
    echo json_encode($arr);
  }
  if($id==12){
    $arr['intro'] = "在桐木集镇边的雅溪河畔，一座凝红重檐的八角亭横卧于葱绿山头，尽显磅礴之气和秀美之姿，这里便是雅溪村郭家山农民公园。公园以青石板筑登山道，".
    "蜿蜒穿行各种景观树木花卉之中，山顶文体活动广场设施一应俱全";
    $arr['src'][0] = "gj.jpg";
    echo json_encode($arr);
  }
  if($id==13){
    $arr['intro'] = "距上栗县城正东7公里的鸡冠山乡，有座山叫鸡冠岭。鸡冠岭海拔574.7米，典型的岩溶地貌，山上森林茂密，怪石嶙峋，地势险要，易守难攻，历来为兵".
    "家必争之地。山顶上有一处山寨，那是一座充满故事和传说的罗家寨。<br>在道路的两旁，长满了银花花的芦苇：白白的、软软的，像一簇簇轻盈的羽毛，凭借山风，都往一".
    "个方向摇摆，野趣天成，风情独特。<br>越往里走，道路两旁的树叶越繁茂，繁茂的程度足以抵挡住夏日的阳光。我们在树洞里穿行，耳边是小鸟欢快的歌声和山风轻抚树叶".
    "＂沙沙＂的伴奏。<br>罗家寨位于幕埠山脉和罗霄山脉的交接处的杨岐乡鸡冠林场的一个山凹里。杨岐罗家寨风景秀丽，冬暖夏凉；这里群山叠翠，林木葱郁；水质和空气质".
    "量特优，森林覆盖率高，境内主要有杉、香樟、梓、枫、榔树和毛竹等树种，人文景观有:王二仙庙、红军驻址、红军烈士墓、烽火台、龙王寺、陪读柏、知表点等;自然景观".
    "有:牛鼻子洞、锣古洞、消水洞、枫叶谷、翠竹林等。<br>七十年代初期，城里许多的知识青年响应毛主席发出的“知识青年到农村去，接受贫下中农的再教育”的号召来到了".
    "这里，艰苦创业，垦荒造林，把自己的青春年华留在了这片山林里。<br>这里曾留下了知青们的梦想，留下了他们对革命事业无限的忠诚，也留下了他们的爱恨情仇";
    $arr['src'][0] = "lj1.jpg";
    $arr['src'][1] = "lj2.jpg";
    $arr['src'][2] = "lj3.jpg";
    $arr['src'][3] = "lj4.jpg";
    $arr['src'][4] = "lj5.jpg";
    $arr['src'][5] = "lj6.jpg";
    echo json_encode($arr);
  }
?> 