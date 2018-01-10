<?php
/** From en.php Ver:Commits on Jan 9, 2018 ***/
$tx['site']['title']="サイトタイトル（設定>言語ファイルのTitleで編集）";
$tx['subsite']['template']="";

$tx['meta']['keywords']="サイトのキーワード　コンマ区切り　３～５個";
$tx['meta']['description']="サイトの概要（全角60～100文字程度）";

$tx['locale']['all']="ja_JP.UTF-8";

$tx['template']['text1']="テキスト1 for templates requiring this text";
$tx['template']['text2']="テキスト 2 for templates requiring this text";
$tx['template']['text3']="テキスト3 for templates requiring this text";

$tx['urichar']['new']=""; // Ver1.6系 "and"
$tx['urichar']['org']="";// Ver1.6系 "&amp;| ?"

$tx['action']['advanced_hide']="Less &hellip;";
$tx['action']['advanced_show']="More &hellip;";
$tx['action']['backup']="バックアップ";
$tx['action']['cancel']="キャンセル";
$tx['action']['delete']="削除";
$tx['action']['download']="ダウンロード";
$tx['action']['edit']="編集";
$tx['action']['empty']="空にする";
$tx['action']['ok']="OK";
$tx['action']['restore']="復元";
$tx['action']['save']="保存";
$tx['action']['upload']="アップロード";
$tx['action']['view']="表示";

$tx['editmenu']['backups']="バックアップ";
$tx['editmenu']['change_password']="パスワード";
$tx['editmenu']['configuration']="CMS設定";
$tx['editmenu']['downloads']="ダウンロード";
$tx['editmenu']['edit']="編集モードへ";
$tx['editmenu']['files']="ファイル管理";
$tx['editmenu']['help']="ヘルプ";
$tx['editmenu']['images']="画像";
$tx['editmenu']['language']="言語編集";
$tx['editmenu']['log']="ログ表示";
$tx['editmenu']['logout']="ログアウト";
$tx['editmenu']['media']="メディア";
$tx['editmenu']['normal']="表示モードへ";
$tx['editmenu']['pagedata']="ページチェック";
$tx['editmenu']['pagemanager']="ページ管理";
$tx['editmenu']['plugins']="プラグイン管理";
$tx['editmenu']['settings']="設定";
$tx['editmenu']['stylesheet']="スタイルシート編集";
$tx['editmenu']['sysinfo']="システム情報";
$tx['editmenu']['template']="テンプレート編集";
$tx['editmenu']['userfiles']="ユーザーファイル";
$tx['editmenu']['validate']="リンクチェック";

$tx['error']['401']="Error 401: 許可されてません";
$tx['error']['403']="Error 403: Forbidden";
$tx['error']['404']="Error 404: Not found";
$tx['error']['alreadyexists']="既に登録されています";
$tx['error']['badrequest']="失敗しました.  <a href=\".\">もう一度トライ</a>してください.";
$tx['error']['cntdelete']="削除できません";
$tx['error']['cntlocateheading']="ページが選択されてません";
$tx['error']['cntopen']="開けません";
$tx['error']['cntsave']="保存できません";
$tx['error']['cntwriteto']="書き込めません";
$tx['error']['fatal']="致命的なエラー. 詳しい情報は <a href=\"http://www.cmsimple-xh.org/wiki/doku.php/troubleshooting#debug_mode\" target=\"_blank\">デバッグモード</a> を有効にしてください.";
$tx['error']['noeditor']="エディターが変です： \"%s\" ";
$tx['error']['nofilebrowser']="filebrowserが変です： \"%s\" ";
$tx['error']['nopagemanager']="ページ管理が変です： \"%s\" ";
$tx['error']['headers']="ヘッダー情報を変更することはできません - ヘッダが既に送信された (output started at {location})";
$tx['error']['missing']="不明";
$tx['error']['nocookies']="Cookiesを有効にしてください";
$tx['error']['nojs']="Javascriptを有効にしてください";
$tx['error']['notreadable']="読取り不可";
$tx['error']['notwritable']="書込み不可";
$tx['error']['plugincall']="Function %s() が定義されてません!";
$tx['error']['server']="サーバーのエラー： %s";
$tx['error']['undefined']="未定義";

