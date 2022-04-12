<?php
  $rss = simplexml_load_file("https://news.google.com/rss/search?q={%E9%9D%A9%20%E3%83%8F%E3%83%B3%E3%83%89%E3%83%A1%E3%82%A4%E3%83%89}");
  print_r($rss);
