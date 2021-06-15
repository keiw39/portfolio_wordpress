# portfolio_wordpress

- WordPress を用いた「Web デザイナーのポートフォリオサイト」の Web サイト構築
- TOP ＋ 下層 8 ページ<br>

※XD デザインカンプからのコーディング

## 実装したサイト

- [TAKUYA NAKANO - Portfolio](https://works06.k-watanabe39.com/)

BASIC 認証をかけてます。

ID：works<br>
PW：works

### ポイント

- ローディングアニメーションの実装
- マウスカーソルのデザイン変更
- ページ遷移時のローディングアニメーションの実装
- ハンバーガーメニューのメニュー外をクリックしても閉じれるようにユーザビリティを意識した実装を行いました
- 各リンク hover 時のアニメーション実装
- 各要素にフェードインアニメーションを実装
- パンくずリストは「Breadcrumb NavXT」を使用
- コンタクトフォームは「Contact Form 7」を使用

## 制作環境について

### Gulp を導入

Gulp を導入することによって下記を全て自動化しています。<br>
※Sass 公式推奨の「Dart Sass」で記述しております

- Sass のコンパイル
- ブラウザシンク(ファイル編集後、ブラウザを更新 → 反映する自動リロードを行う)
- ベンダープレフィックスの付与
- 画像の自動圧縮

#### Gulp の起動

1. gulpfile.js および package.json がある状態で下記コマンドを打つ。

※node_modules および package-lock.json が生成される

```
$ npm i
```

2. gulp 起動の下記コマンドを打つ。

```
$ npx gulp
```

3. gulpfile.js に記述されたタスクが実行されます。

### Gulp を使用した WebP 形式への変換

jpg や png などの画像を、Gulp を使用して WebP へ自動変換しています。

1. WebP 変換の下記コマンドを打つ。

```
$ gulp webp
```

2. 変換終了 →dist フォルダへ保存される

picture 要素を使用して、WebP 対応・非対応のブラウザ環境ごとに WebP とそのほかの画像形式を出し分けている場合、<br>
変換が完了しても読み込まないので、ブラウザをリロードする。<br>
※WebP 非対応のブラウザの場合、jpg や png が優先的に読み込まれるので、その必要はない

## 経緯

[CODE MENTOR](https://codementor.arutega.jp/)様での課題を基に制作しました。