$tx['filetype']['backup']="バックアップ";
$tx['filetype']['config']="CMS　システム設定";
$tx['filetype']['content']="コンテンツデータ";
$tx['filetype']['execute']="実行";
$tx['filetype']['file']="ファイル";
$tx['filetype']['folder']="フォルダー";
$tx['filetype']['language']="言語ファイル（翻訳）";
$tx['filetype']['log']="ログ";
$tx['filetype']['stylesheet']="スタイルシート";
$tx['filetype']['template']="テンプレート編集";
//$tx['heading']['error']="エラー";
$tx['help']['downloads_maxsize']="ダウンロード可能とするファイルの最大値(Byte)。<br>1MByte=1048576Byte 1,000,000 ≒ 1MByte<br> PHPの設定upload_max_filesize, post_max_size も影響します";
$tx['help']['editmenu_scroll']="管理メニューの固定表示。\r\nチェックすると　管理メニューがスクロールします。デフォルト：チェックなし";
$tx['help']['editmenu_external']="他の管理メニューを使用する場合は、プラグインとしてインストールし、その名前をここに入力します。デフォルト：空欄";
$tx['help']['editor_height']="エディタエリアの高さ（Pixel)　デフォルト：600";
$tx['help']['editor_external']="他のエディタを使用する場合は、プラグインとしてインストールし、その名前をここに入力します。デフォルト：tinymce4";
$tx['help']['filebrowser_external']="ファイル管理用･標準プラグイン:Filebrowser for CMSimple と違うものを使用する場合ここに記述します, 例えば プラグイン：hi_kcfinder　を使う場合は、hi_kcfinder と記述します.";
$tx['help']['functions_file']="Please do not change";
$tx['help']['meta_author']="(オプション) 文書の著者名";
$tx['help']['backup_numberoffiles']="データファイル:content.html のバックアップ数　デフォルト10";

$tx['help']['show_hidden_path_locator']="隠しページを表示した際、上位のパンくずリストも表示する";
$tx['help']['show_hidden_pages_search']="隠しページを検索結果に表示する";
$tx['help']['show_hidden_pages_sitemap']="隠しページをサイトマップに載せる";
$tx['help']['show_hidden_pages_toc']="隠しページを表示した際、メニューに表示する";

$tx['help']['images_maxsize']="アップロードできる画像の最大サイズ(Byte)<br>1MByte=1048576Byte 1,500,000 ≒ 1.5MByte<br>PHPの設定upload_max_filesize, post_max_size も影響します";
$tx['help']['language_default']="デフォルト言語　日本語：ja";
$tx['help']['locator_show_homepage']="パンくずリスト等にトップページを含ませる";
$tx['help']['mailform_captcha']="画像認証の表示";
$tx['help']['mailform_email']="メールアドレスを設定すると、メールフォームが有効になります";
$tx['help']['mailform_lf_only']="メールの送信が正常に動作しない場合は、このオプションを有効にしてみてください。";
$tx['help']['menu_color']="システムと違うカラーを使いたい場合設定（未使用）";
$tx['help']['menu_highlightcolor']="システムと違うハイライトカラーを使いたい場合設定（未使用）";
$tx['help']['menu_levels']="サイトとメニュー構造のレベルの数。設定可能な値は1〜6。\r\n<p>\r\n<i>例:</i>\r\n<b>3</b>\r\nなら, h1-h3 がページ分けの区切りになります.\r\n</p>\r\n<p>\r\nデフォルト:\r\n<b>3</b>\r\n</p>";
$tx['help']['menu_sdoc']="空欄 または<br>parent : メニューがクリックされると<i>parent(親）</i>に､CSS の class <i>sdocs</i>が付きます.<br>デフォルト: parent<br>※特別な場合を除いて変更しないでください。";

$tx['help']['meta_robots']="・index,follow : 全てのクローラに対して、インデックスとリンク巡回を許可する<br>noindex,nofollow : 拒否する<br> デフォルト：index,follow";

$tx['help']['pagemanager_external']="ページ管理用・標準プラグイン:Pagemanager_XH と違うプラグインを使用する場合ここに記述します。";
$tx['help']['plugins_disabled']="停止するプラグイン。複数ある場合コンマで区切り。<strong>注意: 実際に使用中である場合、ホームページが正常に表示されなくなり、FTPで直接修正する必要があります</strong>";
$tx['help']['plugins_hidden']="プラグイン管理のメニューに表示しないプラグイン。複数ある場合コンマで区切り。デフォルト：meta_tags,page_params";
$tx['help']['plugins_folder']="変更しないでください";
$tx['help']['security_password']="パスワードは、暗号化され保存されます。５～８字程度を設定ください.";
$tx['help']['security_email']="パスワードの再発行に使用する電子メールアドレス。公に知られていないアドレスを使用することが好ましいです。";
$tx['help']['security_frame_options']="サイトがframe / iframe内で表示される事を制御します<br>・\"DENY\"･･完全に拒否<br>・\"SAMEORIGIN\"･･同じドメインなら許可<br>・空欄･･全て許可<br>デフォルト：空欄";
$tx['help']['site_template']="サイトのテンプレート";
$tx['help']['site_timezone']="通常空白。サーバーのタイムゾーンと違う<a href=\"http://www.php.net/manual/ja/timezones.php\">タイムゾーン</a>を使用する場合に設定（PHP5.1.0\r\n以降)：日本：Asia/Tokyo";
$tx['help']['site_compat']="1.6互換モード：CMSimple_XH 1.7で削除された機能が必要かどうか｡";
$tx['help']['title_format']="titleタグのフォーマット (&lt;title&gt;) \r\n<p>デフォルト（サイト名 - ページ名）：{SITE} <b>&</b>ndash; {PAGE}</p>";
$tx['help']['uri_seperator']="URL内の単語を区切る文字。デフォルト：/";
$tx['help']['uri_word_separator']="URLに含まれる空白スペースを置換えます。デフォルト：-";
$tx['help']['uri_length']="URL最大長。この長さに切り捨てられます。これは、将来のリリースで変更される可能性があります（ページ&rarr代替の見出し） ";
//$tx['help']['xhtml_endtags']="XHTML出力したい場合チェック。endslashes />　が自動的に必要に応じて自動的に作成されます";
$tx['help']['folders_content']="コンテンツが格納されているフォルダ（content.htmなど）";  
$tx['help']['folders_userfiles']="ファイル管理で使用するトップのフォルダ名。<br>デフォルト： userfiles/ ";
$tx['help']['folders_downloads']="ダウンロードファイル用のフォルダ名。ユーザーファイルのサブフォルダになります。<br>デフォルト： downloads/";
$tx['help']['folders_images']="画像ファイル用のフォルダ名。ユーザーファイルのサブフォルダになります。<br>デフォルト： images/";
$tx['help']['folders_media']="メディアファイル用のフォルダ名。ユーザーファイルのサブフォルダになります。<br>デフォルト： media/";

$tx['help']['format_date']="PHPのintl拡張モジュールが利用可能な場合の日付形式。 利用出来ない場合は Lastupdate の Dateformat の形式を使用します｡otherwise the date/time format falls back to <code>\$tx['lastupdate']['format']</code>.";
$tx['help']['format_time']="PHPのintl拡張モジュールが利用可能な場合の時刻形式。 利用出来ない場合は Lastupdate の Dateformat の形式を使用します｡ otherwise the date/time format falls back to <code>\$tx['lastupdate']['format']</code>.";

