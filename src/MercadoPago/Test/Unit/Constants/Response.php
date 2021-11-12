<?php

namespace MercadoPago\Test\Unit\Constants;

class Response 
{

  public const RESPONSE_PAYMENT_METHODS_SUCCESS = [
    'response' => [
      0 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'debmaster',
        'max_allowed_amount' => 300000,
        'min_allowed_amount' => 5,
        'name' => 'Mastercard Débito',
        'payment_type_id' => 'debit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debmaster.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => '^(506302|506429)',
              'installments_pattern' => '',
              'pattern' => '^(506202|230868|506208|231018|542878|523595|506199|506305|506306|506307|506332|506333|588772|528430|551440|516016|524021|506269|535943|537030|526476|506323|551238|506259|529571|526354|539955|553467|516576|528074|534381|557604|506236|506257|532485|512280|516102|506250|506255|506304|526498|506212|539975|530113|506416|506414|550897|506392|506204|506249|529575|506201|506205|511265|538984|553800|554173|506275|557602|551515|523691|502275|506206|526194|526196|526197|551509|506415|511761|506383|506374|506402|506335|506265|535900|539944|506314|506411|506313|506245|506251|506386|526404|506274|506258|506353|506350|555924|506355|506410|506423|506424|506361|506247|506284|506352|506263|506432|506297|506287|506334|506364|506384|506320|506319|506344|506294|506283|506342|506282|506421|506393|506343|506439|506373|536783|549685|506367|506303|506254|506413|533922|516611|506337|506397|506398|506213|506277|506278|506279|506280|506377|511852|506422|506312|506441|506399|537938|506427|510586|538405|538088|506214|506215|506356|528480|506389|506351|506300|506354|506253|546378|516415|506309|533987|545290|545325|506311|506365|506380|506407|557920|557921|557922|557923|557924|506412|528598|531294|549672|506391|506428|511765|543924|506449|526400|551353|506405|506406|230884|230948|230951|557910|557909|557908|557907|557905|506217|545730|506218|589617|557906|517747|554628|504563|529093|517771|557991|551077|557561|550233|533609|551244|554627|504536|557875|557874|529028|525678|524711|520698|520694|520416|520116|517795|517721|517712|558426|554492|551081|517439|517440|549613|506228|557551|530686|518847|526424|516594|511114|506340|506270|506229|539177|559471|557671|511391|536324|543451|528514|538756|506458|555691)',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'active',
        'thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debmaster.gif',
      ],
      1 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'supported',
        'financial_institutions' => [
        ],
        'id' => 'amex',
        'max_allowed_amount' => 300000,
        'min_allowed_amount' => 1,
        'name' => 'American Express',
        'payment_type_id' => 'credit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/amex.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => NULL,
              'installments_pattern' => '^(?!341595|3603(2|4)|360732|36075(5|6)|360935|37159(3|5)|3747((5(8|9))|(62))|3751(3([0-9])|7(7|8))|3764((0([0-9]))|(1([0-8]))|(2(2|8|9))|(3(6|7))|(4[0-9]|5[0-8])|(6([1-7])|7[0-8]|8[0-9]|9(1|3)))|37652(0|9)|37660((1|2)|[5-9])|376((6(2[0-9]|3[5-9]|8[5-8]))|71[0-4])|3771(69|74)|37779[0-8]|3778(0[2-6]|1[3-6]|20)|37782(5|6)|3799(6[6-8]|7(5|7)))',
              'pattern' => '^((34)|(37))',
            ],
            'card_number' => [
              'length' => 15,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'front',
              'length' => 4,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/amex.gif',
      ],
      2 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'supported',
        'financial_institutions' => [
        ],
        'id' => 'master',
        'max_allowed_amount' => 300000,
        'min_allowed_amount' => 5,
        'name' => 'Mastercard',
        'payment_type_id' => 'credit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/master.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => '^(506458|555691|231018|506208|541562|230868|506202|539177|531198|542878|506437|543691|506341|554964|527374|544505|589617|588772|559471|558426|557991|557924|557923|557922|557921|557920|557910|557909|557908|557907|557906|557905|557875|557874|557604|557602|557561|557551|555924|554964|554628|554627|554492|554173|553800|553467|551515|551509|551507|551440|551353|551244|551238|551081|551077|550897|550233|549685|549672|549613|546378|545730|545325|545290|543924|539978|539975|539955|539944|538984|538405|538088|537938|537030|536783|535943|535900|534926|534381|533987|533922|533609|532485|531294|530686|530113|529575|529571|529093|529028|528598|528480|528430|528074|526498|526476|526424|526404|526400|526354|526197|526196|526194|526192|525678|524711|524021|523691|523595|520698|520694|520416|520116|518847|517795|517771|517747|517721|517712|517440|517439|516611|516594|516576|516415|516102|516016|512280|511852|511765|511761|511265|511114|510586|506449|506441|506439|506432|506429|506428|506427|506424|506423|506422|506421|506416|506415|506414|506413|506412|506411|506410|506407|506406|506405|506402|506399|506398|506397|506393|506392|506391|506389|506386|506384|506383|506380|506377|506374|506373|506367|506365|506364|506361|506356|506355|506354|506353|506352|506351|506350|506344|506343|506342|506341|506340|506337|506336|506335|506334|506333|506332|506323|506320|506319|506314|506313|506312|506311|506309|506307|506306|506305|506304|506303|506302|506300|506297|506294|506287|506284|506283|506282|506280|506279|506278|506277|506275|506274|506273|506270|506269|506265|506263|506259|506258|506257|506255|506254|506253|506251|506250|506249|506247|506245|506236|506229|506228|506221|506218|506217|506215|506214|506213|506212|506206|506205|506204|506201|506199|504563|504536|502275|522312|522794|523013|577991|528877|601660|230884|230948|230951|557671|511391|557937|512422|539186|548843|536324|543451|528514|538756)',
              'installments_pattern' => '^(?!534548|511747|534629|506434|230958|558306|512912|545608|526777|526777|532794|529595|506445|506444|514065|506442|534548|519111|522618|(5(0(1105|2121|5861|67(2(6|7|8)|3(0|1)|4(1|8)|7(5|6|8))|90(5(1|9)|6[7-9]|91))|1(0(147|447|512|541)|1(623|708|7(39|40))|2(06(7|9)|107|267|3(3(1|2)|63|7(0|4)))|3(368|557)|4(0(0(4)|8(6|7))|322|8(68|95)|9(11|45|54))|5(073|11(7|8)|590|6(01|58)|7(67|87)|8(94))|6(0(64|70)|159|2(20|30|75|83|9(1|2))|376|478|585)|7(640|756|805|980)|8(148|2(77|94)|3(13|61)|4(54|82)|5(36|44)|664|7(59|6(1|7))|8(14|41|50)|9(14|50))|9(603|7(0(2|4)|1(0|4)|70)))|2(0(0(53|79)|1(32|56|84)|3(59|63)|4(0[0-3]|5)|898|9(77|95))|1(039|1(74|80)|3(12|7(0|3)|88|97)|5(09|2(3|4))|8(06|72|92))|2(073|135|273|4(46|99)|590|760|8(15|32|40)|97(2|8))|3(284|457|758|9(16|20|37))|4(003|348|70(2|3)|820)|5(320|4(25|8(6|9)|96)|6(31|40|6[2-4])|718|860|922)|6(396|549|7(69|78|8(7|8))|8(10|6(2|3)|92)|96(2|5|6|8))|7(4((05|06)|25|3(0|7)|6(2|8)|9[5-7])|5(15|33|72)|6(08|09|16|19|60|80|89|97))|8(052|209|392|400|5(87|99)|635|743|860)|9(053|2(05|85)|32(3|9)|86(1|7)|88(1|3|5)))|3(0(0(3(3|4|8)|58|7(2|3))|228|3(63|7(1|2|3))|452|57(4|5)|69(5|6)|780|841|99(4|8))|1(015|3(04|21)|448|6(54|6(3|4)|81)|705|966)|2(198|3(69|79|84|99)|473|817|9(24|30))|3(027|225|5(16|7(1|9))|728)|4(004|150|2(4|(6|9)|62)|447|5(03|1(3|6)|20|43|61|93))|5(0(16|8(1|5|8)|9(1|4|7))|106|32(3|7)|8(22|58|63|67|71))|6(087|143|2(33|69)|380|492|5(18|37)|650|805|969)|7(110|83(1|8))|8(8(07|18))|9(0(1(6|8)|2(8|9)|39|59|6(3|8)|73|83|9(0(0|1))|181|61(2|4)|9(09|19))))|4(0(0(64|78|84)|10(5|6)|168|47(6|7)|593|6(25|31|9(0|1|2|5))|782|9(05|19))|1(187|203|320|465|555|6(46|59|78|94)|7(19|59))|2(418|528|66(1|3)|7(02|19)|8(20|65)|9(74|76|91))|3(4(21|48)|565|696|8(06|55|85))|4(014|199|3(00|12|15)|5(40|70)|6(54|65)|7(31|64)|8(17|28|29|39|59|63|83|91)|9(08|15))|5(053|196|301|430|652|7(12|19|68)|8(10|32)|973)|6(056|4(52|79|99)|55(2|3)|6(16|24|38|89)|7(44|68)|852)|7(059|1(29|3(0|4)|4(1|2)|71)|369|408|874)|8(04(5|6)|166|2(62|93|95)|315|4(74|80)|5(73|9(0|1|5))|6(4(8|9)5(2|3))|7(2(3|4|9)|40|90)|8(2(4|6|7))|9(84|85|98))|9(0(12|20|51|70)|1(5(6|7|8|9)|6(2|3|7))|3(1(8|9)|2(8|9)|39|59|6(3|8)|83|9(0|1))|4(27|51)|585|828))|5(0(154|2(09|30)|568)|1000|2(072|1(28|67)|2(36|52|89|97)|3(0(0|5))|16|36|5(30|61)|6(40|68|93)|937)|3(0(07|96)|444|6(24|3(3|6|8|9)|4(3|5|6|8|9)|5(6|9)|6(5|8)|7(0|2|4)))|4(288|383|4(63|73|82)|61(0|2)|773|865|9(0(4|6)|17|27|3(2|3)|99))|5845|6615|7039|8(285|7(27|63))|9(198|202))|7(5809)|8(9(562|657|892|916))|9(0712))))',
              'pattern' => '^(5|(286900)|(627180)|(2(221|222|223|224|225|226|227|228|229|23|24|25|26|27|28|29|3|4|5|6|70|71|720)))',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/master.gif',
      ],
      3 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'debvisa',
        'max_allowed_amount' => 300000,
        'min_allowed_amount' => 5,
        'name' => 'Visa Débito',
        'payment_type_id' => 'debit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => '^(477130|400820|476684|476687|429522)',
              'installments_pattern' => '',
              'pattern' => '^(433126|411117|411673|451312|433194|405689|400819|480062|476840|474174|434798|422671|425983|433454|425984|491282|491089|483030|421316|474176|430967|480078|476588|491365|491580|491567|491566|442192|418928|490256|477961|477261|477177|476890|476687|446986|446985|490950|473993|469495|466397|467596|400889|441549|441545|429522|405930|449700|449187|408340|446115|441312|498587|455509|446117|446116|411808|408343|481517|446118|408341|481516|455537|455533|455510|410177|455511|441313|415231|409851|491566|416916|418914|407612|435769|428464|465762|413098|432049|446878|445016|445017|469693|460700|460766|400195|412432|415269|421364|402766|419821|480066|480076|457386|483104|483112|419822|419823|457249|408400|421003|426188|485043|485044|400443|410128|465828|465829|492143|407848|426808|465495|465496|465497|465498|444888|444889|491344|481279|405063|419334|419335|438099|459497|460068|474646|479303|422299|471239|457476|412294|420807|498588|498590|404313|420839|420831|412408)',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/debvisa.gif',
      ],
      4 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'toka',
        'max_allowed_amount' => 200000,
        'min_allowed_amount' => 5,
        'name' => 'Toka',
        'payment_type_id' => 'debit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => NULL,
              'installments_pattern' => NULL,
              'pattern' => '^(420839|506302|506202|506429|506208|506316|230868|539177|420831)',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'testing',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/debvisa.gif',
      ],
      5 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'tengo',
        'max_allowed_amount' => 200000,
        'min_allowed_amount' => 5,
        'name' => 'Tengo',
        'payment_type_id' => 'debit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => NULL,
              'installments_pattern' => NULL,
              'pattern' => '^(506382|511747|534548)',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'testing',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/debvisa.gif',
      ],
      6 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'edenred',
        'max_allowed_amount' => 200000,
        'min_allowed_amount' => 5,
        'name' => 'Edenred',
        'payment_type_id' => 'debit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => NULL,
              'installments_pattern' => NULL,
              'pattern' => '^(636318|506303|636318|558306)',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'testing',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/debvisa.gif',
      ],
      7 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'sodexo',
        'max_allowed_amount' => 200000,
        'min_allowed_amount' => 5,
        'name' => 'Sodexo',
        'payment_type_id' => 'debit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/debvisa.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => NULL,
              'installments_pattern' => NULL,
              'pattern' => '^(506444|506445|506365|230984|627535|506273|506336)',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'testing',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/debvisa.gif',
      ],
      8 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'carnet',
        'max_allowed_amount' => 200000,
        'min_allowed_amount' => 5,
        'name' => 'Carnet',
        'payment_type_id' => 'credit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/14b2cb40-e3bc-11ea-a26c-a3e05eb53570-m@2x.png',
        'settings' => [
        ],
        'status' => 'testing',
        'thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/14b2cb40-e3bc-11ea-a26c-a3e05eb53570-m@2x.png',
      ],
      9 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
          0 => 'cardholder_name',
        ],
        'deferred_capture' => 'supported',
        'financial_institutions' => [
        ],
        'id' => 'visa',
        'max_allowed_amount' => 300000,
        'min_allowed_amount' => 5,
        'name' => 'Visa',
        'payment_type_id' => 'credit_card',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/visa.gif',
        'settings' => [
          0 => [
            'bin' => [
              'exclusion_pattern' => '^(427295|411117|411673|428575|428574|474494|400820|498589|498590|498588|498587|492143|491580|491567|491566|491365|491344|491282|491089|490950|490256|485044|485043|483112|483104|483030|481517|481516|481279|480078|480076|480066|480062|479303|477961|477261|477177|477130|476890|476840|476687|476684|476588|474646|474176|474174|473993|471239|469693|469495|467596|466397|465829|465828|465762|465498|465497|465496|465495|462278|460766|460700|460068|459497|457476|457386|457249|455537|455533|455511|455510|455509|451312|449700|449187|446986|446985|446878|446118|446117|446116|446115|445017|445016|444889|444888|442192|441549|441545|441313|441312|438099|435769|434798|433454|433194|433126|432049|430967|429522|428464|426808|426188|425984|425983|422671|422299|421364|421316|421003|420807|419823|419822|419821|419335|419334|418928|418914|416916|415269|415231|413131|413098|412432|412294|411808|410177|410128|409851|408400|408343|408341|408340|407848|407612|405930|405689|405063|402766|400889|400820|400819|400443|400195|404313|420831|420839|443834|451015|440393|465283|412408)',
              'installments_pattern' => '^(?!(405067|426174|492144)|4(0(0(022|1(0(3|4)|63|7(6|8)|85|99)|2(17|25|4(7|8)|68)|344|4(3(7|9)|49|75|89)|6(34|47|54|89)|770|970)|1(093|178|200|370|684)|2(145|400|7(02|8[5-8]|9(1(7|8)|37|44)))|3(2(17|25|4(6|7)|54)|338|784)|4(024|280|370)|5(0(37|71)|6(43|9[3-5]))|6(1(6(6|8))|263|6(55|69)|897|997)|7(3(0(3|4))|4(09|38)|505|618)|9(152|308|6(0[1-3]|9(0|3))|744|9(21|8(3|4))))|1(0(0(39|84)|39[0-2]|4(07|2(4|5))|718|863)|1(0(5(0|4)|93)|759|8(0(1|4)|54))|2(1(77|87)|345|79(1|3))|4(7(09|20|40|91))|5(2(7(4|5)|8(1|3))|328)|6(0(23|94)|4(1[4-7]|2(4|5)))|7(9(5[3-5]|98))|8(0(4(4|7|8|9)|53)|668)|9(1(48|89|90)|590|6(19|2(0|3|5|8))|806))|2(0(061|3(12|3(8|9)|4(0|1)|767))|1(3(09|55|65|79)|4(01|10)|5(71|91)|644|84[3-8]|9(5(8|9)|6(0|2|4|5)))|2(0(0[4-6]|1(1|2)|23|53|61)|1(0(0|1|3)|85)|2(0(0|1)|74)|463|754)|3(669|808|9(25|44))|4(631|96(5|6))|5(8(2(1|2)|50)|944)|6(055|451|6(84|90))|7(16(4|7))|8(26[7-9]|304)|9768)|3(0(023|49(5|6|7)|535|963)|1307|2(03([0-2]|5)|72(8|9)|959)|3(4(41|60)|8(07|1(0|2|7)|2(2|6)|3(0|1|3)|47))|4(25[6-8]|639|769|9(49|56|95))|6618|7846|8(001|2(2(8|9)|30)|85(4|7)|935)|9(0(13|2(0|7))|14(0|4)|2(5(2|3)|67|76)|3(54|8(8|9)|90)))|4(0(066|69|(3|4))|1(080|1(20|74)|524)|2(01(4|5)|174|312|644|7(42|75))|4(054|4(34|5[6-9])|796)|5596|6(54(0|2)|690|867)|7(198|4(09|10))|8(165|459|502|7(33|99))|9(1(19|28|37|88)))|5(0(0(03|60)|40(7|8)|553|6(26|37|68)|75(0|1)|8(15|3(2|3|8)|4(3|4)|78)|9(10|7(2|9)|80|9(4|5)))|1(248|3(0[7-9]|42)|4(46|51|76)|786)|2(4(07|8(7|8)))|3(211|562)|4(07[3-5]|148|4(25|5(0|1))|6(00|4[0-2]|5[7-9])|8(12|32|45|5(0|1)))|5(1(03|7(0|5|9)|8([1-5]|[7-9])|9[6-9])|349|599|788|98(3|6))|6(137|4(60|7(3|7))|5(13|6[4-6]|8[2-4])|815)|7(0(21|55)|29(1|3)|305|5(09|15)|631|9(3(7|8)|43))|8919|9(0(2(0|3)|60|7(7|8)|80)|3(1[3-6]|56|60|8(0|[3-5]))|4(1(8|9)|26|50)|50(4|5)|918))|6(003(4|5)|1(046|202)|2(080|239|937)|3(158|312)|4(018|29[4-9]|30(0|1))|5(375|7(63|70))|6(0(57|69|7(0|9)))|7(1(12|4(8|9))|481|793)|8(201|531)|9(7(0(0|1)|2(4|5)|7(1|2))|8(70|93)))|7(0(455|598|653)|1(70(1|3))|2(81(1|3))|3(2(00|4[6-8])|702)|4(472|5(12|25|3(8|9))|638)|5(393|491|776)|6(002|33[1-3]|5(07|39|40)|60(4|5|6|8)|993)|7(1(28|57|76)|2(50|72))|9(3(52|7[5-8]|95)))|8(158(2|3)|2(108|4(25|69|7(0|6|9)|81))|3(0(42|66)|1(01|54|61)|3(1(2|6)))|4(1(32|9(3|8)))|5(0(11|29)|4(64|82)|904)|6(422|510)|9(070|167|3(21|89|91)|4(23|67|89)|9(11|25)))|9(0(071|172|225|69(6|8))|1(2(56|68)|41(1|2)|51(1|4)|6(17|4(6|7)|69|7(4|5))|956)|2(0(43|52)|1(37|69|80)|210|306|964)|3(1(0[0-3])|1(0|6)|49(3|4)|7(02|1(5|7|9)|6(2|3|8)|7(0|1)|81)|813)|4(0(16|78)|17(2|3)|611)|6(0(34|45|79|80)|210|6(17|7(0|2)))|8(4(0(1|4|[6-8])|2(3|4)|3(0|1|4|5)|4(2|9)|5(2|3)|84|96)|5(34|54|82)|8(11|58|61))|9847)))',
              'pattern' => '^4',
            ],
            'card_number' => [
              'length' => 16,
              'validation' => 'standard',
            ],
            'security_code' => [
              'card_location' => 'back',
              'length' => 3,
              'mode' => 'mandatory',
            ],
          ],
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/visa.gif',
      ],
      10 => [
        'accreditation_time' => 0,
        'additional_info_needed' => [
          0 => 'identification_type',
          1 => 'identification_number',
          2 => 'entity_type',
        ],
        'deferred_capture' => 'unsupported',
        'financial_institutions' => [
        ],
        'id' => 'paycash',
        'max_allowed_amount' => 60000,
        'min_allowed_amount' => 20,
        'name' => 'PayCash',
        'payment_places' => [
          0 => [
            'payment_option_id' => '7eleven',
            'name' => '7 Eleven',
            'status' => 'active',
            'thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/417ddb90-34ab-11e9-b8b8-15cad73057aa-s.png',
          ],
          1 => [
            'payment_option_id' => 'circlek',
            'name' => 'Circle K',
            'status' => 'active',
            'thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/6f952c90-34ab-11e9-8357-f13e9b392369-s.png',
          ],
          2 => [
            'payment_option_id' => 'soriana',
            'name' => 'Soriana',
            'status' => 'active',
            'thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/dac0bf10-01eb-11ec-ad92-052532916206-s.png',
          ],
          3 => [
            'payment_option_id' => 'extra',
            'name' => 'Extra',
            'status' => 'active',
            'thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/9c8f26b0-34ab-11e9-b8b8-15cad73057aa-s.png',
          ],
          4 => [
            'payment_option_id' => 'calimax',
            'name' => 'Calimax',
            'status' => 'active',
            'thumbnail' => 'https://http2.mlstatic.com/storage/logos-api-admin/52efa730-01ec-11ec-ba6b-c5f27048193b-s.png',
          ],
        ],
        'payment_type_id' => 'ticket',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/paycash.gif',
        'settings' => [
        ],
        'status' => 'testing',
        'thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/paycash.gif',
      ],
      11 => [
        'accreditation_time' => 1,
        'additional_info_needed' => [
        ],
        'deferred_capture' => 'does_not_apply',
        'financial_institutions' => [
          0 => [
            'description' => 'SPEI',
            'id' => '1',
          ],
        ],
        'id' => 'clabe',
        'max_allowed_amount' => 5000,
        'min_allowed_amount' => 1,
        'name' => 'STP',
        'payment_type_id' => 'bank_transfer',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/clabe.gif',
        'settings' => [
        ],
        'status' => 'testing',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/clabe.gif',
      ],
      12 => [
        'accreditation_time' => 0,
        'additional_info_needed' => [
        ],
        'deferred_capture' => 'supported',
        'financial_institutions' => [
        ],
        'id' => 'meliplace',
        'max_allowed_amount' => 10000,
        'min_allowed_amount' => 10,
        'name' => 'Meliplaces',
        'payment_type_id' => 'ticket',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/xxxxx.gif',
        'settings' => [
        ],
        'status' => 'testing',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/xxxxx.gif',
      ],
      13 => [
        'accreditation_time' => 60,
        'additional_info_needed' => [
        ],
        'deferred_capture' => 'does_not_apply',
        'financial_institutions' => [
        ],
        'id' => 'banamex',
        'max_allowed_amount' => 40000,
        'min_allowed_amount' => 5,
        'name' => 'Citibanamex',
        'payment_type_id' => 'atm',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/banamex.gif',
        'settings' => [
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/banamex.gif',
      ],
      14 => [
        'accreditation_time' => 60,
        'additional_info_needed' => [
        ],
        'deferred_capture' => 'does_not_apply',
        'financial_institutions' => [
        ],
        'id' => 'bancomer',
        'max_allowed_amount' => 40000,
        'min_allowed_amount' => 10,
        'name' => 'BBVA Bancomer',
        'payment_type_id' => 'atm',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/bancomer.gif',
        'settings' => [
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/bancomer.gif',
      ],
      15 => [
        'accreditation_time' => 60,
        'additional_info_needed' => [
        ],
        'deferred_capture' => 'does_not_apply',
        'financial_institutions' => [
        ],
        'id' => 'serfin',
        'max_allowed_amount' => 40000,
        'min_allowed_amount' => 5,
        'name' => 'Santander',
        'payment_type_id' => 'atm',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/serfin.gif',
        'settings' => [
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/serfin.gif',
      ],
      16 => [
        'accreditation_time' => 2880,
        'additional_info_needed' => [
        ],
        'deferred_capture' => 'does_not_apply',
        'financial_institutions' => [
        ],
        'id' => 'oxxo',
        'max_allowed_amount' => 10000,
        'min_allowed_amount' => 5,
        'name' => 'OXXO',
        'payment_type_id' => 'ticket',
        'processing_modes' => [
          0 => 'aggregator',
        ],
        'secure_thumbnail' => 'https://www.mercadopago.com/org-img/MP3/API/logos/oxxo.gif',
        'settings' => [
        ],
        'status' => 'active',
        'thumbnail' => 'http://img.mlstatic.com/org-img/MP3/API/logos/oxxo.gif',
      ],
    ],
    'status' => 200,
  ];

}