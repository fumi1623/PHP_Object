<?php

//---interface---
// interface LikeInterface
// {
//   public function like();
// }

// abstract class BasePost
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   abstract public function show();
// }

// class Post extends BasePost implements LikeInterface
// {
//   private $likes = 0;
  
//   public function like()
//   {
//     $this -> likes++;
//   }
  
//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this -> likes);
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

// class PremiumPost extends BasePost implements LikeInterface
// {
//   private $price;
//   private $likes = 0;
  
//   public function like()
//   {
//     $this -> likes++;
//   }

//   public function __construct($text, $price)
//   {
//     parent::__construct($text);
//     $this->price = $price;
//   }

//   public function show()
//   {
//     printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this -> likes, $this->price);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[3] = new PremiumPost('hello there', 300);

// $posts[0] -> like();
// $posts[3] -> like();

// function processPost(BasePost $post) 
// {
//   $post->show();
// }

// foreach ($posts as $post) {
//   processPost($post);
// }

//---インターフェースで型を継承---
// interface LikeInterface
// {
//   public function like();
// }

// abstract class BasePost
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   abstract public function show();
// }

// class Post extends BasePost implements LikeInterface
// {
//   private $likes = 0;
  
//   public function like()
//   {
//     $this->likes++;
//   }

//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
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

// class PremiumPost extends BasePost implements LikeInterface
// {
//   private $price;
//   private $likes = 0;
  
//   public function like()
//   {
//     $this->likes++;
//   }
  
//   public function __construct($text, $price)
//   {
//     parent::__construct($text);
//     $this->price = $price;
//   }

//   public function show()
//   {
//     printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[3] = new PremiumPost('hello there', 300);

// // $posts[0]->like();
// // $posts[3]->like();

// function processLikeable(likeInterface $likeable)
// {
//   $likeable -> like();
// }

// processLikeable($posts[0]);
// processLikeable($posts[3]);

// function processPost(BasePost $post) 
// {
//   $post->show();
// }

// foreach ($posts as $post) {
//   processPost($post);
// }

//---trait---
// trait LikeTrait
// {
//   private $likes = 0;
  
//   public function like()
//   {
//     $this->likes++;
//   }
// }

// interface LikeInterface
// {
//   public function like();
// }

// abstract class BasePost
// {
//   protected $text;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   abstract public function show();
// }

// class Post extends BasePost implements LikeInterface
// {
//   use LikeTrait;
  
//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
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

// class PremiumPost extends BasePost implements LikeInterface
// {
//   use LikeTrait;
//   private $price;
  
//   public function __construct($te xt, $price)
//   {
//     parent::__construct($text);
//     $this->price = $price;
//   }

//   public function show()
//   {
//     printf('%s (%d) [%d JPY]' . PHP_EOL, $this->text, $this->likes, $this->price);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');
// $posts[2] = new SponsoredPost('hello hello', 'dotinstall');
// $posts[3] = new PremiumPost('hello there', 300);

// function processLikable(LikeInterface $likable)
// {
//   $likable->like();
// }

// processLikable($posts[0]);
// processLikable($posts[3]);

// function processPost(BasePost $post) 
// {
//   $post->show();
// }

// foreach ($posts as $post) {
//   processPost($post);
// }