$tx['label']['empty']="- EMPTY -";

$tx['languagemenu']['text']="言語の選択: ";

$tx['lastupdate']['dateformat']="Y-m-d H:i:s";
$tx['lastupdate']['text']="最終更新日時";

$tx['link']['check']="確認してください: ";
$tx['link']['check_errors']="問題あるリンクがありました: ";
$tx['link']['check_ok']="問題はありません。正常です、";
$tx['link']['checked_1']="%d リンクをチェック ";
$tx['link']['checked_2_4']="%d リンクをチェック ";
$tx['link']['checked_5']="%d リンクをチェックしました";
$tx['link']['checking']="チェック中...";
$tx['link']['email']="このメールアドレスは有効で、まだ使用されてますか？";
$tx['link']['error']="エラー: ";
$tx['link']['errors']="エラー: ";
$tx['link']['ext_error_domain']="リンク（外部）切れです。 ドメインが見つかりません.";
$tx['link']['ext_error_page']="リンク（外部）切れです, サイトを確認してください.";
$tx['link']['hints']="ヒント:";
$tx['link']['int_error']="内部リンクが切れてます。ページがありません.";
$tx['link']['int_error_fragment']="内部リンクが切れてます。アンカーがありません.";
$tx['link']['link']="リンク: ";
$tx['link']['linked_page']="リンク先: ";
$tx['link']['page']="ページ: ";
$tx['link']['redirect']="違うサイトにリダイレクトされてる疑いがあります。リンク先を確認してください.";
$tx['link']['returned_status']="httpステータスコード: ";
$tx['link']['unknown']="原因不明ですが, このリンクを確認してください.";

$tx['locator']['home']="ホーム";
$tx['locator']['text']="現在のページ: ";

$tx['log']['dateformat']="Y-m-d H:i:s";
$tx['log']['loggedin']="ログイン";
$tx['log']['timestamp']="タイムスタンプ";
$tx['log']['type']="タイプ";
$tx['log']['module']="モジュール";
$tx['log']['category']="カテゴリ";
$tx['log']['description']="詳細";

$tx['login']['back']="戻る";
$tx['login']['failure']="パスワードが違います";
$tx['login']['loggedout']="ログアウトしました";
$tx['login']['warning']="<p>サイト管理</p><p>管理者はパスワードを入力してください.</p>";

$tx['mailform']['captcha']="画像の数字/文字を入力して送信してください (画像認証)";
$tx['mailform']['captchafalse']="画像認証 が変です。";
$tx['mailform']['message']="メッセージ";
$tx['mailform']['mustwritemessage']="本文がありません。";
$tx['mailform']['notaccepted']="必須項目が未入力です。";
$tx['mailform']['notsend']="メッセージが送信できませんでした";
$tx['mailform']['send']="The message has been sent";
$tx['mailform']['sendbutton']="メッセージ送信";
$tx['mailform']['sender']="メールアドレス(必須)：";
$tx['mailform']['sendername']="お名前：";
$tx['mailform']['senderphone']="お電話番号: ";
$tx['mailform']['subject']="Subject (必須): ";
$tx['mailform']['subject_default']="Mailform on %s";

$tx['menu']['login']="ログイン";
$tx['menu']['mailform']="お問合せ";
$tx['menu']['print']="Print view";
$tx['menu']['sitemap']="サイトマップ";
$tx['menu']['tab_main']="設定";
$tx['menu']['tab_css']="スタイルシート";
$tx['menu']['tab_config']="基本設定";
$tx['menu']['tab_language']="言語（翻訳）";
$tx['menu']['tab_help']="ヘルプ";

