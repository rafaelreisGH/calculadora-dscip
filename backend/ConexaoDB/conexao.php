<?php
/**
 * Classe responsável pela conexão com o banco de dados via PDO.
 * As credenciais são carregadas dinamicamente do arquivo de ambiente (.env)
 * para garantir a segurança e evitar a exposição de dados sensíveis.
 */
class Conexao {
    private static $conn;

    /**
     * Retorna a instância única de conexão PDO (Singleton).
     *
     * @return PDO Conexão ativa com o banco de dados MySQL
     */
    public static function getConexao() {
        if (!self::$conn) {
            // Carrega variáveis de ambiente a partir do arquivo .env na raiz
            $envPath = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . '.env';
            $env = [];

            if (file_exists($envPath)) {
                $env = parse_ini_file($envPath);
            }

            $servername = getenv('DB_HOST') ?: ($env['DB_HOST'] ?? 'localhost');
            $myDB       = getenv('DB_NAME') ?: ($env['DB_NAME'] ?? 'calculadora');
            $username   = getenv('DB_USER') ?: ($env['DB_USER'] ?? 'root');
            $password   = getenv('DB_PASS') ?: ($env['DB_PASS'] ?? '');

            try {
                self::$conn = new PDO("mysql:host=$servername;dbname=$myDB;charset=utf8mb4", $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                error_log("Connection failed: " . $e->getMessage());
                die("Erro ao conectar ao banco de dados.");
            }
        }

        return self::$conn;
    }
}
