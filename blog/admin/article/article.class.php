<?php
	$root = realpath($_SERVER["DOCUMENT_ROOT"]);
	require_once("$root/blog/common/database.php");

	class Article extends Database{
		private $fields = array(
			"id"=>0,
			"user"=>0,
			"category"=>0,
			"title"=>"",
			"content"=>"",
			"keyword"=>"",
			"status"=>0,
			"addtime"=>NULL
		);
		
		public function __construct($data){
			//

			$this->fields = array_merge($this->fields, $data);
			
			// when update ?
			if(!isset($this->fields["addtime"])){
				$this->fields["addtime"] = date("Y-m-d H:i:s" ,strtotime(time()));
			}

		}
		
		public function del(){
			
		}
		
		public function get(){
			$con = $this->connect();
			if(!$con){ 
				return 0;
			}
			$sql = "select * from article where id = ".$this->fields["id"].";";
		
			$result = mysql_query($sql);
			if(!$result){ 
				return 0;
			}

			$row = mysql_fetch_object($result);
			$this->close();

			if(!$row){ 
				return 0;
			}
			$this->fields = $row;
			return $this->fields;

		}

		public function save(){
			$con = $this->connect();
			if(!$con){ 
				return 0;
			}
		
			if( $this->fields["id"] == 0){
				$sql= "insert into article values ('".join(array_values($this->fields),"','")."');"; 
				$result = mysql_query($sql) ? mysql_insert_id(): 0;
				
				$this->filed["id"] = $result;
			}else{

				$sql = "update article set ";
				$i = 0;
				$len = count($this->fields) - 2;
				while(list($key, $value) = each($this->fields)){
					if($key !== "id"){
						$sql.= $key."='".$value."'";
						if($i++ < $len){
							$sql.= ",";
						}
					}
					
				}

				$sql.= " where id=".$this->fields["id"];

				$result = mysql_query($sql) ? 1 : 0;
				
			}

			

			$this->close();
			return $result;
		}
		
	}
?>
