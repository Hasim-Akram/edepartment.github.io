<?php




error_reporting(E_ALL & ~E_NOTICE);

    session_start();
	


	class edep{



			private $host="localhost";
			private $user="root";
			private $pass="";
			private $db="edepartment";


			public $connection;


			//database connetion method
			public function __construct(){

				$connect = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);


				$this -> connection = $connect ;

				
					}

					














			//daata insert method
				public function empdata($name,$designation,$office,$department,$email,$contact,$uimage,$date, $ip,$address,$imaget){

					$sql="INSERT INTO empdata(name,designation,office,department,email,contact,image,date,ip,address) values('$name','$designation','$office','$department','$email','$contact','$uimage','$date','$ip','$address')";


				    move_uploaded_file($imaget,'image/'.$uimage);




					$data = $this -> connection -> query($sql);

							 if($data){
                                        return "data insert successful";
                                }else{
                                         return "data insert failed";
                                   }


					

				}

			



				public function userinfo($name, $email,$username,$password){


					$sql="INSERT INTO user(name,email,username,password) values('$name','$email','$username','$password')";


					$data = $this -> connection -> query($sql);

					if ($data) {
						return 'your user id created';
					}else{
						return 'please fill up form';
					}



				}



				//login user 


					public function login($uname,$upass){


						$sql ="SELECT * FROM user WHERE username='$uname' and password='$upass' ";

						$userloginfo = $this -> connection -> query($sql);

						if ($userloginfo -> num_rows >=1 ){

							while($userloginfod = $userloginfo -> fetch_assoc()){

								$_SESSION['username']=$userloginfod['username'];

							}



							header("location:edep.php");
						}else{
							return $userloginfo;
						}






					}


				//data view function

				public function viewmethod($depname){


					$sql ="SELECT * FROM empdata WHERE department ='$depname' ";


					$data = $this -> connection -> query($sql);

					if ($data){
						return $data;
					}else{
						return false;
					}




				}

				//data delete from emp data

				public function deletedata($ddata){


					$sql ="DELETE FROM empdata where id='$ddata'";

					$ddatameg= $this -> connection -> query($sql);

					if ($ddatameg) {
						echo 'delete successful';
					}else{
						echo 'data id not found';
					}



				}

				//update information


				public function updateinfo($updata){


					$sql ="SELECT * FROM empdata where id='$updata'";

					$uppp= $this -> connection -> query($sql);

					if ($uppp) {
						return $uppp;
					}else{
						return false;
					}


				}
				public function updatedata($name,$designation,$office,$department,$email,$contact,$date,$ip,$address,$id){



					$sql ="UPDATE empdata SET name='$name', designation='$designation', office='$office', department='$department', email='$email', contact='$contact', date='$date', ip='$ip', address='$address' WHERE id='$id'";

						 $this -> connection -> query($sql);
						



				}
				///add network for office


				public function addnetwork($name,$ip,$subnet,$office){


						$sql ="insert into network(name,ip,subnet,office) values('$name','$ip','$subnet','$office')";


						$this -> connection -> query($sql);




				}


				//add pbs information


				public function addpbs($pbsname,$pbsid,$pbslocation){


					$sql ="insert into pbsinfo(pbsname,pbsid,pbslocation) values('$pbsname','$pbsid','$pbslocation')";


					$this -> connection ->query($sql);
				}


				// for view pbs

				public function pbsview(){


					$sql="SELECT * FROM pbsinfo";

					$pbsinfo =$this -> connection -> query($sql);

					if ($pbsinfo) {
						return $pbsinfo;
					}else{
						return false;
					}
				}


				//add offices

				public function addoffice($pbsname,$officename,$officecode,$officetype,$officaddress){


					$sql ="insert into officeinfo(pbsname,officename,officecode,officetype,officeaddress) values('$pbsname','$officename','$officecode','$officetype','$officaddress') ";

					$this -> connection -> query($sql);


				}


				///for view office at department


				public function officeview(){


					$sql ="SELECT * FROM officeinfo";

					$offdd=$this -> connection -> query($sql);

					if ($offdd) {
						return $offdd;
					}else{
						return false;
					}
				}

			



				public function officeviewall($offid){


					$sql ="SELECT * FROM officeinfo where id='$offid'";

					$offdd=$this -> connection -> query($sql);

					if ($offdd) {
						return $offdd;
					}else{
						return false;
					}
				}



				// update office


				public function updateoffice($pbsname,$officename,$officecode,$officetype,$officaddress,$offid){

					$sql ="UPDATE officeinfo SET pbsname='$pbsname', officename='$officename',officecode='$officecode',officetype='$officetype',officeaddress='$officaddress' WHERE id='$offid' ";

					$this -> connection -> query($sql);

				}


				/// office delete 

				public function officedelete($offdata){

					$sql ="DELETE FROM officeinfo where id='$offdata'";
					$this -> connection -> query($sql);
				}




				///for network view 
				public function networkview(){


					$sql ="SELECT office,ip FROM network ";

					$networkdd=$this -> connection -> query($sql);

					if ($networkdd) {
						return $networkdd;
					}else{
						return false;
					}

				}


				///add department 
				 public function adddepartment($pbsname,$officename,$depname,$depcode,$iprange){



					$sql ="insert into department(pbsname,officename,depname,depcode,iprange) values('$pbsname','$officename','$depname','$depcode','$iprange')";

					$this -> connection -> query($sql);

				}

				//department view

				public function deparmentview(){


					$sql ="SELECT * FROM department";

					$depdataa=$this -> connection -> query($sql);
					if ($depdataa) {
						return $depdataa;
					}else{
						return false;
					}


				}


				//count department

				
				
				public function  countoff(){


					$sql="SELECT count(id) as ttoff FROM officeinfo";

				  
					$count = $this -> connection -> query($sql);
					 
				  if ($count) {
					return $count;
				}else{
					return false;
				}
				

			}

				//count department

				
				
						public function countdep(){


                        $sql="SELECT count(id) as tt FROM department";

                      
                        $count = $this -> connection -> query($sql);
                         
                      if ($count) {
						return $count;
					}else{
						return false;
					}
					

				}





				


				// for device view 


				public function deviceview(){

					$sql ="SELECT * FROM network";

					$netdev =$this -> connection -> query($sql);

					if ($netdev) {
						return $netdev;
					}else{
						return false;
					}


				}

				// for department edit


				public function depedit($depid){

					$sql ="SELECT * FROM department where id='$depid'";

					$depdaata= $this -> connection ->query($sql);

					if ($depdaata) {
						return $depdaata;
					}else{
						return false;
					}

				}


				//department update 

				public function depupdate($pbsname,$officename,$depname,$depcode,$iprange,$depid){

						$sql= "UPDATE department SET pbsname='$pbsname', officename='$officename', depname='$depname', depcode='$depcode', iprange='$iprange' WHERE id='$depid'";

						 $this -> connection -> query($sql);


				}



				/// department delete 

				public function deletedep($depdeldata){


					$sql ="DELETE FROM department where id='$depdeldata' ";

					$this -> connection -> query($sql);

				}



				/// show dep in emp.php


				public function showdep(){

					$sql = "SELECT * FROM department";

					$showdepdata=$this -> connection -> query($sql);
					if ($showdepdata) {
						return $showdepdata;
					}else{
						return false;
					}


				}










}



?>