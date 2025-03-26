お問い合わせフォーム<br>
環境構築<br>
Dockerビルド<br>
　<li>1. git clone git@github.com:kozaken23/kakunin.git
  <li>2. docker-compose up -d --build<br>
Laravel環境構築

  <li>1. docker-compose exec php bash
  <li>2. compose install
  <li>3. .env.exampleファイルから.envを作成し、環境変数を変更
  <li>4. php artisan key:generate
  <li>5. php artisan migrate
  <li>6. php artisan db:seed 
  <li>7. php aartisan tinker<br>
          \App\Models\Contact::factory()->count(35)->create();

使用技術 <br>
・PHP 7.4.9 <br>
・Laravel 8.83.8 <br>
・MysQL <br>
・MySQL 15.1 <br>

URL <br>
・開発環境: http://localhost/<br>
・phpMyAdmin http://localhost:8080/<br>

        
