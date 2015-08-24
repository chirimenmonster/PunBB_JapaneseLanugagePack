<?php

// Language definitions used in install.php
$lang_install = array(

// Install Form
'Install PunBB'				=>	'PunBB %s をインストール',
'Choose language'			=>	'インストーラの言語を変更する',
'Choose language help'		=>	'インストールスクリプトの言語を変更できます。',
'Installer language'		=>	'インストーラ言語:',
'Choose language legend'	=>	'インストーラ言語',
'Install intro'				=>	'PunBBのインストールを行うためには、下の項目に入力してください。項目ごとの説明も読んでから入力してください。インストール作業に問題がある場合は、PunBBのダウンロードパッケージ内にある文書を参照してください。',
'Part1'						=>	'Part 1 -- データベース初期設定',
'Part1 intro'				=>	'PunBB用のデータベースをセットアップするために、下の項目を入力してください。インストールする前にすべての情報をそろえておく必要があります。Help with completing this part of the form is set out below.',
'Database type'				=>	'データベースの種類',
'Database name'				=>	'データベース名',
'Database server'			=>	'データベースサーバー',
'Database username'			=>	'データベースユーザー',
'Database password'			=>	'データベースパスワード',
'Database user pass'		=>	'データベースのユーザー名とパスワード',
'Table prefix'				=>	'テーブル名の接頭語',
'Database type info'		=>	'PunBBはMySQL・PostgreSQL・SQLiteを使えます。ドロップダウンメニューに無い場合は、現在のPHP環境ではサポートされていません。各データベースのバージョンごとの詳細な情報はFAQを参照してください。',
'Mysql type info'			=>	'現在のPHP環境は2つの方法、"<em>standard</em>"と"<em>improved</em>"でMySQLに接続できるようです。どちらを使うべきかわからない場合は、まずimprovedで試し、失敗したらstandardを使用してください。',
'Database server info'		=>	'データベースアドレスを入力してください。(例: <em>localhost</em>, <em>mysql1.example.com</em>, <em>208.77.188.166</em>) デフォルトのポートで無い場合はポートを指定してください。(example: <em>localhost:3580</em>) SQLiteを利用する場合は空欄か\'localhost\'のままにしてください。',
'Database name info'		=>	'PunBBのデータを保存するデータベースの名前を入力してください。すでに存在している必要があります。SQLiteの場合はデータベースファイルへの相対パスです。もしSQLiteデータベースファイルが無い場合はPunBBが作成します。',
'Database username info'	=>	'データベースへの接続ユーザー名とパスワードを入力してください。SQLiteの場合は必要ありません。',
'Table prefix info'			=>	'オプション -- データベースのテーブル名の接頭文字列。複数のPunBBを同じデータベース内で使う場合は各PunBBごとに指定します。 (例: <em>foo_</em>).',
'Part1 legend'				=>	'データベース情報',
'Database type help'		=>	'データベースの選択',
'Database server help'		=>	'データベースのアドレス。SQLiteの場合は空欄',
'Database name help'		=>	'PunBBがインストールされるデータベース',
'Database username help'	=>	'データベース接続のため。SQLiteの場合は不要',
'Database password help'	=>	'データベース接続のため。SQLiteの場合は不要',
'Table prefix help'			=>	'オプションの接頭文字列。e.g. "foo_".',
'Part2'						=>	'Part 2 -- フォーラム管理者初期設定',
'Part2 legend'				=>	'管理者の詳細',
'Part2 intro'				=>	'PunBBインストールのための管理者アカウントを入力してください。後から管理者やモデレーターを追加することもできます。',
'Admin username'			=>	'管理者ユーザー名',
'Admin password'			=>	'管理者パスワード',
'Admin confirm password'	=>	'パスワード確認',
'Admin e-mail'				=>	'管理者のEmail',
'Username help'				=>	'2～25文字',
'Password help'				=>	'最小4文字。大文字・小文字は区別されます。',
'Confirm password help'		=>	'正確に再入力してください。',
'E-mail address help'		=>	'フォーラム管理者のEmail',
'Part3'						=>	'Part 3 -- フォーラム初期設定',
'Part3 legend'				=>	'フォーラム情報',
'Part3 intro'				=>	'必要な情報を入力してください。特にベースURLの入力には注意書きを読んで気をつけて入力してください。',
'Base URL'					=>	'ベースURL',
'Base URL info'				=>	'ベースURLの入力には特に注意して下さい。ベースURLを正しく入力しないと、フォーラムが正常に動作しません。ベースURLとはPunBBフォーラムのURLです（末尾のスラッシュなし） (例: <em>http://forum.example.com</em> や <em>http://example.com/~myuser</em>). 現在の値はPunBBの単なる推測値なので注意してください。',
'Base URL help'				=>	'PunBBのURL (末尾のスラッシュなし)',
'Pun repository'			=>	'Pun レポジトリ',
'Pun repository help'		=>	'フォーラムインストール後にpun_repository拡張をインストール(自動ダウンロードのための拡張機能)',
'Start install'				=>	'インストール開始', // Label for submit button
'Required'					=>	'(必須)',
'Required warn'				=>	'太字の項目は入力が必要です。',

// Install errors
'No database support'		=>	'現在のPHP環境はPunBBが使用できるどのデータベースもサポートしていません。PHPはMySQL・PostgreSQL・SQLiteのどれかをサポートしている必要があります。',
'Missing database name'		=>	'データベース名を入力して下さい。前画面へ戻って修正してください。',
'Username too long'			=>	'ユーザー名が25文字を越えています。前画面へ戻って修正してください。',
'Username too short'		=>	'ユーザー名は少なくとも2文字必要です。前画面へ戻って修正してください。',
'Pass too short'			=>	'パスワードは少なくとも4文字必要です。前画面へ戻って修正してください。',
'Username guest'			=>	'guestユーザーは予約ユーザーなので登録できません。前画面へ戻って修正してください。',
'Username BBCode'			=>	'ユーザー名にはタグ(BBCode)を含めることは出来ません。前画面へ戻って修正してください。',
'Username reserved chars'	=>	'ユーザー名は \'、"、[ 、] を含めることは出来ません。前画面へ戻って修正してください。',
'Username IP'				=>	'ユーザー名はIPアドレス形式であってはいけません。前画面へ戻って修正してください。',
'Invalid email'				=>	'管理者Emailアドレスが正しくありません。前画面へ戻って修正してください。',
'Missing base url'			=>	'ベースURLを入力する必要があります。前画面へ戻って修正してください。',
'No such database type'		=>	'\'%s\' は正しいデータベースタイプではありません。',
'Invalid MySQL version'		=>	'現在稼動しているMySQLのバージョンは %1$s です。PunBBを正常に動作させるには、最低 MySQL %2$s 以上が必要です。インストール前にMySQLをアップグレードしてください。',
'Invalid table prefix'		=>	'テーブル名の接頭文字列 \'%s\' がテーブル名に使えない文字を含んでいるか、長すぎます。文字列に使える文字は[a-z0-9_]です。また、数字から始めることはできず、最長40文字です。接頭文字列を再設定して下さい。',
'SQLite prefix collision'	=>	'テーブル名の接頭文字列が \'sqlite_\' になっていますが、これはSQLiteエンジンでの予約名です。別の文字列を再設定してください。',
'PunBB already installed'	=>	'テーブル "%1$susers" はすでにデータベース "%2$s" 内に存在します。すでにPunBBがインストールされているか、別のアプリケーションで同じテーブルが使われているようです。同じデータベース内で異なるPunBBを使う場合には、異なる接頭文字列を選んでください。',
'Invalid language'			=>	'選択された言語パックが見つからないか、壊れています。確認してからもう一度操作してください。',
'InnoDB Not Supported'		=> 'InnoDB をサポートしていない MySQL です。',

// Used in the install
'Default language'			=>	'デフォルト言語',
'Default language help'		=>	'(もし言語パックを削除したら、この設定を更新しなければいけません。)',
'Default announce heading'	=>	'告知サンプル',
'Default announce message'	=>	'<p>告知内容をここへ</p>',
'Default rules'				=>	'規約をここへ',
'Default category name'		=>	'テストカテゴリ',
'Default forum name'		=>	'テストフォーラム',
'Default forum descrip'		=>	'これはテスト用のフォーラムです。',
'Default topic subject'		=>	'テスト投稿',
'Default post contents'		=>	'もしこれが見えているのならPunBBが正常にインストールされてすでに動作しています！ログインして管理設定からフォーラムの設定を行ってください。',
'Default rank 1'			=>	'新メンバー',
'Default rank 2'			=>	'メンバー',


// Installation completed form
'Success description'		=>	'おめでとうございます！ PunBB %s は正しくインストールされました。',
'Final instructions'		=>	'完了操作',
'No write info 1'			=>	'重要! インストールを完了するには、ボタンをクリックしてconfig.phpファイルをダウンロードする必要があります。このファイルをPunBBのルートディレクトリにアップロードしてください。',
'No write info 2'			=>	'config.phpをアップロードしたら、PunBBのインストールは完了します！ アップロードしたら %s へ行ってください。',
'Go to index'				=>	'フォーラムのトップ',
'Warning'					=>	'警告!',
'No cache write'			=>	'<strong>キャッシュディレクトリが書き込み可能になっていません!</strong> PunBBを正常に動作させるには、PHPが<em>cache</em> に書き込めなければなりません。chmodで適切なパーミッションを与えてください。よくわからない場合は、0777にしてください。',
'No avatar write'			=>	'<strong>アバターディレクトリが書き込み可能になっていません!</strong> ユーザーがアバターをアップロードして使用するためには、PHPが<em>img/avatars</em>に書き込めなければなりません。この設定は後から別のディレクトリに変更することもできます(管理/設定/機能)。よくわからない場合は、0777にしてください。',
'File upload alert'			=>	'<strong>このサーバーへのファイルのアップロードができません!</strong> ユーザーがアバターをアップロードして使用するためには、PHPのファイルアップロード機能が有効になっていなければなりません。',
'Download config'			=>	'config.phpファイルのダウンロード', // Label for submit button
'Write info'				=>	'PunBB のインストールが完了しました! %s へどうぞ',
);
