<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DomainsAjax extends CI_Controller {
   
    function __construct()
	{
		parent::__construct();
		ini_set('memory_limit', '-1');
		$this->load->helper(array('form', 'url'));
	    $this->load->library('session');
	    $this->load->library('datatables');
	    $this->load->library('email');
	    $this->load->library('estibotapi');
	    $this->load->library('idevaffiliate');
	    $this->load->model('members');
	    $this->load->model('domaindata');
	    $this->load->model('buildertype');
	    $this->load->model('frameworkdata');
	    $this->load->model('categorydata');
	    $this->load->model('serverdata');
	    $this->load->model('contribdata');
		$this->load->model('taskdata');
		$this->load->model('keyworddata');
	    $this->load->model('keyworddomain');
	    $this->load->model('referralappdata');
	    $this->load->model('cartpackagedata');
	    $this->load->model('cartpackageitemsdata');
	    $this->load->model('cartitemsdata');
	    $this->load->model('domaintheovalue');
	    $this->load->model('teamdata');
	    $this->load->model('companydomain');
	    $this->load->model('teamstatusdata');
	    $this->load->model('teammemberdata');
	    $this->load->model('companythings');
		$this->load->model('contribdata');
		$this->load->model('jobdata');
		$this->load->model('thingstodo_checklist');
		$this->load->model('socialnetworkdata');
		$this->load->model('affiliatedata');
		$this->load->model('domainsocialgeneral');
		$this->load->model('orderdata');
		$this->load->model('domaintodo');
		$this->load->model('orderdomaindata');
		$this->load->model('microtaskdata');
		$this->load->model('theoreticalvalue');
		$this->load->model('domaintheovalue');
		$this->load->model('memberequity');
		$this->load->model('crowdtaskdata');
		$this->load->model('domainalternativeusername');
		$this->load->model('cartorderlistdata');
		$this->load->model('builddomain');
		$this->load->model('adddomaindata');
		
		
		$this->load->database();
	}
	
	public function showipartners()
	{
		if ($this->session->userdata('logged_in')){
			$domains = $this->db->escape_str($this->input->post('domains'));
			$cats = array();
			$categories = array(); 
			$catnames = array();
  	        $i=0;
	  	    foreach ($domains as $domain){
	  	  	    $category_id = $this->categorydata->autocategory($domain);
	  	  		$cats[$category_id]['domains'][] = $domain;
	  	  		$cats[$category_id]['name'] = $this->categorydata->GetCategoryInfoById('category_name',$category_id);
	  	   }
	  	    
	  	    foreach ($cats as $key=>$val){
	  	    	$categories[] = $key;
	  	    	$catnames[] = $val['name'];
	  	    }
	  	    
	  	    $data['cats'] = $cats;
	  	    $data['categories'] = $categories;
	  	    $data['catnames'] = $catnames;
	  	    $data['pdomains'] = $this->referralappdata->getdomainswithprogram();
	  	    $html = $this->load->view('domains/ajax-ipartners',$data,true);
			$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'html'=>$html,'cats'=>json_encode($cats))));
		}else {
			header ("Location: ".base_url());
		}	
	}
	
	public function showrelated(){
		$keyword = $this->db->escape_str($this->input->post('keyword'));
		$catid = $this->db->escape_str($this->input->post('catid'));
		$rdomains = $this->domaindata->getrelateddomains($catid,6,$keyword);
		$data['domains']= $rdomains;
		$data['catid']= $catid;
		$html = $this->load->view('domains/ajax-ipartners-related',$data,true);
		$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'html'=>$html,'catid'=>$catid)));
	}
	


	public function loadeservices(){
		$search = $this->db->escape_str($this->input->post('search'));
		$current_page = $this->db->escape_str($this->input->post('current_page'));
		$package_id = $this->db->escape_str($this->input->post('package_id'));
		$limit = 12;
		
		if($current_page) 
		 $start = ($current_page - 1) * $limit; 			//first item to display on this page
	    else
		 $start = 0;
		
		
		$data['items'] = $this->cartitemsdata->getitemsbypage($start,$limit,$search,$package_id);
		
		$html = $this->load->view('domains/ajax-eservices-list',$data,true);
		$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('html'=>$html)));
        
	}
	
	
	public function loadeservicepagination(){
		$search = $this->db->escape_str($this->input->post('search'));
		$page = $this->db->escape_str($this->input->post('current_page'));
	    $total_pages = intval($this->db->escape_str($this->input->post('total_results')));
	    $package_id = intval($this->db->escape_str($this->input->post('package_id')));
		$limit = 12;
	    if ($page == 0) $page = 1;					//if no page var is given, default to 1.
		$prev = $page - 1;							//previous page is page - 1
		$next = $page + 1;							//next page is page + 1
		$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
		$lpm1 = $lastpage - 1;	
			
	    $data['lastpage'] = $lastpage;
	    $data['page'] = $page;
	    $data['adjacents'] = 3;
	    $data['lpm1'] = $lpm1;
	    $data['prev'] = $prev;
	    $data['next'] = $next;
	    $data['search'] = $search;
	    $data['package_id'] = $package_id;
	    
	    $html = $this->load->view('domains/ajax-eservice-pagination',$data,true);
		$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('html'=>$html)));
	}
	
	public function loadeservicetotal(){
			$search = $this->db->escape_str($this->input->post('search'));
			$package_id = $this->db->escape_str($this->input->post('package_id'));
			$count = $this->cartitemsdata->getitemstotal($search,$package_id);
			$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('count'=>$count)));
	}
	
	public function showbuildomain(){
		$cats = $this->input->post('cats');
		$cats = json_decode($cats,true);
		$frameworks = array();
		$server_dns = "";
	    foreach ($cats as $key=>$val){
	    	    $framework_id = $this->categorydata->GetCategoryInfoById('default_framework',$key);
	    	    $query = $this->frameworkdata->getFrameworkByAttribute('framework_id',$framework_id);
	    	    
	  	  	    foreach($val['domains'] as $domain){
	  	  			$frameworks[$framework_id]['domains'][] = array('domain_name'=>$domain,'category_id'=>$key);
	  	  	    }
	  	  		$frameworks[$framework_id]['name'] = $query->row()->framework_name;
	  	  		$frameworks[$framework_id]['server_id'] = $query->row()->default_server;
	  	  		$squery = $this->serverdata->getServerByAttribute('server_id',$query->row()->default_server);
	  	  		if ($squery->num_rows() > 0){
	  	  			$server_dns = $squery->row()->dns1." ".$squery->row()->dns2;
	  	  		}
	  	  		$frameworks[$framework_id]['server_dns'] = $server_dns;
	  	  		$frameworks[$framework_id]['preview'] = $query->row()->preview;
	  	   }
	  	   
	  	    $data['frameworks'] = $frameworks;
	  	    $data['fchoices'] = $this->frameworkdata->getFrameworkByAttribute('builder_id',2);
	  	    if ($this->members->isAdmin()){
	  	    $data['schoices'] = $this->serverdata->getAllServer();
	  	    }else {
	  	    $data['schoices'] = $this->serverdata->getServerByAttribute('is_private',0);
	  	    }
	  	    $html = $this->load->view('domains/ajax-build',$data,true);
			$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'html'=>$html)));   
	}
	
	function showbuildomainchange(){
		$frameworks = $this->input->post('frameworks');
		$domains = $this->input->post('domains');
		$newframework = $this->input->post('newframework');
		$fromframework = $this->input->post('fromframework');
		$frameworks = json_decode($frameworks,true);
		
	    
		foreach ($frameworks as $key=>$val){
		     if ($key == $fromframework){
		     	foreach ($val['domains'] as $key2=>$val2){
		     		if (in_array($val2['domain_name'], $domains)){
		     			$frameworks[$newframework]['domains'][] = array('domain_name'=>$val2['domain_name'],'category_id'=>$val2['category_id']);
		     			unset($frameworks[$fromframework]['domains'][$key2] );
		     		}
		     	}
		     }	
		}
		
		 $query = $this->frameworkdata->getFrameworkByAttribute('framework_id',$newframework);
		 $frameworks[$newframework]['name'] = $query->row()->framework_name;
		 $frameworks[$newframework]['server_id'] = $query->row()->default_server;
		 $squery = $this->serverdata->getServerByAttribute('server_id',$query->row()->default_server);
	  	 if ($squery->num_rows() > 0){
	  	  			$server_dns = $squery->row()->dns1." ".$squery->row()->dns2;
	  	 }
	  	 $frameworks[$newframework]['server_dns'] = $server_dns;
		 $frameworks[$newframework]['preview'] = $query->row()->preview;
		     			
		
		
		 $data['frameworks'] = $frameworks;
	  	    $data['fchoices'] = $this->frameworkdata->getFrameworkByAttribute('builder_id',2);
	  	    if ($this->members->isAdmin()){
	  	    $data['schoices'] = $this->serverdata->getAllServer();
	  	    }else {
	  	    $data['schoices'] = $this->serverdata->getServerByAttribute('is_private',0);
	  	    }
	  	    $html = $this->load->view('domains/ajax-build',$data,true);
			$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'html'=>$html)));   
		
		
	}
	
	
	public function showdnsserver(){
		$server_dns = "";
		$server_id = $this->db->escape_str($this->input->post('server_id'));
		$framework_id = $this->db->escape_str($this->input->post('framework_id'));
		$frameworks = $this->input->post('frameworks');
		$frameworks = json_decode($frameworks,true);
		$frameworks[$framework_id]['server_id'] = $server_id;
		
	    $squery = $this->serverdata->getServerByAttribute('server_id',$server_id);
	  	 if ($squery->num_rows() > 0){
	  	  			$server_dns = $squery->row()->dns1." ".$squery->row()->dns2;
	  	 }
	  	 
	  	 $frameworks[$framework_id]['server_dns'] = $server_dns;
	  	 	$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'html'=>$server_dns,'frameworks'=>json_encode($frameworks))));   
	}
	
	public function showloading(){
		$no_of_domains = $this->db->escape_str($this->input->post('no_of_domains'));
		$data['no_of_domains'] = $no_of_domains;
		$html = $this->load->view('domains/ajax-loading-message',$data,true);
		$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'html'=>$html)));   
	}
	
	public function savedomains(){
		    $company_id  = "";
		    $this->load->library('piwikapi');
		    $this->load->model('piwikdata');
		    $this->load->model('autoresponderdata');  
			
		    $userid = $this->session->userdata('userid');
		    
		    $frameworks = $this->input->post('frameworks');
			$frameworks = json_decode($frameworks,true);
			$partners = $this->input->post('partners');
			$package_id = $this->input->post('package_id');
			$items = $this->input->post('items');
			$title = $this->db->escape_str($this->input->post('title'));
			$description = $this->db->escape_str($this->input->post('description'));
			$is_new = false;
			
			$servers = array();
			
			
			//save domains
	      foreach ($frameworks as $key=>$val){
	      	   if(count($val['domains'])>0){
	      	   	    $servers[$val['server_id']]['dns'] = $val['server_dns'];
			     	foreach ($val['domains'] as $key2=>$val2){
			     		$domain_name = trim($val2['domain_name']);
			     	    $domain_data = array(
					   'domain_name' => $domain_name,
					   'description' => str_replace('[brand]',$domain_name,$description),
					   'price' => 10000,
					   'title'  => str_replace('[brand]',$domain_name,$title),
					   'server_id' => $val['server_id'],
					   'category_id' => $val2['category_id'],
					   'builder_id' => 2,
					   'framework_id' => $key,
					   'member_id'=>$userid
				      
					   );
					   
					    if ($this->domaindata->CheckFieldExists('domain_name',$domain_name)===false){		
					    	$is_new = true;
					    }
					    
					    //if new domain
					    if ($is_new === true){
					    	    $id = $this->domaindata->update(0,$domain_data);
					    	    
							    //add to piwik
		                       if ($this->piwikdata->CheckFieldExists('piwik_site','name',ucfirst($domain_name))===false){
		   	                     $this->piwikapi->create_site_entry($domain_name);
		   	                   }
		   	                   
					          //add to domain theoretical value
              	              if ($this->domaintheovalue->checkexist('domain_id',$id)===false){
				            	$dtv = array('domain_id'=>$id,'domain_name'=>$domain_name,'toupdate'=>1);
				            	$this->domaintheovalue->update(0,$dtv);
				              }
				              
				                     /*auto create a team name for each domain*/
								if($this->teamdata->CheckFieldExists('domain',$domain_name) === false){
									$team_name = $domain_name." team";
									$team_data = array('name' => $team_name,'domain' => $domain_name ,'description' => 'team for '.$domain_name, 'domain_id' => $id);
									$team_data_id = $this->teamdata->update(0,$team_data);
									
										if($team_data_id > 0){
											/*auto generate team members*/
											if($this->teammemberdata->CheckFieldExists('team_id','team_id',$team_data_id) === false){
												
												
												//if invited
												if ($this->members->isInvited() || $this->members->isDomainOwner()){
													$invite_role = $this->members->GetUserInfoById('invited_role',$userid);
													if ($this->members->isDomainOwner()){
														$invite_role = 29;
													}
													$team_member_data_content = array('team_id'=> $team_data_id,'role_id' => $invite_role, 'member_id' => $userid);
													$this->teammemberdata->update(0,$team_member_data_content); //add user invited
												}else{
													//chad as owner
													$team_member_data_owner = array('team_id'=> $team_data_id,'role_id' => '11', 'member_id' => '8');
													$this->teammemberdata->update(0,$team_member_data_owner);
													
													$team_member_data_webDev = array('team_id'=> $team_data_id,'role_id' => '8', 'member_id' => '1');
													$this->teammemberdata->update(0,$team_member_data_webDev);
													
													$team_member_data_projman = array('team_id'=> $team_data_id,'role_id' => '1', 'member_id' => '12');
													$this->teammemberdata->update(0,$team_member_data_projman);
													
													$team_member_data_content = array('team_id'=> $team_data_id,'role_id' => '7', 'member_id' => '5');
													$this->teammemberdata->update(0,$team_member_data_content); //add cathy as content
													
													$team_member_data_content = array('team_id'=> $team_data_id,'role_id' => '7', 'member_id' => '37');
													$this->teammemberdata->update(0,$team_member_data_content); //add marvin as content
												}
											}	
										}
										
											//auto task 
											$goal_date = date('M d, Y');
											$goal_date = strtotime($goal_date);
											$goal_date = strtotime("+7 day", $goal_date);
											$goal_date = date('d-m-Y', $goal_date); /* 1 week after domain is added*/
						
											$task_description1 = "Create Logo for ".$domain_name;
											$title1 = "Create Logo for ".$domain_name;
											$task_data1 = array('title' => $title1, 'description' => $task_description1,
																'domain_id' => $id, 'assigned_to' => '37','created_by' => '12',
																'goal_date' => $goal_date, 'status' => 'new' , 'date_created' =>  'NOW()','to_do' => '1' );
											$this->taskdata->update('0',$task_data1);
											
											$task_description2 = "Add email accounts to ".$domain_name;
											$title2 = "Add email accounts to ".$domain_name;
											$task_data2 = array('title' => $title2, 'description' => $task_description2,
																'domain_id' => $id, 'assigned_to' => '5', 'created_by' => '12',
																'goal_date' => $goal_date, 'status' => 'new' , 'date_created' =>  'NOW()','to_do' => '2' );
											$this->taskdata->update('0',$task_data2);
											
											$this->adddomaindata->autoCreateThingstodo($id);
											$this->adddomaindata->autocrowdtask($id);
											
										
											
										}else{
											$team_id = $this->teamdata->GetTeamInfo('team_id','domain',$domain_name);
											$team_data = array('domain_id' => $id);
											$team_data_id = $this->teamdata->update($team_id,$team_data);
										}
								
										/**	auto create job post */
											 if ($company_id == ""){
												$company_id = '7'; // ecorp 
											}
									
							
									if ($company_id !=""){
										$newass = array('company_id'=>$company_id,'domain_id'=>$id);
										$this->companydomain->update($newass);	
									}		
									
									$this->adddomaindata->autoCreateJob($id,$domain_name,$company_id);
								
										              
				              
					    	    
					    }else {
					     //if old domain
						     if ($this->domaindata->isCustomNew($domain_name)===false){
					       	    $domain_id =   $this->domaindata->GetDomainInfo('domain_id','domain_name',$domain_name);
					       	    $id = $this->domaindata->update($domain_id,$domain_data);
			       	         }
			       	    
				       	    if ($company_id != ""){
				       	    	  $id =   $this->domaindata->GetDomainInfo('domain_id','domain_name',$domain_name);
				       	    	  if ($this->companydomain->CheckFieldExists('domain_id',$id)===true){
				       	    	  	 $this->db->delete('company_domain', array('domain_id' => $id));
				       	    	  }
				       	    	  if ($this->companydomain->checkExistDomain($company_id,$id)===false){
									$newass = array('company_id'=>$company_id,'domain_id'=>$id);
									$this->companydomain->update($newass);	
				       	    	 }
					
				       	    }
					    }
					    
					    
					    //add keywords
					    $this->adddomaindata->savekeyword($domain_name,$id);
					    
					    //save partners
					    
					    $this->adddomaindata->addpartners($domain_name,$val2['category_id'],$partners);
					    
					    //save orders
					    $order_id = $this->adddomaindata->addorders($domain_name,$id,$package_id,$items);

					    //save to autobuild
					    $this->adddomaindata->addtoautobuild($domain_name,$key);
					    
					    //save to server array - for emailing owner to point domains  
					    
					    $servers[$val['server_id']]['domains'][] = $domain_name;
					}
					
					
					
					
					
	      	   }	
		     	
	      	   
		}
		
		$this->adddomaindata->senddnsnotification($servers);
		$this->output
                             ->set_content_type('application/json')
                             ->set_output(json_encode(array('status'=>true,'total'=>$this->cartorderlistdata->getcountbyattribute('order_id',$order_id))));   
			
	}
	



	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */