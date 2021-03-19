<?php
//---クラス継承---
// class Post
// {
//   private $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// class SponsoredPost extends post
// {
  
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello');

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();

//---クラス継承2---
// class Post
// {
//   private $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// class SponsoredPost extends Post
// {
//   private $sponsor;
  
//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this -> sponsor = $sponsor;
//   }
  
//   public function showSponsor()
//   {
//     printf('%s' . PHP_EOL, $this->sponsor);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
// $posts[2]->showSponsor();

//---override---
// class Post
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   final public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// class SponsoredPost extends Post
// {
//   private $sponsor;
  
//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }
  
//   public function showSponsor()
//   {
//     printf('%s' . PHP_EOL, $this->sponsor);
//   }
  
//   public function show() //override
//   {
//     printf('%s by %s' . PHP_EOL, $this -> text, $this->sponsor);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');

// $posts[0]->show();
// $posts[1]->show();
// $posts[2]->show();
// $posts[2]->showSponsor();

//---型の継承---
// class Post
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// class SponsoredPost extends Post
// {
//   private $sponsor;
  
//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }
  
//   public function show()
//   {
//     printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');

// function processPost(Post $post)
// {
//   $post -> show();
// }

// foreach ($posts as $post) {
//   processPost($post);
// }

//---抽象クラス---
// abstract class BasePost
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }
  
//   abstract public function show();
// }

// class Post extends BasePost
// {
  

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// class SponsoredPost extends BasePost
// {
//   private $sponsor;

//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }

//   public function show()
//   {
//       printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');

// function processPost(BasePost $post) 
// {
//   $post->show();
// }

// foreach ($posts as $post) {
//   processPost($post);
// }

//---add class---

// abstract class BasePost
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   abstract public function show();
// }

// class Post extends BasePost
// {
//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// class SponsoredPost extends BasePost
// {
//   private $sponsor;

//   public function __construct($text, $sponsor)
//   {
//     parent::__construct($text);
//     $this->sponsor = $sponsor;
//   }

//   public function show()
//   {
//     printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
//   }
// }

// class PremiumPost extends BasePost
// {
//   private $price;

//   public function __construct($text, $price)
//   {
//     parent::__construct($text);
//     $this->price = $price;
//   }

//   public function show()
//   {
//     printf('%s [%d JPY]' . PHP_EOL, $this->text, $this->price);
//   }
// }


// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[3] = new PremiumPost('Hello there', 300);

// function processPost(BasePost $post) 
// {
//   $post->show();
// }

// foreach ($posts as $post) {
//   processPost($post);
// }