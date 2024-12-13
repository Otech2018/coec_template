<?php session_start(); 



class connect{
	public  $host = 'localhost';
	public  $username = 'coeczied_ot';
    public  $password = 'coeczied_ot';
	public  $db = 'coeczied_ot';	

	//    public  $username = 'x9subfuiuwia';
    //    public  $password = 'Odg]122]SC]';
	//    public  $db = 'Blazers_db';  	
	//good
		
	}
	
		class run_query extends connect{
		
		public function __construct( $query_mlc){
			$this->connect_db = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);
			$this->query_run = $this->connect_db ->query($query_mlc);
			$this->num_rows = $this->query_run->rowCount();
			}

			public	 function result(){
			$this->result =  $this->query_run ->fetch(PDO::FETCH_BOTH);
			
			return $this->result;
			}
	}



	
function AdminLoggedin(){
	if(isset($_SESSION['Admin_id']) && !empty($_SESSION['Admin_id'])){
		  return true;
	  }else{
	   return false;
	  }
  }
  
  
  
   $settings = new run_query( "select * from  settings where 1 " );
  $settings_data =	$settings->result();
	  extract($settings_data);

	  

	function limit_text($text, $limit) {
		if (str_word_count($text, 0) > $limit) {
			$words = str_word_count($text, 2);
			$pos   = array_keys($words);
			$text  = substr($text, 0, $pos[$limit]) . '...';
		}
		return $text;
	}

/***  
if( isset($_POST['newsletter'])  ){
	$email = addslashes(htmlentities($_POST['email']));

	//crun query
	$query_run  =new run_query("SELECT * from newsletter where email ='$email'");


	//num rows
		if( $query_run->num_rows >= 1)


		//single result
		$admin = new run_query( "select * from admin where admin_id = '$Admin_data_id' " );
$Admin_data =	$admin->result();


//array result
 if( $newsletter->num_rows >= 1){
                while( $newsletter_data =	$newsletter->result() ){
                extract($newsletter_data);

		***/

?>