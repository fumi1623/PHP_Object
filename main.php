<?php
//--投稿処理
// $posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
// $posts[1] = ['text' => 'hello again', 'likes' => 0];

// print_r($posts);

// function show ($post)
// {
//   printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);

// ---instance---
// // クラス
// class Post
// {
//   // プロパティ
//   public $text;
//   public $likes;

//   // メソッド
//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
//   }
// }

// $posts = [];
// // $posts[0] = ['text' => 'hello', 'likes' => 0];
// $posts[0] = new Post(); // インスタンス
// $posts[0] -> text = 'hello';
// $posts[0] -> likes = 0;
// // $posts[1] = ['text' => 'hello again', 'likes' => 0];
// $posts[1] = new Post(); // インスタンス
// $posts[1] -> text = 'hello again';
// $posts[1] -> likes = 0;

// // show($posts[0]);
// // show($posts[1]);
// $posts[0] -> show();
// $posts[1] -> show();

//---constructor--
// class Post
// {
//   public $text;
//   public $likes;
  
//   // public function __construct($textFromNew, $likesFromNew)
//   // {
//   //   $this -> text = $textFromNew;
//   //   $this -> likes = $likesFromNew;
//   // }
  
//   public function __construct($text, $likes)
//   {
//     $this -> text = $text;
//     $this -> likes = $likes;
//   }

//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello', 0);
// // $posts[0]->text = 'hello';
// // $posts[0]->likes = 0;
// $posts[1] = new Post('hello again', 0);
// // $posts[1]->text = 'hello again';
// // $posts[1]->likes = 0;

// $posts[0]->show();
// $posts[1]->show();

//---class整理---
// class Post
// {
//   public $text;
//   public $likes = 0;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

// $posts[0]->show();
// $posts[1]->show();

//---アクセス修飾子---
// class Post
// {
//   private $text;
//   private $likes = 0;

//   public function __construct($text)
//   {
//     $this->text = $text;
//   }

//   public function show()
//   {
//     printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
//   }

//   public function like()
//   {
//     $this -> likes++;

//     if ($this -> likes > 100) {
//       $this -> likes = 100;
//     }
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

// $posts[0] -> like();

// $posts[0]->show();
// $posts[1]->show();

//---型宣言---
// declare(strict_types=1);

// class Post
// {
//   private string $text;

//   public function __construct(string $text)
//   {
//     $this->text = $text;
//   }

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }

// $posts = [];
// // $posts[0] = new Post('hello');
// $posts[0] = new Post(5);
// $posts[1] = new Post('hello again');

// $posts[0]->show();
// $posts[1]->show();

//---staticキーワード---
// class Post
// {
//   private $text;
//   private static $count = 0;

//   public function __construct($text)
//   {
//     $this->text = $text;
//     self::$count++;
//   }

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }

//   public static function showInfo()
//   {
//     printf('Count: %d' . PHP_EOL, self::$count);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

// $posts[0]->show();
// $posts[1]->show();

// Post::showInfo();

// class Post
// {
//   private $text;
//   private static $count = 0;
//   public const VERSION = 0.1;

//   public function __construct($text)
//   {
//     $this->text = $text;
//     self::$count++;
//   }

//   public function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }

//   public static function showInfo()
//   {
//     printf('Count: %d' . PHP_EOL, self::$count);
//     printf('Version: %.1f' . PHP_EOL, self::VERSION);
//   }
// }

// $posts = [];
// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

// $posts[0]->show();
// $posts[1]->show();

// Post::showInfo();

// echo Post::VERSION . PHP_EOL;
