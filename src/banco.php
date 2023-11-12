<?php
    namespace Salvapets;
    use PDO, Exception;
    
    abstract class Banco {
        private static string $servidor = "db4free.net";
        private static string $usuario = "salvapets1";
        private static string $senha = "admin123";
        private static string $banco = "salvapets";
        private static PDO $conexao; 
    
        public static function conecta():PDO {
            try {
                self::$conexao = new PDO(
                    "mysql:host=".self::$servidor."; 
                    dbname=".self::$banco.";
                    charset=utf8",
                    self::$usuario, 
                    self::$senha
                );
                self::$conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $erro) {
                die("Erro de conexão: ".$erro->getMessage());
            }
            return self::$conexao;
        }
    }
?>