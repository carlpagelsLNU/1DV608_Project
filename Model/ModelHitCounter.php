<?php

class ModelHitCounter {


	public function increaseViewcount() {
			$file = fopen("./data/hitCount.txt", "r"); // Open file in read mode
			$viewers = fgets($file, 1000); // Get view count
			fclose($file); 
			$viewers = $viewers + 1; // Add another viewer
			$file = fopen("./data/hitCount.txt", "w"); // Open file in write mode
			fwrite($file, $viewers); // Write new hitcount to file
			fclose($file); 
	}

	public function getViewers() {
		if(file_exists("./data/hitCount.txt")) {
			return file_get_contents("./data/hitCount.txt");
		}
	}
}