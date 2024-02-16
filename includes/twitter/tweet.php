
{
    "message": "",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php",
    "line": 43,
    "trace": [
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Routing/RouteCollection.php",
            "line": 162,
            "function": "handleMatchedRoute",
            "class": "Illuminate\\Routing\\AbstractRouteCollection",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Routing/Router.php",
            "line": 647,
            "function": "match",
            "class": "Illuminate\\Routing\\RouteCollection",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Routing/Router.php",
            "line": 636,
            "function": "findRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Routing/Router.php",
            "line": 625,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/fruitcake/laravel-cors/src/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php",
            "line": 39,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Http\\Middleware\\TrustProxies",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "/home/u714695191/domains/bist.ac.bd/public_html/index.php",
            "line": 54,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        }
    ]
}