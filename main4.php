<?php

//---外部ファイル---
// require('Post.php'); //処理が止まる
// // include('Post.php'); //処理が止まらない
// // require_once('Post.php');
// // include_once('Post.php');

// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

// foreach ($posts as $post) {
//   $post->show();
// }

//---classの読み込み---
// spl_autoload_register(function ($class) {
//   require($class . '.php');
// });

// $posts[0] = new Post('hello');
// $posts[1] = new Post('hello again');

// foreach ($posts as $post) {
//   $post->show();
// }

//---名前空間---
// // use Dotinstall\MyPHPApp as MyPHPApp;
// use Dotinstall\MyPHPApp;

// require('Post.php');

// class Post {}

// // $posts[0] = new Dotinstall\MyPHPApp\Post('hello');
// // $posts[1] = new Dotinstall\MyPHPApp\Post('hello again');
// $posts[0] = new MyPHPApp\Post('hello');
// $posts[1] = new MyPHPApp\Post('hello again');

// foreach ($posts as $post) {
//   $post->show();
// }

//---例外処理---
// require('Post.php');

// try {
//   $posts[0] = new Post('h');
//   $posts[1] = new Post('hello again');
  
//   foreach ($posts as $post) {
//     $post->show();
//   }
// } catch (Exception $e) {
//   echo $e -> getMessage() . PHP_EOL;
// }
//------
// class Post
// {
//   private $text;

//   function __construct($text)
//   {
//     if (strlen($text) <= 3) {
//       // echo 'Text too short!' . PHP_EOL;
//       // exit;
//       throw new Exception('Text too short!');
//     }
//     $this->text = $text;
//   }

//   function show()
//   {
//     printf('%s' . PHP_EOL, $this->text);
//   }
// }