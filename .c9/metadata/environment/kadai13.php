{"filter":false,"title":"kadai13.php","tooltip":"/kadai13.php","undoManager":{"mark":87,"position":87,"stack":[[{"start":{"row":0,"column":0},"end":{"row":36,"column":0},"action":"insert","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <form action=\"index.php\" method=\"POST\">","            <label>名前: <input type=\"text\" name=\"target_name\"></label>","            <input type=\"submit\" value=\"送信\">","        </form>","        <?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん</p>","    </body>","</html>",""],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":36,"column":0},"action":"remove","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <form action=\"index.php\" method=\"POST\">","            <label>名前: <input type=\"text\" name=\"target_name\"></label>","            <input type=\"submit\" value=\"送信\">","        </form>","        <?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん</p>","    </body>","</html>",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":36,"column":0},"action":"insert","lines":["<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <form action=\"index.php\" method=\"POST\">","            <label>名前: <input type=\"text\" name=\"target_name\"></label>","            <input type=\"submit\" value=\"送信\">","        </form>","        <?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん</p>","    </body>","</html>",""],"id":4}],[{"start":{"row":25,"column":69},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]},{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["<"]}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["l"],"id":6},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["a"]},{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"insert","lines":["b"]},{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["l"],"id":7}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":27},"action":"insert","lines":["></label>"],"id":8}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":21},"action":"insert","lines":["年齢"],"id":16}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["’"],"id":18}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":["’"],"id":19}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":[":"],"id":20}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"insert","lines":[" "],"id":21},{"start":{"row":26,"column":23},"end":{"row":26,"column":24},"action":"insert","lines":["<"]}],[{"start":{"row":26,"column":24},"end":{"row":26,"column":25},"action":"insert","lines":["i"],"id":22},{"start":{"row":26,"column":25},"end":{"row":26,"column":26},"action":"insert","lines":["n"]},{"start":{"row":26,"column":26},"end":{"row":26,"column":27},"action":"insert","lines":["p"]},{"start":{"row":26,"column":27},"end":{"row":26,"column":28},"action":"insert","lines":["u"]},{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":["t"]}],[{"start":{"row":26,"column":29},"end":{"row":26,"column":30},"action":"insert","lines":[" "],"id":23}],[{"start":{"row":26,"column":30},"end":{"row":26,"column":31},"action":"insert","lines":["t"],"id":24},{"start":{"row":26,"column":31},"end":{"row":26,"column":32},"action":"insert","lines":["y"]},{"start":{"row":26,"column":32},"end":{"row":26,"column":33},"action":"insert","lines":["p"]},{"start":{"row":26,"column":33},"end":{"row":26,"column":34},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":34},"end":{"row":26,"column":35},"action":"insert","lines":[" "],"id":25}],[{"start":{"row":26,"column":34},"end":{"row":26,"column":35},"action":"remove","lines":[" "],"id":26}],[{"start":{"row":26,"column":34},"end":{"row":26,"column":35},"action":"insert","lines":["="],"id":27}],[{"start":{"row":26,"column":35},"end":{"row":26,"column":36},"action":"insert","lines":["'"],"id":28},{"start":{"row":26,"column":36},"end":{"row":26,"column":37},"action":"insert","lines":["t"]},{"start":{"row":26,"column":37},"end":{"row":26,"column":38},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":38},"end":{"row":26,"column":39},"action":"insert","lines":["x"],"id":29},{"start":{"row":26,"column":39},"end":{"row":26,"column":40},"action":"insert","lines":["t"]},{"start":{"row":26,"column":40},"end":{"row":26,"column":41},"action":"insert","lines":["'"]}],[{"start":{"row":26,"column":40},"end":{"row":26,"column":41},"action":"remove","lines":["'"],"id":30}],[{"start":{"row":26,"column":40},"end":{"row":26,"column":41},"action":"insert","lines":["\""],"id":31}],[{"start":{"row":26,"column":41},"end":{"row":26,"column":42},"action":"insert","lines":[" "],"id":32}],[{"start":{"row":26,"column":42},"end":{"row":26,"column":43},"action":"insert","lines":["n"],"id":33},{"start":{"row":26,"column":43},"end":{"row":26,"column":44},"action":"insert","lines":["a"]},{"start":{"row":26,"column":44},"end":{"row":26,"column":45},"action":"insert","lines":["m"]},{"start":{"row":26,"column":45},"end":{"row":26,"column":46},"action":"insert","lines":["e"]},{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"insert","lines":["="]}],[{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"remove","lines":["="],"id":34}],[{"start":{"row":26,"column":46},"end":{"row":26,"column":47},"action":"insert","lines":["="],"id":35}],[{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"insert","lines":["'"],"id":36},{"start":{"row":26,"column":48},"end":{"row":26,"column":49},"action":"insert","lines":["t"]},{"start":{"row":26,"column":49},"end":{"row":26,"column":50},"action":"insert","lines":["a"]}],[{"start":{"row":26,"column":50},"end":{"row":26,"column":51},"action":"insert","lines":["r"],"id":37},{"start":{"row":26,"column":51},"end":{"row":26,"column":52},"action":"insert","lines":["g"]},{"start":{"row":26,"column":52},"end":{"row":26,"column":53},"action":"insert","lines":["e"]},{"start":{"row":26,"column":53},"end":{"row":26,"column":54},"action":"insert","lines":["t"]}],[{"start":{"row":26,"column":54},"end":{"row":26,"column":55},"action":"insert","lines":["_"],"id":38},{"start":{"row":26,"column":55},"end":{"row":26,"column":56},"action":"insert","lines":["n"]},{"start":{"row":26,"column":56},"end":{"row":26,"column":57},"action":"insert","lines":["a"]},{"start":{"row":26,"column":57},"end":{"row":26,"column":58},"action":"insert","lines":["m"]},{"start":{"row":26,"column":58},"end":{"row":26,"column":59},"action":"insert","lines":["e"]}],[{"start":{"row":26,"column":59},"end":{"row":26,"column":60},"action":"insert","lines":["\""],"id":39}],[{"start":{"row":26,"column":60},"end":{"row":26,"column":61},"action":"insert","lines":[">"],"id":40}],[{"start":{"row":26,"column":58},"end":{"row":26,"column":59},"action":"remove","lines":["e"],"id":41},{"start":{"row":26,"column":57},"end":{"row":26,"column":58},"action":"remove","lines":["m"]},{"start":{"row":26,"column":56},"end":{"row":26,"column":57},"action":"remove","lines":["a"]},{"start":{"row":26,"column":55},"end":{"row":26,"column":56},"action":"remove","lines":["n"]}],[{"start":{"row":26,"column":55},"end":{"row":26,"column":56},"action":"insert","lines":["a"],"id":42},{"start":{"row":26,"column":56},"end":{"row":26,"column":57},"action":"insert","lines":["g"]},{"start":{"row":26,"column":57},"end":{"row":26,"column":58},"action":"insert","lines":["e"]}],[{"start":{"row":34,"column":90},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":43},{"start":{"row":35,"column":0},"end":{"row":35,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":35,"column":8},"end":{"row":35,"column":92},"action":"insert","lines":["  <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん</p>"],"id":44}],[{"start":{"row":35,"column":25},"end":{"row":35,"column":44},"action":"remove","lines":["greeting($now_hour)"],"id":45}],[{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"remove","lines":["'"],"id":46}],[{"start":{"row":26,"column":47},"end":{"row":26,"column":48},"action":"insert","lines":["\""],"id":47}],[{"start":{"row":35,"column":69},"end":{"row":35,"column":85},"action":"insert","lines":["<?php print ; ?>"],"id":48}],[{"start":{"row":35,"column":81},"end":{"row":35,"column":91},"action":"insert","lines":["target_age"],"id":49}],[{"start":{"row":35,"column":80},"end":{"row":35,"column":81},"action":"remove","lines":[" "],"id":50}],[{"start":{"row":35,"column":80},"end":{"row":35,"column":81},"action":"insert","lines":[" "],"id":51}],[{"start":{"row":35,"column":81},"end":{"row":35,"column":82},"action":"insert","lines":["{"],"id":52}],[{"start":{"row":35,"column":81},"end":{"row":35,"column":82},"action":"remove","lines":["{"],"id":53}],[{"start":{"row":35,"column":81},"end":{"row":35,"column":82},"action":"insert","lines":["["],"id":54}],[{"start":{"row":35,"column":92},"end":{"row":35,"column":93},"action":"insert","lines":["]"],"id":55}],[{"start":{"row":35,"column":10},"end":{"row":35,"column":30},"action":"remove","lines":["<p><?php print ; ?>、"],"id":56}],[{"start":{"row":35,"column":49},"end":{"row":35,"column":77},"action":"remove","lines":["<?php print [target_age]; ?>"],"id":57}],[{"start":{"row":34,"column":84},"end":{"row":34,"column":112},"action":"insert","lines":["<?php print [target_age]; ?>"],"id":58}],[{"start":{"row":35,"column":9},"end":{"row":35,"column":53},"action":"remove","lines":[" <?php print $_POST['target_name']; ?>さん</p>"],"id":59},{"start":{"row":35,"column":8},"end":{"row":35,"column":9},"action":"remove","lines":[" "]},{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"remove","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"remove","lines":["    "]},{"start":{"row":34,"column":118},"end":{"row":35,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":34,"column":84},"end":{"row":34,"column":112},"action":"remove","lines":["<?php print [target_age]; ?>"],"id":60}],[{"start":{"row":34,"column":86},"end":{"row":34,"column":114},"action":"insert","lines":["<?php print [target_age]; ?>"],"id":61}],[{"start":{"row":34,"column":98},"end":{"row":34,"column":99},"action":"insert","lines":["("],"id":62}],[{"start":{"row":34,"column":111},"end":{"row":34,"column":112},"action":"insert","lines":[")"],"id":63}],[{"start":{"row":36,"column":7},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":64}],[{"start":{"row":36,"column":7},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":65}],[{"start":{"row":36,"column":7},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":66}],[{"start":{"row":36,"column":7},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":67}],[{"start":{"row":26,"column":35},"end":{"row":26,"column":36},"action":"remove","lines":["'"],"id":68}],[{"start":{"row":26,"column":35},"end":{"row":26,"column":36},"action":"insert","lines":["\""],"id":69}],[{"start":{"row":34,"column":100},"end":{"row":34,"column":101},"action":"insert","lines":["'"],"id":71}],[{"start":{"row":34,"column":111},"end":{"row":34,"column":112},"action":"insert","lines":["'"],"id":72}],[{"start":{"row":34,"column":97},"end":{"row":34,"column":104},"action":"insert","lines":[" $_POST"],"id":73}],[{"start":{"row":34,"column":104},"end":{"row":34,"column":105},"action":"remove","lines":[" "],"id":74}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":69},"action":"insert","lines":["<label>名前: <input type=\"text\" name=\"target_name\"></label>"],"id":75}],[{"start":{"row":25,"column":69},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":76},{"start":{"row":26,"column":0},"end":{"row":26,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["前"],"id":77},{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"remove","lines":["名"]}],[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"insert","lines":["z"],"id":78},{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["i"]},{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":["k"]},{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"insert","lines":["o"]},{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"insert","lines":["u"]}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"remove","lines":["u"],"id":79},{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"remove","lines":["o"]},{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":["k"]},{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["i"]},{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"remove","lines":["z"]}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":[">"],"id":88}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":27},"action":"insert","lines":["></label>"],"id":89}],[{"start":{"row":25,"column":19},"end":{"row":25,"column":21},"action":"insert","lines":["時刻"],"id":96}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":[";"],"id":98}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":[";"],"id":99}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":[":"],"id":100}],[{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"insert","lines":[" "],"id":101}],[{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"remove","lines":[">"],"id":102},{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"remove","lines":["l"]},{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"remove","lines":["e"]},{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"remove","lines":["b"]},{"start":{"row":25,"column":26},"end":{"row":25,"column":27},"action":"remove","lines":["a"]},{"start":{"row":25,"column":25},"end":{"row":25,"column":26},"action":"remove","lines":["l"]},{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"remove","lines":["/"]},{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"remove","lines":["<"]},{"start":{"row":25,"column":22},"end":{"row":25,"column":23},"action":"remove","lines":[" "]},{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":[":"]}],[{"start":{"row":25,"column":58},"end":{"row":25,"column":59},"action":"remove","lines":["e"],"id":103},{"start":{"row":25,"column":57},"end":{"row":25,"column":58},"action":"remove","lines":["m"]},{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"remove","lines":["a"]},{"start":{"row":25,"column":55},"end":{"row":25,"column":56},"action":"remove","lines":["n"]},{"start":{"row":25,"column":54},"end":{"row":25,"column":55},"action":"remove","lines":["_"]},{"start":{"row":25,"column":53},"end":{"row":25,"column":54},"action":"remove","lines":["t"]},{"start":{"row":25,"column":52},"end":{"row":25,"column":53},"action":"remove","lines":["e"]},{"start":{"row":25,"column":51},"end":{"row":25,"column":52},"action":"remove","lines":["g"]},{"start":{"row":25,"column":50},"end":{"row":25,"column":51},"action":"remove","lines":["r"]},{"start":{"row":25,"column":49},"end":{"row":25,"column":50},"action":"remove","lines":["a"]},{"start":{"row":25,"column":48},"end":{"row":25,"column":49},"action":"remove","lines":["t"]}],[{"start":{"row":25,"column":48},"end":{"row":25,"column":57},"action":"insert","lines":["$now_hour"],"id":104}],[{"start":{"row":25,"column":48},"end":{"row":25,"column":49},"action":"remove","lines":["$"],"id":105}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":66},"action":"remove","lines":["<label>時刻: <input type=\"text\" name=\"now_hour\"></label>"],"id":106},{"start":{"row":25,"column":8},"end":{"row":25,"column":12},"action":"remove","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":25,"column":8},"action":"remove","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "]},{"start":{"row":24,"column":47},"end":{"row":25,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":34,"column":104},"end":{"row":34,"column":105},"action":"remove","lines":["("],"id":107}],[{"start":{"row":34,"column":86},"end":{"row":34,"column":87},"action":"insert","lines":["("],"id":108}],[{"start":{"row":34,"column":119},"end":{"row":34,"column":120},"action":"remove","lines":[")"],"id":109}],[{"start":{"row":34,"column":123},"end":{"row":34,"column":124},"action":"insert","lines":[")"],"id":110}],[{"start":{"row":34,"column":123},"end":{"row":34,"column":124},"action":"insert","lines":["際"],"id":114}],[{"start":{"row":34,"column":123},"end":{"row":34,"column":124},"action":"remove","lines":["際"],"id":115}],[{"start":{"row":34,"column":123},"end":{"row":34,"column":124},"action":"insert","lines":["歳"],"id":122}]]},"ace":{"folds":[],"scrolltop":212.5,"scrollleft":0,"selection":{"start":{"row":34,"column":123},"end":{"row":34,"column":123},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1526453375943,"hash":"15f23c5a1b11528b233d28f96adf622795a1d90d"}