$tx['message']['backedup']="バックアップが完了しました";
$tx['message']['debug_mode']="デバッグモード中";
$tx['message']['emptied']="コンテンツが正常に空になりました。";
$tx['message']['pd_success']="ページのデータが正常に保存されました。一部の設定は、ページの更新や閲覧した後に有効になることがあります。";
$tx['message']['pd_fail']="ページデータが保存できませんでした。もう一度やってください";
$tx['message']['restored']="復元 完了";
$tx['message']['saved']="保存しました- %s　.";

$tx['navigator']['next']="次ページ&raquo; ";
$tx['navigator']['previous']="&laquo;前ページ";
$tx['navigator']['top']="トップ";

$tx['pagedata']['deleted_1']="%s を削除されました";
$tx['pagedata']['deleted_2_4']="%s を削除されました";
$tx['pagedata']['deleted_5']="%s を削除されました";
$tx['pagedata']['fail']="保存できませんでした \"%s\"!";
$tx['pagedata']['info']="次のデータフィールドは、 <<em>現在</em>使用されてません。削除することができます。";
$tx['pagedata']['nothing']="必要なアクションはありません";
$tx['pagedata']['ok']="OK！余分なメニューやページはありません";
//$tx['password']['change']="パスワード変更";
$tx['password']['confirmation']="確認";
$tx['password']['fields_missing']="全ての必要事項を記入してください。";
$tx['password']['invalid']="新しいパスワードは、ASCII文字のみで構成する必要があります。\r\n<p>※「保存」する際に、パスワードの再設定が1度必要です（バグ？）</p>";
$tx['password']['mismatch']="パスワードが一致しません。";
$tx['password']['new']="新しいパスワード";
$tx['password']['old']="古いパスワード";
$tx['password']['score']="パスワードの安全性: %s";
$tx['password']['wrong']="古いパスワードが間違ってます";

$tx['password_forgotten']['email1_sent']="パスワードをリセットするリンクを電子メールで送信しました。リンクは、 1〜2時間有効です";
$tx['password_forgotten']['email1_text']="あなたのパスワードをリセットするように要求しています。あなたのパスワードをリセットするには、次のリンクをクリックしてください：";
$tx['password_forgotten']['email2_sent']="パスワードがリセットされました。新しいパスワードを電子メールに送信しました。";
$tx['password_forgotten']['email2_text']="パスワードがリセットされました。新しいパスワードは、次のとおりです：";
$tx['password_forgotten']['request']="電子メールを確認してください\r\nConfirm the configured email address to request instructions to reset the password.";

$tx['result']['created']=" が作成されました";
$tx['result']['deleted']=" が作成されました";

$tx['search']['button']="検索";
$tx['search']['found_1']="\"%s\" が１ページだけ見つかました ";
$tx['search']['found_2-4']="\"%s\" が %d ページ見つかました ";
$tx['search']['found_5']="\"%s\" が %d ページ見つかました ";
$tx['search']['label']="検索";
$tx['search']['notfound']="\"%s\" が見つかりませんでした";
$tx['search']['result']="検索結果";

$tx['settings']['backup']="バックアップ";
$tx['settings']['backupexplain1']="ログアウト時に内容がバックアップされ、最も古いバックアップファイルが削除されます。";
$tx['settings']['backupexplain2']="バックアップファイル名は 年月日_時分秒が付きます: YYYYMMDD_HHMMSS";
$tx['settings']['backupsuffix']="ファイル名を入力します（a-z 、 0-9 、マイナスとアンダースコアのみ　最大20文字以内）：";
$tx['settings']['ftp']="リモートファイル管理のためにFTPを使用してください";
$tx['settings']['more']="更に...";
$tx['settings']['systemfiles']="システムファイル";
$tx['settings']['warning']="注）この変更は危険です。十分理解した上で変更してください！";

$tx['submenu']['heading']="サブメニュー";

