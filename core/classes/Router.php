<?// https://laravel.com/docs/12.x/controllers#main-content
//https://laravel.com/docs/12.x/routing

class Router
{

    protected $routes = []; //1 карта маршрутов
    protected $uri; //строка запроса
    protected $method; //метод запроса

    public function __construct() //2 3 индекс
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routes as $route) {
            if (($route['uri'] === $this->uri) && ($route['method'] === strtoupper($this->method))) {
                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches) {
            abort();
        }
    }

    //4 добавляет маршруты в  routes[]
    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }
    //5 -> config->routes
}