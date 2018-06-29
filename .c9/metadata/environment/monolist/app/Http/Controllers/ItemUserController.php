{"filter":false,"title":"ItemUserController.php","tooltip":"/monolist/app/Http/Controllers/ItemUserController.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":48,"column":1},"action":"insert","lines":["<?php","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\Http\\Controllers\\Controller;","","use App\\Item;","","class ItemUserController extends Controller","{","    public function want()","    {","        $itemCode = request()->itemCode;","","        // Search items from \"itemCode\"","        $client = new \\RakutenRws_Client();","        $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));","        $rws_response = $client->execute('IchibaItemSearch', [","            'itemCode' => $itemCode,","        ]);","        $rws_item = $rws_response->getData()['Items'][0]['Item'];","","        // create Item, or get Item if an item is found","        $item = Item::firstOrCreate([","            'code' => $rws_item['itemCode'],","            'name' => $rws_item['itemName'],","            'url' => $rws_item['itemUrl'],","            // remove \"?_ex=128x128\" because its size is defined","            'image_url' => str_replace('?_ex=128x128', '', $rws_item['mediumImageUrls'][0]['imageUrl']),","        ]);","","        \\Auth::user()->want($item->id);","","        return redirect()->back();","    }","","    public function dont_want()","    {","        $itemCode = request()->itemCode;","","        if (\\Auth::user()->is_wanting($itemCode)) {","            $itemId = Item::where('code', $itemCode)->first()->id;","            \\Auth::user()->dont_want($itemId);","        }","        return redirect()->back();","    }","}"],"id":1}],[{"start":{"row":47,"column":5},"end":{"row":48,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":4},"end":{"row":49,"column":0},"action":"insert","lines":["",""]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":49,"column":4},"end":{"row":84,"column":5},"action":"insert","lines":["public function have()","    {","        $itemCode = request()->itemCode;","","        // Search items from \"itemCode\"","        $client = new \\RakutenRws_Client();","        $client->setApplicationId(env('RAKUTEN_APPLICATION_ID'));","        $rws_response = $client->execute('IchibaItemSearch', [","            'itemCode' => $itemCode,","        ]);","        $rws_item = $rws_response->getData()['Items'][0]['Item'];","","        // create Item, or get Item if an item is found","        $item = Item::firstOrCreate([","            'code' => $rws_item['itemCode'],","            'name' => $rws_item['itemName'],","            'url' => $rws_item['itemUrl'],","            // remove \"?_ex=128x128\" because its size is defined","            'image_url' => str_replace('?_ex=128x128', '', $rws_item['mediumImageUrls'][0]['imageUrl']),","        ]);","","        \\Auth::user()->have($item->id);","","        return redirect()->back();","    }","","    public function dont_have()","    {","        $itemCode = request()->itemCode;","","        if (\\Auth::user()->is_haveing($itemCode)) {","            $itemId = Item::where('code', $itemCode)->first()->id;","            \\Auth::user()->dont_have($itemId);","        }","        return redirect()->back();","    }"],"id":3}]]},"ace":{"folds":[],"scrolltop":448.1875,"scrollleft":0,"selection":{"start":{"row":84,"column":5},"end":{"row":84,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":35,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1529996633236,"hash":"6a6583dafa9df351bf8c958538170973e5c00d7f"}