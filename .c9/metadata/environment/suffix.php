{"changed":true,"filter":false,"title":"suffix.php","tooltip":"/suffix.php","value":"<?php\n\nclass swallows {\n    public $dajun = '';\n    public $batter = '';\n\n    public $hp = 10;\n    public $power = 3;\n\n    function __construct($dajun,$batter,$power) {\n        $this->batter = $batter;\n        $this->dajun = $dajun;\n        $this->power = $power;\n    }\n\n    function name() {\n        return $this->dajun . $this->batter;\n    }\n\n    function hit($character_name) {\n        print $this->name() . 'が' . $character_name . 'を打って' . $this->power . 'ランホームランになった！' . PHP_EOL;\n    }\n}\n\n$swallows_A = new swallows('1番','山田','3');\n$swallows_B = new swallows('2番','青木','2');\n$swallows_A->hit('菅野');\n$swallows_B->hit('菅野');\n","undoManager":{"mark":98,"position":100,"stack":[[{"start":{"row":30,"column":0},"end":{"row":30,"column":1},"action":"remove","lines":["}"],"id":62},{"start":{"row":29,"column":5},"end":{"row":30,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"insert","lines":["$"],"id":63}],[{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["t"],"id":64},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["y"]},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"insert","lines":["p"]},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["m"],"id":65}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"remove","lines":["m"],"id":66}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":[","],"id":67}],[{"start":{"row":10,"column":32},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":68},{"start":{"row":11,"column":0},"end":{"row":11,"column":8},"action":"insert","lines":["        "]},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["$"]}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["t"],"id":69}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"remove","lines":["t"],"id":70}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["h"],"id":71},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["s"]},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["i"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"remove","lines":["s"],"id":72},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"remove","lines":["i"]},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"remove","lines":["s"]},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"remove","lines":["h"]}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["t"],"id":73},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["h"]},{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["i"]},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["-"],"id":74},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":[">"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["t"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["y"]}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["p"],"id":75},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":[" "],"id":76},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["="]}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":[" "],"id":77},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["$"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["y"],"id":78},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["p"]},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["e"]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":[";"]}],[{"start":{"row":23,"column":21},"end":{"row":23,"column":23},"action":"insert","lines":["''"],"id":79}],[{"start":{"row":23,"column":22},"end":{"row":23,"column":24},"action":"insert","lines":["松沼"],"id":88}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":[","],"id":90}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"remove","lines":["A"],"id":91}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["兄"],"id":95}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"remove","lines":[","],"id":96}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":[","],"id":98}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":31},"action":"insert","lines":["$slime_A = new Slime('松沼','兄');"],"id":99}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"remove","lines":[";"],"id":100}],[{"start":{"row":25,"column":23},"end":{"row":25,"column":24},"action":"insert","lines":[";"],"id":101}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"remove","lines":["兄"],"id":102}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["o"],"id":103},{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"insert","lines":["t"]},{"start":{"row":24,"column":29},"end":{"row":24,"column":30},"action":"insert","lines":["o"]},{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"insert","lines":["u"]},{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"insert","lines":["t"]},{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["o"]}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"insert","lines":[" "],"id":104}],[{"start":{"row":24,"column":33},"end":{"row":24,"column":34},"action":"remove","lines":[" "],"id":105},{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"remove","lines":["o"]},{"start":{"row":24,"column":31},"end":{"row":24,"column":32},"action":"remove","lines":["t"]},{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"remove","lines":["u"]},{"start":{"row":24,"column":29},"end":{"row":24,"column":30},"action":"remove","lines":["o"]},{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"remove","lines":["t"]},{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"remove","lines":["o"]}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["弟"],"id":112}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"remove","lines":["沼"],"id":113},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"remove","lines":["松"]}],[{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"remove","lines":["A"],"id":114}],[{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":["B"],"id":116}],[{"start":{"row":25,"column":24},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":117}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":24},"action":"insert","lines":["$slime_A->attack('主人公');"],"id":118}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"remove","lines":["A"],"id":119}],[{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["B"],"id":120}],[{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"remove","lines":["e"],"id":121},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"remove","lines":["p"]},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"remove","lines":["y"]},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"remove","lines":["t"]}],[{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["d"],"id":122},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["a"]},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"insert","lines":["j"]},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"insert","lines":["u"]},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["n"]}],[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":["x"],"id":123},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["i"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["f"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["f"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["u"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"remove","lines":["s"]}],[{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["b"],"id":124},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["a"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"insert","lines":["t"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["t"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["e"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":["e"],"id":125},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"remove","lines":["p"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"remove","lines":["y"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"remove","lines":["t"]}],[{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["d"],"id":126},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["a"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["j"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["u"]},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["n"]}],[{"start":{"row":3,"column":12},"end":{"row":3,"column":16},"action":"remove","lines":["type"],"id":127},{"start":{"row":3,"column":12},"end":{"row":3,"column":17},"action":"insert","lines":["dajun"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":28},"action":"remove","lines":["type"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":29},"action":"insert","lines":["dajun"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":26},"action":"remove","lines":["type"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":27},"action":"insert","lines":["dajun"]},{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"remove","lines":["type"]},{"start":{"row":29,"column":12},"end":{"row":29,"column":17},"action":"insert","lines":["dajun"]}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":18},"action":"remove","lines":["suffix"],"id":128},{"start":{"row":4,"column":12},"end":{"row":4,"column":18},"action":"insert","lines":["batter"]},{"start":{"row":10,"column":15},"end":{"row":10,"column":21},"action":"remove","lines":["suffix"]},{"start":{"row":10,"column":15},"end":{"row":10,"column":21},"action":"insert","lines":["batter"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":31},"action":"remove","lines":["suffix"]},{"start":{"row":10,"column":25},"end":{"row":10,"column":31},"action":"insert","lines":["batter"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":43},"action":"remove","lines":["suffix"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":43},"action":"insert","lines":["batter"]},{"start":{"row":30,"column":12},"end":{"row":30,"column":18},"action":"remove","lines":["suffix"]},{"start":{"row":30,"column":12},"end":{"row":30,"column":18},"action":"insert","lines":["batter"]}],[{"start":{"row":28,"column":0},"end":{"row":31,"column":5},"action":"remove","lines":["class Koders{","    public $dajun = 'ningen';","    public $batter = '';","    }"],"id":129},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":26,"column":24},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":130}],[{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["1"],"id":131}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["b"],"id":132},{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"insert","lines":["a"]},{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":["n"]},{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"remove","lines":["n"],"id":133},{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"remove","lines":["n"]},{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"remove","lines":["a"]},{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"remove","lines":["b"]}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["番"],"id":145}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"remove","lines":["兄"],"id":146}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":29},"action":"insert","lines":["山田"],"id":152}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"remove","lines":["松"],"id":153},{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"remove","lines":["'"]}],[{"start":{"row":24,"column":21},"end":{"row":24,"column":22},"action":"insert","lines":["'"],"id":154}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":24},"action":"insert","lines":["2番"],"id":160}],[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"remove","lines":["沼"],"id":161}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"remove","lines":["弟"],"id":162}],[{"start":{"row":24,"column":27},"end":{"row":24,"column":29},"action":"insert","lines":["青木"],"id":167}],[{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"remove","lines":["k"],"id":168},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"remove","lines":["c"]},{"start":{"row":18,"column":16},"end":{"row":18,"column":17},"action":"remove","lines":["a"]},{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"remove","lines":["t"]},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"remove","lines":["t"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"remove","lines":["a"]}],[{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"insert","lines":["h"],"id":173},{"start":{"row":18,"column":14},"end":{"row":18,"column":15},"action":"insert","lines":["i"]},{"start":{"row":18,"column":15},"end":{"row":18,"column":16},"action":"insert","lines":["t"]}],[{"start":{"row":19,"column":57},"end":{"row":19,"column":58},"action":"remove","lines":["撃"],"id":174},{"start":{"row":19,"column":56},"end":{"row":19,"column":57},"action":"remove","lines":["攻"]}],[{"start":{"row":19,"column":56},"end":{"row":19,"column":59},"action":"insert","lines":["打って"],"id":179}],[{"start":{"row":19,"column":59},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":181},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":8},"action":"remove","lines":["    "],"id":182},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "]},{"start":{"row":19,"column":59},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":19,"column":59},"end":{"row":19,"column":60},"action":"remove","lines":["し"],"id":183},{"start":{"row":19,"column":58},"end":{"row":19,"column":59},"action":"remove","lines":["て"]}],[{"start":{"row":19,"column":91},"end":{"row":19,"column":92},"action":"remove","lines":["た"],"id":184},{"start":{"row":19,"column":90},"end":{"row":19,"column":91},"action":"remove","lines":["え"]},{"start":{"row":19,"column":89},"end":{"row":19,"column":90},"action":"remove","lines":["与"]},{"start":{"row":19,"column":88},"end":{"row":19,"column":89},"action":"remove","lines":["を"]},{"start":{"row":19,"column":87},"end":{"row":19,"column":88},"action":"remove","lines":["ジ"]},{"start":{"row":19,"column":86},"end":{"row":19,"column":87},"action":"remove","lines":["ー"]},{"start":{"row":19,"column":85},"end":{"row":19,"column":86},"action":"remove","lines":["メ"]},{"start":{"row":19,"column":84},"end":{"row":19,"column":85},"action":"remove","lines":["ダ"]},{"start":{"row":19,"column":83},"end":{"row":19,"column":84},"action":"remove","lines":["の"]},{"start":{"row":19,"column":82},"end":{"row":19,"column":83},"action":"remove","lines":["ト"]},{"start":{"row":19,"column":81},"end":{"row":19,"column":82},"action":"remove","lines":["ン"]}],[{"start":{"row":19,"column":80},"end":{"row":19,"column":81},"action":"remove","lines":["イ"],"id":185},{"start":{"row":19,"column":79},"end":{"row":19,"column":80},"action":"remove","lines":["ポ"]}],[{"start":{"row":19,"column":79},"end":{"row":19,"column":81},"action":"insert","lines":["ラン"],"id":190}],[{"start":{"row":19,"column":81},"end":{"row":19,"column":90},"action":"insert","lines":["ホームランになった"],"id":207}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":["公"],"id":209},{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"remove","lines":["人"]},{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["主"]}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":20},"action":"insert","lines":["菅野"],"id":216}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"remove","lines":["公"],"id":217},{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"remove","lines":["人"]},{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"remove","lines":["主"]}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":20},"action":"insert","lines":["菅野"],"id":224}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"remove","lines":["k"],"id":225},{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"remove","lines":["c"]},{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"remove","lines":["a"]},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"remove","lines":["t"]},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"remove","lines":["t"]},{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"remove","lines":["a"]}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["h"],"id":230},{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["i"]},{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":26,"column":15},"end":{"row":26,"column":16},"action":"remove","lines":["k"],"id":231},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"remove","lines":["c"]},{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"remove","lines":["a"]},{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"remove","lines":["t"]},{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"remove","lines":["t"]},{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"remove","lines":["a"]}],[{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"insert","lines":["h"],"id":232},{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"insert","lines":["i"]},{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":[","],"id":233},{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["$"]}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["p"],"id":234},{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["o"]},{"start":{"row":9,"column":43},"end":{"row":9,"column":44},"action":"insert","lines":["w"]},{"start":{"row":9,"column":44},"end":{"row":9,"column":45},"action":"insert","lines":["e"]},{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":30},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":235},{"start":{"row":12,"column":0},"end":{"row":12,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"insert","lines":["$"],"id":236},{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["t"]},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["h"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["i"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["s"]}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["-"],"id":237},{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":[">"]}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["p"],"id":245},{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["o"]},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["w"]},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["e"]},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["r"]}],[{"start":{"row":12,"column":20},"end":{"row":12,"column":21},"action":"insert","lines":[" "],"id":246},{"start":{"row":12,"column":21},"end":{"row":12,"column":22},"action":"insert","lines":["="]}],[{"start":{"row":12,"column":22},"end":{"row":12,"column":23},"action":"insert","lines":[" "],"id":247},{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["p"]}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"remove","lines":["p"],"id":248}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["$"],"id":249},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["p"]},{"start":{"row":12,"column":25},"end":{"row":12,"column":26},"action":"insert","lines":["o"]},{"start":{"row":12,"column":26},"end":{"row":12,"column":27},"action":"insert","lines":["w"]},{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"insert","lines":["e"]},{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["r"]}],[{"start":{"row":12,"column":29},"end":{"row":12,"column":30},"action":"insert","lines":[";"],"id":250}],[{"start":{"row":24,"column":30},"end":{"row":24,"column":31},"action":"insert","lines":[","],"id":251}],[{"start":{"row":24,"column":31},"end":{"row":24,"column":33},"action":"insert","lines":["''"],"id":252}],[{"start":{"row":24,"column":32},"end":{"row":24,"column":33},"action":"insert","lines":["3"],"id":253}],[{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"insert","lines":[","],"id":254}],[{"start":{"row":25,"column":31},"end":{"row":25,"column":33},"action":"insert","lines":["''"],"id":255}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["2"],"id":256}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":11},"action":"remove","lines":["Slime"],"id":258},{"start":{"row":2,"column":6},"end":{"row":2,"column":14},"action":"insert","lines":["swallows"]},{"start":{"row":24,"column":1},"end":{"row":24,"column":6},"action":"remove","lines":["slime"]},{"start":{"row":24,"column":1},"end":{"row":24,"column":9},"action":"insert","lines":["swallows"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":23},"action":"remove","lines":["Slime"]},{"start":{"row":24,"column":18},"end":{"row":24,"column":26},"action":"insert","lines":["swallows"]},{"start":{"row":25,"column":1},"end":{"row":25,"column":6},"action":"remove","lines":["slime"]},{"start":{"row":25,"column":1},"end":{"row":25,"column":9},"action":"insert","lines":["swallows"]},{"start":{"row":25,"column":18},"end":{"row":25,"column":23},"action":"remove","lines":["Slime"]},{"start":{"row":25,"column":18},"end":{"row":25,"column":26},"action":"insert","lines":["swallows"]},{"start":{"row":26,"column":1},"end":{"row":26,"column":6},"action":"remove","lines":["slime"]},{"start":{"row":26,"column":1},"end":{"row":26,"column":9},"action":"insert","lines":["swallows"]},{"start":{"row":27,"column":1},"end":{"row":27,"column":6},"action":"remove","lines":["slime"]},{"start":{"row":27,"column":1},"end":{"row":27,"column":9},"action":"insert","lines":["swallows"]}],[{"start":{"row":3,"column":24},"end":{"row":3,"column":25},"action":"remove","lines":["ム"],"id":259},{"start":{"row":3,"column":23},"end":{"row":3,"column":24},"action":"remove","lines":["イ"]},{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"remove","lines":["ラ"]},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"remove","lines":["ス"]}],[{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"insert","lines":["a"],"id":260}],[{"start":{"row":27,"column":23},"end":{"row":27,"column":24},"action":"remove","lines":["a"],"id":261}]]},"ace":{"folds":[],"scrolltop":119.5,"scrollleft":0,"selection":{"start":{"row":27,"column":23},"end":{"row":27,"column":23},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1528686458318}