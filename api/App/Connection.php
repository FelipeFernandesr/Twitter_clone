<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				'pgsql://neondb_owner:npg_UfjJLi5Gl0tQ@ep-proud-sound-acr9ftow-pooler.sa-east-1.aws.neon.tech/twitter_clone?sslmode=require&channel_binding=require' 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>
