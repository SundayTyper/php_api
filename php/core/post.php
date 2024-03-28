<?php

class Post{
  //db stuff
  private $conn;
  private $table = 'posts';

  //post properties
  public $id;
  public $category_id;
  public $category_name;
  public $title;
  public $body;
  public $author;
  public $create_at;

  //constructor with db constructor
  public function __construct($db){
    $this->conn = $db;
  }

  //getting post from database
  public function read(){
    //create query
    $query = 'SELECT
      c.nam as category_name,
      p.id,
      p.category_id,
      p.title,
      p.body,
      p.author,
      p.create_at,
      FROM
      ' .$this->table . ' p
      LEFT JOIN
      categories c ON p.category_id = c.id
      ORDERED BY p.created_at DESC';

    //prepare statement
    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    return $stmt;
  }
}
