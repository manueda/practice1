{"filter":false,"title":"index2.php","tooltip":"/index2.php","undoManager":{"mark":95,"position":95,"stack":[[{"start":{"row":0,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <form action=\"index.php\" method=\"POST\">","            <label>名前: <input type=\"text\" name=\"target_name\"></label>","            <input type=\"submit\" value=\"送信\">","        </form>","        <?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん</p>","    </body>","</html>",""],"id":1}],[{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"remove","lines":["ん"],"id":2},{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"remove","lines":["さ"]}],[{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"insert","lines":["a"],"id":3},{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"insert","lines":["a"]}],[{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"remove","lines":["a"],"id":4},{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"remove","lines":["a"]}],[{"start":{"row":16,"column":84},"end":{"row":16,"column":86},"action":"insert","lines":["ああ"],"id":6}],[{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"remove","lines":["あ"],"id":7},{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"remove","lines":["あ"]}],[{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"insert","lines":["s"],"id":8},{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"insert","lines":["a"]},{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"insert","lines":["n"]},{"start":{"row":16,"column":87},"end":{"row":16,"column":88},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":88},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":17,"column":0},"end":{"row":17,"column":8},"action":"insert","lines":["        "]},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["\\"]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"remove","lines":["\\"],"id":10},{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"remove","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":88},"end":{"row":17,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":87},"end":{"row":16,"column":88},"action":"remove","lines":["n"]},{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"remove","lines":["n"]}],[{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"remove","lines":["a"],"id":11},{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"remove","lines":["s"]}],[{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"insert","lines":["`"],"id":12},{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"insert","lines":["s"]},{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"insert","lines":["a"]},{"start":{"row":16,"column":87},"end":{"row":16,"column":88},"action":"insert","lines":["n"]},{"start":{"row":16,"column":88},"end":{"row":16,"column":89},"action":"insert","lines":["n"]}],[{"start":{"row":16,"column":89},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":17,"column":0},"end":{"row":17,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"remove","lines":["    "],"id":14},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":89},"end":{"row":17,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":88},"end":{"row":16,"column":89},"action":"remove","lines":["n"]},{"start":{"row":16,"column":87},"end":{"row":16,"column":88},"action":"remove","lines":["n"]},{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"remove","lines":["a"]},{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"remove","lines":["s"]}],[{"start":{"row":16,"column":85},"end":{"row":16,"column":87},"action":"insert","lines":["さん"],"id":18}],[{"start":{"row":0,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>",""],"id":19}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":2},"action":"remove","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>"],"id":20}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":21}],[{"start":{"row":0,"column":0},"end":{"row":16,"column":2},"action":"insert","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>"],"id":23}],[{"start":{"row":16,"column":2},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":24}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":52},"action":"remove","lines":["date_default_timezone_set('Asia/Tokyo');"],"id":34}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":52},"action":"insert","lines":["date_default_timezone_set('Asia/Tokyo');"],"id":35}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":52},"action":"remove","lines":["date_default_timezone_set('Asia/Tokyo');"],"id":36}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":52},"action":"insert","lines":["date_default_timezone_set('Asia/Tokyo');"],"id":37}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"remove","lines":["n"],"id":38},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["r"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["u"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"remove","lines":["t"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["e"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["r"]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["p"],"id":39},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["r"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["i"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["n"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["t"],"id":40},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["n"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"remove","lines":["i"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"remove","lines":["r"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"remove","lines":["p"]}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["r"],"id":41},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["e"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["s"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["u"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["l"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"remove","lines":["t"],"id":42},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["l"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"remove","lines":["u"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"remove","lines":["s"]}],[{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["t"],"id":44},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["u"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["e"],"id":45}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["r"],"id":46},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":25,"column":52},"end":{"row":25,"column":53},"action":"remove","lines":["e"],"id":47}],[{"start":{"row":25,"column":52},"end":{"row":25,"column":53},"action":"insert","lines":["e"],"id":48}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["2"],"id":49}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["t"],"id":50},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["l"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["u"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["s"]}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["t"],"id":51},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["u"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["r"]},{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["n"],"id":52},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["r"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["u"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["t"]},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"remove","lines":["e"]}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["e"],"id":53},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["s"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["u"]}],[{"start":{"row":5,"column":12},"end":{"row":5,"column":17},"action":"remove","lines":["$resu"],"id":54},{"start":{"row":5,"column":12},"end":{"row":5,"column":19},"action":"insert","lines":["$result"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["t"],"id":55},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["l"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["u"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["s"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["t"],"id":56},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["u"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["r"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["n"],"id":57},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["r"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["u"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["t"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["e"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["r"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["p"],"id":58},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["r"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["i"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["n"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["t"]}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["t"],"id":59},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["n"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["i"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["r"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["p"]}],[{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"insert","lines":["r"],"id":60},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"insert","lines":["e"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["t"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["u"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["r"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"remove","lines":["n"],"id":61},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["r"]},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["u"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["t"]}],[{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"insert","lines":["s"],"id":62},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"insert","lines":["u"]},{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"insert","lines":["l"]},{"start":{"row":8,"column":18},"end":{"row":8,"column":19},"action":"insert","lines":["t"]}],[{"start":{"row":25,"column":51},"end":{"row":25,"column":52},"action":"remove","lines":["g"],"id":63}],[{"start":{"row":33,"column":71},"end":{"row":33,"column":72},"action":"remove","lines":["e"],"id":64}],[{"start":{"row":33,"column":70},"end":{"row":33,"column":71},"action":"remove","lines":["g"],"id":65}],[{"start":{"row":33,"column":70},"end":{"row":33,"column":71},"action":"insert","lines":["g"],"id":67},{"start":{"row":33,"column":71},"end":{"row":33,"column":72},"action":"insert","lines":["e"]}],[{"start":{"row":25,"column":51},"end":{"row":25,"column":52},"action":"insert","lines":["g"],"id":68}],[{"start":{"row":30,"column":12},"end":{"row":30,"column":40},"action":"remove","lines":["$now_hour =  (int)date(\"H\");"],"id":69}],[{"start":{"row":30,"column":12},"end":{"row":30,"column":40},"action":"insert","lines":["$now_hour =  (int)date(\"H\");"],"id":70}],[{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"remove","lines":["_"],"id":71},{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"remove","lines":["w"]},{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"remove","lines":["o"]},{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"remove","lines":["n"]}],[{"start":{"row":30,"column":13},"end":{"row":30,"column":14},"action":"insert","lines":["n"],"id":72},{"start":{"row":30,"column":14},"end":{"row":30,"column":15},"action":"insert","lines":["o"]},{"start":{"row":30,"column":15},"end":{"row":30,"column":16},"action":"insert","lines":["w"]},{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"insert","lines":["-"]}],[{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"remove","lines":["-"],"id":73}],[{"start":{"row":30,"column":16},"end":{"row":30,"column":17},"action":"insert","lines":["_"],"id":74}],[{"start":{"row":30,"column":33},"end":{"row":30,"column":34},"action":"remove","lines":["e"],"id":75}],[{"start":{"row":30,"column":33},"end":{"row":30,"column":34},"action":"insert","lines":["e"],"id":76}],[{"start":{"row":30,"column":30},"end":{"row":30,"column":34},"action":"remove","lines":["date"],"id":77},{"start":{"row":30,"column":30},"end":{"row":30,"column":34},"action":"insert","lines":["date"]}],[{"start":{"row":33,"column":85},"end":{"row":33,"column":86},"action":"insert","lines":["\\"],"id":78}],[{"start":{"row":33,"column":85},"end":{"row":33,"column":86},"action":"remove","lines":["\\"],"id":79},{"start":{"row":33,"column":84},"end":{"row":33,"column":85},"action":"remove","lines":["`"]}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"remove","lines":["ル"],"id":80},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["ト"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"remove","lines":["イ"]},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"remove","lines":["タ"]}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["a"],"id":81},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"insert","lines":["a"]},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"insert","lines":["a"]},{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"insert","lines":["a"]}],[{"start":{"row":21,"column":18},"end":{"row":21,"column":19},"action":"remove","lines":["a"],"id":82},{"start":{"row":21,"column":17},"end":{"row":21,"column":18},"action":"remove","lines":["a"]},{"start":{"row":21,"column":16},"end":{"row":21,"column":17},"action":"remove","lines":["a"]},{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"remove","lines":["a"]}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"insert","lines":["朝"],"id":97}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":16},"action":"remove","lines":["朝"],"id":99}],[{"start":{"row":21,"column":15},"end":{"row":21,"column":19},"action":"insert","lines":["タイトル"],"id":107}],[{"start":{"row":21,"column":19},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":108},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "],"id":109},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":19},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":41},"end":{"row":26,"column":42},"action":"remove","lines":["信"],"id":110},{"start":{"row":26,"column":40},"end":{"row":26,"column":41},"action":"remove","lines":["送"]}],[{"start":{"row":26,"column":40},"end":{"row":26,"column":42},"action":"insert","lines":["ああ"],"id":112}],[{"start":{"row":26,"column":40},"end":{"row":26,"column":42},"action":"remove","lines":["ああ"],"id":124}],[{"start":{"row":26,"column":40},"end":{"row":26,"column":42},"action":"insert","lines":["送信"],"id":132}],[{"start":{"row":26,"column":42},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":133},{"start":{"row":27,"column":0},"end":{"row":27,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":27,"column":8},"end":{"row":27,"column":12},"action":"remove","lines":["    "],"id":134},{"start":{"row":27,"column":4},"end":{"row":27,"column":8},"action":"remove","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "]},{"start":{"row":26,"column":42},"end":{"row":27,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"remove","lines":["t"],"id":135}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["t"],"id":141}],[{"start":{"row":16,"column":2},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":144},{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":["\\"]}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"remove","lines":["\\"],"id":145},{"start":{"row":16,"column":2},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":15},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":146},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]},{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"insert","lines":["\\"]}],[{"start":{"row":28,"column":8},"end":{"row":28,"column":9},"action":"remove","lines":["\\"],"id":147},{"start":{"row":28,"column":4},"end":{"row":28,"column":8},"action":"remove","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "]},{"start":{"row":27,"column":15},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":27,"column":15},"end":{"row":28,"column":0},"action":"insert","lines":["",""],"id":148},{"start":{"row":28,"column":0},"end":{"row":28,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":28,"column":8},"end":{"row":33,"column":0},"action":"insert","lines":["<?php","    for ($i = 0; $i < 10; $i++) {","        print $i . '回目' . PHP_EOL;","    }","?>",""],"id":149}],[{"start":{"row":29,"column":23},"end":{"row":29,"column":24},"action":"remove","lines":["0"],"id":150},{"start":{"row":29,"column":22},"end":{"row":29,"column":23},"action":"remove","lines":["1"]}],[{"start":{"row":29,"column":22},"end":{"row":29,"column":23},"action":"insert","lines":["5"],"id":151}],[{"start":{"row":39,"column":11},"end":{"row":39,"column":46},"action":"insert","lines":["<?php print greeting($now_hour); ?>"],"id":152}],[{"start":{"row":39,"column":23},"end":{"row":39,"column":42},"action":"remove","lines":["greeting($now_hour)"],"id":153}],[{"start":{"row":39,"column":23},"end":{"row":39,"column":24},"action":"insert","lines":["$"],"id":154},{"start":{"row":39,"column":24},"end":{"row":39,"column":25},"action":"insert","lines":["i"]}],[{"start":{"row":39,"column":29},"end":{"row":39,"column":32},"action":"insert","lines":["回目の"],"id":162}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":34},"action":"remove","lines":["        print $i . '回目' . PHP_EOL;"],"id":163},{"start":{"row":29,"column":32},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":38,"column":29},"end":{"row":38,"column":31},"action":"remove","lines":["回目"],"id":164}],[{"start":{"row":38,"column":25},"end":{"row":38,"column":27},"action":"insert","lines":["回目"],"id":165}],[{"start":{"row":38,"column":26},"end":{"row":38,"column":27},"action":"remove","lines":["目"],"id":166},{"start":{"row":38,"column":25},"end":{"row":38,"column":26},"action":"remove","lines":["回"]}],[{"start":{"row":38,"column":29},"end":{"row":38,"column":31},"action":"insert","lines":["回目"],"id":172}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":9,"column":9},"end":{"row":9,"column":9},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526974747544,"hash":"ce95a663201fad7f41fb009af0a0d2c21ce71289"}