$tx['syscheck']['access_protected']="'%s' is access protected";
$tx['syscheck']['bom']="there is no <a href=\"http://www.cmsimple-xh.org/wiki/doku.php/utf8#what_s_a_bom\" target=\"_blank\">BOM</a>";
$tx['syscheck']['cookie_lifetime']="session.cookie_lifetime is 0";
$tx['syscheck']['extension']="'%s'拡張モジュール の状態";
$tx['syscheck']['fail']="failure";
$tx['syscheck']['fsockopen']="fsockopen関数は、利用可能か？";
$tx['syscheck']['locale_available']="ロケール '%s' は、利用可能か？";
$tx['syscheck']['locale_default']="デフォルトの ロケール を使用";
$tx['syscheck']['magic_quotes']="magic_quotes_runtime is off";
$tx['syscheck']['message']=" %1\$s … %2\$s";
$tx['syscheck']['password']="デフォルトのパスワードは変更されてるか？";
$tx['syscheck']['phpversion']="PHPのバージョン ≥ %s";
$tx['syscheck']['safe_mode']="safe_mode is off";
$tx['syscheck']['success']="OK";
$tx['syscheck']['timezone']="Time zone 有効か？";
$tx['syscheck']['title']="システムチェック";
$tx['syscheck']['use_only_cookies']="session.use_only_cookies is on";
$tx['syscheck']['use_trans_sid']="session.use_trans_sid is off";
$tx['syscheck']['warning']="警告";
$tx['syscheck']['writable']="'%s' 書込み可能か？";

$tx['sysinfo']['helplinks']="ヘルプ＆情報サイト";
$tx['sysinfo']['php_version']="PHPバージョン";
$tx['sysinfo']['phpinfo_hint']="(新しいWindowかタブで開きます)";
$tx['sysinfo']['phpinfo_link']="PHP Info &raquo;";
$tx['sysinfo']['plugins']="インストール済みプラグイン";
$tx['sysinfo']['version']="使用中の CMSimpleのバージョン";
$tx['sysinfo']['unknown']="不明なWebサーバーです";
$tx['sysinfo']['webserver']="サーバー";

$tx['template']['active']="適用テンプレート: ";
$tx['template']['default']="デフォルトテンプレート";

$tx['title']['bad_request']="Bad request";
$tx['title']['change_password']="パスワードの変更";
$tx['title']['cms']="コンテンツマネジメントシステム";
$tx['title']['downloads']="ダウンロード";
$tx['title']['images']="画像";
$tx['title']['log']="ログ一覧";
$tx['title']['mailform']="メールフォーム";
$tx['title']['media']="Mediafiles";
$tx['title']['xh_pagedata']="メニュー＆ページ整合性チェック";
$tx['title']['password_forgotten']="パスワードをお忘れですか？";
$tx['title']['phpinfo']="PHP Info";
$tx['title']['plugins']="プラグイン";
$tx['title']['search']="検索";
$tx['title']['settings']="設定";
$tx['title']['sitemap']="サイトマップ";
$tx['title']['sysinfo']="システム情報";
$tx['title']['templates']="テンプレート";
$tx['title']['userfiles']="ユーザーファイル";
$tx['title']['validate']="リンクの検証";
$tx['title']['xh_backups']="バックアップ";

$tx['toc']['dupl']="DUPLICATE PAGE NAME";
$tx['toc']['empty']="EMPTY PAGE NAME";
$tx['toc']['missing']="MISSING PAGE NAME";
$tx['toc']['newpage']="新しいページ";

$tx['uri']['toolong']="URLが長すぎます。According to 設定&rarr;CMS設定&rarr;Uri&rarr;";

$tx['validate']['extfail']="外部リンク NG";
$tx['validate']['extok']="外部リンク OK";
$tx['validate']['intfail']="内部リンク NG";
$tx['validate']['intfilok']="内部ファイルへのリンク OK";
$tx['validate']['intok']="内部リンク OK";
$tx['validate']['mailto']="メールリンク";
$tx['validate']['notxt']="リンクに内容がありません";
//$tx['utf-8']['marker']="äöü";

?>
