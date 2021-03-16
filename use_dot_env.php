include_once("Dotenv.php");
(new Dotenv("../.env"))->load();
$host = getenv('HOST');
