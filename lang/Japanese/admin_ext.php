<?php

// Language definitions used in all admin files
$lang_admin_ext = array(

'Install extension'				=>	'拡張機能のインストール',
'Upgrade extension'				=>	'拡張機能の更新',
'Extensions available'			=>	'インストール可能な拡張機能',
'Hotfixes available'			=>	'インストール可能なHotfix',
'Installed extensions'			=>	'インストールされている拡張機能',
'Version'						=>	'Version %s',
'Hotfix'						=>	'Hotfix',
'Installed hotfixes'			=>	'インストールされているHotfix',
'Installed extensions warn'		=>	'<strong>注意 !</strong> 拡張機能をアンインストールすると、関連するデータも削除されます。これらのデータを後から復元したい場合はアンインストールの代わりに「無効」にしてください。',
'Uninstall extension'			=>	'拡張機能のアンインストール',
'Uninstall hotfix'				=>	'Hotfixのアンインストール',
'Uninstall'						=>	'アンインストール',
'Uninstall extension confirm'	=>	'本当に "%s" をアンインストールしますか？',
'Enable'						=>	'有効',
'Disable'						=>	'無効',
'Extension error'				=>	'エラー',
'Extension loading error'		=>	'"%s" のロードに失敗しました。',
'Illegal ID'					=>	'IDは小文字の英数字(a-z, 0-9)とアンダースコア(_)のみ使用できます。',
'Maxtestedon error'			=>	'この拡張機能はあなたのPunBBのバージョンに対応していません。',
'Maxtestedon warning'			=>	'この拡張機能はあなたのPunBBのバージョンでテストされていないので、対応していないかもしれません。',
'Missing manifest'				=>	'manifest.xmlがありません。',
'Failed parse manifest'			=>	'manifest.xmlのパースエラー',
'extension root error'			=>	'ルート要素が不正、あるいは見つかりません。',
'extension/engine error'		=>	'ルート要素のengine属性が不正、あるいは見つかりません。',
'extension/engine error2'		=>	'拡張フォーマットのバージョンがサポート外です。',
'extension/id error'			=>	'extension/id要素が不正、あるいは見つかりません。',
'extension/id error2'			=>	'extension/id要素がフォルダ名と一致しません。',
'extension/title error'			=>	'extension/title要素が不正あるいは見つかりません。',
'extension/version error'		=>	'extension/version要素が不正あるいは見つかりません。',
'extension/description error'	=>	'extension/description要素が不正あるいは見つかりません。',
'extension/author error'		=>	'extension/author要素が不正あるいは見つかりません。',
'extension/minversion error'	=>	'extension/minversion要素が不正あるいは見つかりません。',
'extension/minversion error2'	=>	'This extension requires PunBB %s or later.',
'extension/maxtestedon error'	=>	'extension/maxtestedon要素が不正あるいは見つかりません。',
'extension/note error'			=>	'extension/noteが不正です。',
'extension/note error2'			=>	'extension/noteが不正あるいは"type"属性が見つかりません。',
'extension/hooks/hook error'	=>	'extension/hooks/hook要素が不正あるいは見つかりません。',
'extension/hooks/hook error2'	=>	'extension/hooks/hook要素の"id"属性が見つかりません。',
'extension/hooks/hook error3'	=>	'extension/hooks/hook要素の"priority"属性の値が範囲外です。',
'extension/hooks/hook error4'	=>	'extension/hooks/hook要素の中身のPHPモードから抜けていません。',
'No XML support'				=>	'このPHP環境ではビルトインのXML処理がサポートされていません。PunBBの機能拡張にはXML処理が必要です。詳しくはPHPのドキュメントを参照して下さい。',
'No installed extensions'		=>	'拡張機能はインストールされていません。',
'No installed hotfixes'			=>	'Hotfixはインストールされていません。',
'No available extensions'		=>	'インストール・アップグレードできる拡張機能はありません。',
'No available hotfixes'			=>	'インストールできるhotfixはありません。',
'Invalid extensions'			=>	'<strong>重要 !</strong>　以下の拡張機能はextensionsフォルダ内にありましたが、エラーが検出されたためインストール・更新できません。',
'Extension installed'			=>	'拡張機能がインストールされました。',
'Hotfix installed'				=>	'Hotfixがインストールされました。',
'Extension installed info'		=>	'拡張機能は正常にインストールされましたが、以下の削除/違反報告が出力されました。',
'Extension uninstalled'			=>	'拡張機能がアンインストールされました。',
'Hotfix uninstalled'			=>	'Hotfixがアンインストールされました。',
'Extension uninstalled info'	=>	'拡張機能は正常にアンインストールされましたが、以下の削除/違反報告が出力されました。',
'Install note'					=>	'インストール前に読んでください。',
'Uninstall note'				=>	'アンインストール前に読んでください。',
'Hotfix download failed'		=>	'Hotfixのダウンロードとインストールに失敗しました。ちょっと待ってから再度試して下さい。',
'Extension disabled'			=>	'拡張機能が無効にされました',
'Extension enabled'				=>	'拡張機能が有効にされました。',
'Hotfix disabled'				=>	'Hotfixが無効にされました。',
'Hotfix enabled'				=>	'Hotfixが有効にされました。',
'Extension by'					=>	'作成者: %s',
'Hotfix description'			=>	'自動更新があなたのPunBB用のHotfixを検出しました。',
'Install hotfix'				=>	'Hotfixをインストール',
'Missing dependency'			=>	'この拡張機能を使うには "%s" がインストールされ有効にされている必要があります。',
'Uninstall dependency'			=>	'この拡張機能は "%s" をアンインストールしないとアンインストールできません。',
'Disable dependency'			=>	'"%s" が有効な場合は、この拡張機能を無効にできません。',
'Disabled dependency'			=>	'"%s" が無効の場合は、この拡張機能を有効にできません。',
'Download latest version'		=>	'最新版をダウンロード',
'Version dependency error'	=>  '拡張機能 "%s" は version %s 以上でなければなりません。',
'Install ext errors'		=>  '<strong>警告!</strong> 拡張機能をインストールする前に次のエラーを修正する必要があります:',

);