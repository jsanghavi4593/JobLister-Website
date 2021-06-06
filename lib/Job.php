<?php
	class Job
	{
		private $db;

		public function __construct()
		{
			$this->db=new Database;
		}

		public function getAllJobs()
		{
			$this->db->query("SELECT jobs.*,categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id=categories.id ORDER BY post_date DESC");

			$results=$this->db->resultSet();

			return $results;
		}

		public function getCategories()
		{
			$this->db->query("SELECT * FROM categories");

			$results=$this->db->resultSet();

			return $results;

		}

		public function getByCategory($category)
		{
			$this->db->query("SELECT jobs.*,categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id=categories.id WHERE jobs.category_id=$category ORDER BY post_date DESC");

			$results=$this->db->resultSet();

			return $results;
		}
		public function getCategory($category_id)
		{
			$this->db->query("SELECT * FROM categories WHERE id=:category_id");

			$this->db->bind(':category_id',$category_id);

			$row=$this->db->single();
			return $row;
		}

public function getJob($id){

	$this->db->query("SELECT * FROM jobs WHERE id=:id");

			$this->db->bind(':id',$id);

			$row=$this->db->single();
			return $row;
}

public function create($data)
{
	$this->db->query("INSERT INTO jobs (category_id,job_title,company,description,location,salary,contactu,contacte)
		VALUES (:category_id,:job_title,:company,:description,:location,:salary,:contactu,:contacte)
		");

	$this->db->bind(':category_id',$data['category_id']);
	$this->db->bind(':job_title',$data['job_title']);
	$this->db->bind(':company',$data['company']);
	$this->db->bind(':description',$data['description']);
	$this->db->bind(':location',$data['location']);
	$this->db->bind(':salary',$data['salary']);
	$this->db->bind(':contactu',$data['contactu']);
	$this->db->bind(':contacte',$data['contacte']);

	if($this->db->execute()){
		return true;
	}
	else
	{
		return false;
	}

}

	public function update($id,$data)
	{
		$this->db->query("UPDATE jobs
			SET
			category_id = :category_id,
			job_title=:job_title,
			company =:company,
			description = :description,
			location = :location,
		    salary = :salary,
			contactu = :contactu,
			contacte = :contacte
			WHERE id=$id");

		$this->db->bind(':category_id',$data['category_id']);
		$this->db->bind(':job_title',$data['job_title']);
		$this->db->bind(':company',$data['company']);
		$this->db->bind(':description',$data['description']);
		$this->db->bind(':location',$data['location']);
		$this->db->bind(':salary',$data['salary']);
		$this->db->bind(':contactu',$data['contactu']);
		$this->db->bind(':contacte',$data['contacte']);

		if($this->db->execute()){
			return true;
		}
		else
		{
			return false;
		}

	}


	public function delete($id)
	{
		$this->db->query("DELETE FROM jobs WHERE id = $id");

	
	if($this->db->execute()){
		return true;
	}
	else
	{
		return false;
	}
	}

}