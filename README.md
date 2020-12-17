# Laravel 8 販售據點位置圖

當顧客在 Google 地圖上搜尋販售據點時，也可以直接顯示出相關資訊，增加顧客到達販售據點的方便性。Laravel 8 販售據點位置圖主要是用的 [QuickAdminPanel](https://quickadminpanel.com) 生成的，除了一些定制代碼，可依需求彈性改造的工具。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，讓公用可存取的檔案維持在一個目錄中。
```sh
$ php artisan storage:link
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/C1o25Nm.png)
> 類別是販售據點描述，方便客戶在搜尋所提供的服務時找到販售據點

![](https://i.imgur.com/4cDqkiK.png)
> 輸入販售據點地址，讓客戶在使用 Google 地圖時，能更準確地找出販售據點的所在位置

![](https://i.imgur.com/vMgMiIs.png)
> Google 地圖搜尋販售據點名稱，或是潛在顧客在附近搜尋販售據點類型時，可以在 Google 地圖上出現販售據點標記，這樣就增加了顧客找到你的可能性